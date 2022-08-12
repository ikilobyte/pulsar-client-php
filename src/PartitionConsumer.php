<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/7/4
 * Time: 4:44 PM
 */
declare( strict_types = 1 );


namespace Pulsar;


use Pulsar\IO\AbstractIO;
use Pulsar\Proto\BaseCommand\Type;
use Pulsar\Proto\CommandAck;
use Pulsar\Proto\CommandAck\AckType;
use Pulsar\Proto\CommandCloseConsumer;
use Pulsar\Proto\CommandFlow;
use Pulsar\Proto\CommandRedeliverUnacknowledgedMessages;
use Pulsar\Proto\CommandSubscribe;
use Pulsar\Util\Helper;


/**
 * Class PartitionConsumer
 *
 * @package Pulsar
 */
class PartitionConsumer
{
    /**
     * @var int
     */
    protected $id;


    /**
     * @var string
     */
    protected $topic;


    /**
     * @var AbstractIO
     */
    protected $connection;


    /**
     * @var ConsumerOptions
     */
    protected $options;

    /**
     * @var int
     */
    protected $availablePermits = 0;


    /**
     * Use memory to increase throughput defaults 1000
     *
     * @var int
     */
    protected $receiveQueueSize;


    /**
     * @var string
     */
    protected $name;


    /**
     * @param int $id
     * @param string $topic
     * @param AbstractIO $connection
     * @param ConsumerOptions $options
     * @throws Exception\IOException
     * @throws Exception\OptionsException
     * @throws \Exception
     */
    public function __construct(int $id, string $topic, AbstractIO $connection, ConsumerOptions $options)
    {
        $this->id = $id;
        $this->connection = $connection;
        $this->options = $options;
        $this->topic = $topic;
        $this->name = sprintf('%s-%d', $this->options->getConsumerName(), $id);
        $this->receiveQueueSize = $this->options->getReceiveQueueSize();
        $this->subscribe();
    }


    /**
     * @return void
     * @throws Exception\IOException
     * @throws Exception\OptionsException
     * @throws \Exception
     */
    protected function subscribe()
    {
        $command = new CommandSubscribe();
        $command->setConsumerId($this->id);
        $command->setTopic($this->topic);
        $command->setRequestId(Helper::getRequestID());
        $command->setSubType(CommandSubscribe\SubType::valueOf($this->options->getSubscriptionType()));
        $command->setConsumerName($this->name);
        $command->setSubscription($this->options->getSubscriptionName());

        $command->setDurable(true);
        $command->setInitialPosition(CommandSubscribe\InitialPosition::Latest());
        $command->setReplicateSubscriptionState(false);
        $this->connection->writeCommand(Type::SUBSCRIBE(), $command)->wait();
    }


    /**
     * @throws \Exception
     */
    public function flow()
    {
        if ($this->availablePermits >= $this->receiveQueueSize) {
            return;
        }

        $supplement = $this->receiveQueueSize - $this->availablePermits;

        if ($this->availablePermits <= $this->receiveQueueSize / 2) {
            $flow = new CommandFlow();
            $flow->setConsumerId($this->id);
            $flow->setMessagePermits($supplement);
            $this->connection->writeCommand(Type::FLOW(), $flow);
            $this->availablePermits += $supplement;
        }
    }


    /**
     * @param Message $message
     * @return void
     */
    public function ack(Message $message)
    {
        // send CommandAck
        $command = new CommandAck();
        $command->setConsumerId($this->id);
        $command->setAckType(AckType::Individual());
        $command->addMessageId($message->getMessageIdData());
        $command->setTxnidLeastBits(null);
        $command->setTxnidMostBits(null);
        $this->connection->writeCommand(Type::ACK(), $command);
    }


    /**
     * @param Message $message
     * @return void
     * @throws \Exception
     */
    public function nack(Message $message)
    {
        // send CommandRedeliverUnacknowledgedMessages
        $command = new CommandRedeliverUnacknowledgedMessages();
        $command->setConsumerId($this->id);
        $command->addMessageIds($message->getMessageIdData());
        $this->connection->writeCommand(Type::REDELIVER_UNACKNOWLEDGED_MESSAGES(), $command);
    }


    /**
     * @return void
     * @throws Exception\IOException
     * @throws \Exception
     */
    public function close()
    {
        $command = new CommandCloseConsumer();
        $command->setConsumerId($this->id);
        $command->setRequestId(Helper::getRequestID());
        $this->connection->writeCommand(Type::CLOSE_CONSUMER(), $command)->wait();
    }



    /**
     * @return string
     */
    public function getTopic(): string
    {
        return $this->topic;
    }

    /**
     * @param int $size
     * @return void
     */
    public function decrement(int $size = 1)
    {
        $this->availablePermits -= $size;
    }
}