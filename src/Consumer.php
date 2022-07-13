<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/26
 * Time: 2:39 PM
 */

namespace Pulsar;


use GuzzleHttp\Exception\GuzzleException;
use Pulsar\Exception\OptionsException;
use Pulsar\Exception\RuntimeException;
use Pulsar\Proto\CommandMessage;
use Pulsar\Util\Packer;
use SplPriorityQueue;
use SplQueue;

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
     * @throws RuntimeException
     * @throws GuzzleException
     * @throws Exception\ConnectException
     * @throws Exception\IOException
     */
    public function __construct(string $url, ConsumerOptions $options)
    {
        parent::__construct($url, $options);
        $this->messageQueue = new SplQueue();
        $this->nackMessageQueue = new SplPriorityQueue();
        $this->nackMessageQueue->setExtractFlags(SplPriorityQueue::EXTR_BOTH);
    }


    /**
     * @return void
     * @throws Exception\IOException
     * @throws OptionsException
     */
    public function connect()
    {
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
     * @return Message
     * @throws Exception\IOException
     * @throws RuntimeException
     * @throws \Exception
     */
    public function receive(): Message
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

        $response = $this->eventloop->wait($this->getWaitSeconds());

        // nack
        $this->executeInternalNack();

        if (is_null($response)) {
            return $this->receive();
        }


        /**
         * @var $commandMessage CommandMessage
         */
        $commandMessage = $response->getSubCommand();
        if (!( $commandMessage instanceof CommandMessage )) {
            return $this->receive();
        }


        $consumer = $this->getPartitionConsumer($commandMessage->getConsumerId());

        /**
         * @var $messages array<Message>
         */
        $messages = Packer::decode($commandMessage, $response->getBuffer(), $consumer->getTopic());

        foreach ($messages as $message) {
            $this->messageQueue->enqueue($message);
        }

        $consumer->decrement(1);

        return $this->messageQueue->dequeue();
    }


    /**
     * @param Message $message
     * @return void
     * @throws \Exception
     */
    public function ack(Message $message)
    {
        if (!$message->canAck()) {
            return;
        }

        // send CommandAck
        $this->getPartitionConsumer($message->getConsumerID())->ack($message);
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

}