<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/26
 * Time: 2:39 PM
 */

namespace Pulsar;


use Pulsar\Exception\IOException;
use Pulsar\Exception\MessageNotFound;
use Pulsar\Exception\OptionsException;
use Pulsar\Exception\RuntimeException;
use Pulsar\Proto\BaseCommand\Type;
use Pulsar\Proto\CommandAckResponse;
use Pulsar\Proto\CommandMessage;
use Pulsar\Util\Buffer;
use Pulsar\Util\Helper;
use Pulsar\Util\Packer;
use SplPriorityQueue;
use SplQueue;
use Throwable;

/**
 * Class Consumer
 *
 * @package Pulsar
 */
class Consumer extends Client
{

    /**
     * @var SplQueue
     */
    protected $messageQueue;


    /**
     * @var ConsumerOptions
     */
    protected $options;


    /**
     * @var \SplPriorityQueue
     */
    protected $nackMessageQueue;


    /**
     * @var array<PartitionConsumer>
     */
    protected $consumers = [];



    /**
     * @param string $url
     * @param ConsumerOptions $options
     * @throws OptionsException
     */
    public function __construct(string $url, ConsumerOptions $options)
    {
        parent::__construct($url, $options);
    }


    /**
     * @return void
     * @throws Exception\IOException
     * @throws OptionsException
     */
    public function connect()
    {
        //
        $this->messageQueue = new SplQueue();
        $this->nackMessageQueue = new SplPriorityQueue();
        $this->nackMessageQueue->setExtractFlags(SplPriorityQueue::EXTR_BOTH);

        parent::initialization();

        // Send Subscribe Command
        foreach ($this->topicManage->all() as $id => $topic) {
            $this->consumers[ $id ] = new PartitionConsumer(
                $id,
                $topic,
                $this->topicManage->getConnection($topic),
                $this->options
            );
        }
    }


    /**
     * @param array $policy
     * @return bool
     * @throws IOException
     */
    protected function reconnect(array $policy): bool
    {
        /**
         * @var $policy array{status: bool,interval: int,limit: int}
         */

        $this->reconnect += 1;
        echo sprintf("consumer reconnect[%d] %s %s\n",
            $this->reconnect,
            $this->url,
            date('Y-m-d H:i:s')
        );

        try {
            // clear status
            $this->connections = [];
            $this->consumers = [];

            // connect
            $this->fetchPartitionTopicMetadata();
            $this->connect();
        } catch (Throwable $e) {

            if ($policy['limit'] >= 1 && $this->reconnect >= $policy['limit']) {
                throw new IOException('Reconnection Fail');
            }

            // Preventing memory overflows
            $interval = $policy['interval'] > 0 ? $policy['interval'] : 5;
            sleep($interval);

            return $this->reconnect($policy);
        }

        echo sprintf("reconnect %s success %s\n", $this->url, date('Y-m-d H:i:s'));
        $this->reconnect = 0;
        return true;
    }

    /**
     * @return void
     * @throws \Exception
     */
    protected function flow()
    {
        foreach ($this->consumers as $consumer) {
            $consumer->flow();
        }
    }


    /**
     * @param bool $loop
     * @return Message
     * @throws IOException
     * @throws RuntimeException
     * @throws MessageNotFound
     */
    public function receive(bool $loop = true): Message
    {
        if (!$this->isHandshake) {
            throw new RuntimeException('not connect to pulsar server');
        }

        // send FLOW command
        $this->flow();

        // get message from local queue
        if (!$this->messageQueue->isEmpty()) {
            return $this->messageQueue->dequeue();
        }

        try {
            $response = $this->eventloop->wait($this->getWaitSeconds());
        } catch (IOException $e) {
            $response = null;

            $policy = $this->options->getReconnectPolicy();
            // not enable reconnect
            if (!$policy['status']) {
                throw $e;
            }

            if ($this->reconnect($policy)) {
                return $this->receive($loop);
            }
        }

        // nack
        $this->executeInternalNack();

        // ping
        $this->ping();
    
        if (is_null($response)) {
            if (!$loop) {
                throw new MessageNotFound();
            }
            return $this->receive($loop);
        }


        /**
         * @var $commandMessage CommandMessage
         */
        $commandMessage = $response->getSubCommand();
        // It may appear that the current message is not CommandMessage
        if (!( $commandMessage instanceof CommandMessage )) {
            if (!$loop) {
                throw new MessageNotFound('command parse fail', MessageNotFound::CommandParseFail);
            }
            return $this->receive($loop);
        }

        $this->enqueueCommandMessage($commandMessage, $response->getBuffer());

        return $this->messageQueue->dequeue();
    }

    /**
     * @return array<Message>
     * @throws IOException
     * @throws MessageNotFound
     * @throws RuntimeException
     */
    public function batchReceive(bool $loop = true): array
    {
        $messages = [$this->receive($loop)];
        while (!$this->messageQueue->isEmpty()) {
            $messages[] = $this->messageQueue->dequeue();
        }

        return $messages;
    }

    /**
     * Sends the CommandAck and blocks for its CommandAckResponse, correlated by request ID.
     *
     * While waiting, any MESSAGE frame that arrives first (the broker may deliver one before
     * the ACK_RESPONSE, since the connection is asynchronous) is queued rather than discarded.
     *
     * Unlike receive(), this does not reconnect on a dropped connection: a lost connection
     * mid-ack throws IOException immediately, regardless of ConsumerOptions::getReconnectPolicy().
     *
     * This is deliberate, not an oversight. A dropped connection during ack() means the
     * broker may already have decided this consumer is gone and redelivered the message to
     * another consumer on the same subscription (Shared/Key_Shared). Throwing immediately
     * gives the caller an honest, timely signal instead of a client library quietly retrying
     * underneath it.
     *
     * @param Message $message
     * @return CommandAckResponse|null
     * @throws IOException
     * @throws RuntimeException
     */
    public function ack(Message $message): ?CommandAckResponse
    {
        if (!$message->canAck()) {
            return null;
        }

        $requestId = Helper::getRequestID();
        $this->getPartitionConsumer($message->getConsumerID())->ack($message, $requestId);

        $deadline = microtime(true) + $this->options->getAckTimeout();

        do {
            $remaining = $deadline - microtime(true);
            if ($remaining <= 0) {
                throw new RuntimeException('Timed out waiting for ACK response.');
            }

            $response = $this->eventloop->wait((int) ceil($remaining));

            if (null === $response) {
                continue;
            }

            $baseCommand = $response->getBaseCommand();

            $commandType = $baseCommand->getType();

            if (Type::CLOSE_CONSUMER_VALUE === $commandType->value()) {
                // only abort if it's the consumer this message belongs to; the connection
                // may be shared with other partition consumers that closed independently
                if ($baseCommand->getCloseConsumer()->getConsumerId() === $message->getConsumerID()) {
                    throw new RuntimeException(
                        'The consumer was closed before the message acknowledgment was confirmed.'
                    );
                }
                continue;
            }

            if (Type::MESSAGE_VALUE === $commandType->value()) {
                $this->enqueueCommandMessage($baseCommand->getMessage(), $response->getBuffer());
                continue;
            }

            if (Type::ACK_RESPONSE_VALUE === $commandType->value()) {
                $ackResponse = $baseCommand->getAckResponse();

                if ($ackResponse->getRequestId() !== $requestId) {
                    throw new RuntimeException('ACK response request ID does not match.');
                }

                if ($ackResponse->hasError()) {
                    $msg = $ackResponse->hasMessage() ? $ackResponse->getMessage() : $ackResponse->getError()->name();
                    throw new RuntimeException(
                        sprintf('The broker rejected the acknowledgment: %s', $msg),
                        $ackResponse->getError()->value()
                    );
                }

                return $ackResponse;
            }

        } while (true);
    }


    /**
     * @param Message $message
     * @return void
     * @throws \Exception
     */
    public function nack(Message $message)
    {
        if (!$message->canAck()) {
            return;
        }

        // Is it necessary to enter the dead letter queue
        $deadLetter = $this->options->getDeadLetterPolicy();
        if ($deadLetter->trigger($message)) {
            $this->ack($message);
            return;
        }

        // push to Local queue
        $this->nackMessageQueue->insert($message, -( time() + $this->options->getNackRedeliveryDelay() ));
    }


    /**
     * @return void
     * @throws \Exception
     */
    protected function executeInternalNack()
    {
        if ($this->nackMessageQueue->isEmpty()) {
            return;
        }

        for ($i = 0; $i < $this->nackMessageQueue->count(); $i++) {
            $priority = $this->nackMessageQueue->top()['priority'];

            if (time() < -$priority) {
                return;
            }

            /**
             * @var $message Message
             */
            $message = $this->nackMessageQueue->extract()['data'];

            // send CommandRedeliverUnacknowledgedMessages
            $this->getPartitionConsumer($message->getConsumerID())->nack($message);
        }
    }



    /**
     * @return void
     * @throws Exception\IOException
     */
    public function close()
    {
        // Send Close Command
        foreach ($this->consumers as $consumer) {
            $consumer->close();
        }

        // Close tcp connection
        parent::close();
    }


    /**
     * @return int|mixed
     */
    protected function getWaitSeconds()
    {
        if ($this->nackMessageQueue->isEmpty()) {
            return $this->options->getNackRedeliveryDelay();
        }

        /**
         * @var $message Message
         */
        $priority = $this->nackMessageQueue->top()['priority'];

        return max(-$priority - time(), 0);
    }


    /**
     * @param int $consumerID
     * @return PartitionConsumer
     */
    protected function getPartitionConsumer(int $consumerID): PartitionConsumer
    {
        return $this->consumers[ $consumerID ];
    }

    /**
     * Decodes a MESSAGE frame's payload into Message objects, queues them locally, and
     * decrements the partition's available flow-control permits accordingly.
     *
     * Shared by receive() and ack()'s wait loop, since a MESSAGE frame can arrive while
     * ack() is waiting on the same connection for an unrelated ACK_RESPONSE -- it must be
     * queued here rather than discarded, or the message would be silently lost.
     *
     * @param CommandMessage $commandMessage
     * @param Buffer $buffer
     * @return void
     */
    private function enqueueCommandMessage(CommandMessage $commandMessage, Buffer $buffer)
    {
        $consumer = $this->getPartitionConsumer($commandMessage->getConsumerId());

        /**
         * @var array<Message> $messages
         */
        $messages = Packer::decode($commandMessage, $buffer, $consumer->getTopic());

        foreach ($messages as $message) {
            // Save Options to Message Object
            $message->setOptions($this->options);

            $this->messageQueue->enqueue($message);
        }

        $consumer->decrement(sizeof($messages));
    }

}
