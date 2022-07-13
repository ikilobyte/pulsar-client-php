<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/7/5
 * Time: 3:32 PM
 */
declare( strict_types = 1 );


namespace Pulsar;


use Pulsar\Exception\RuntimeException;
use Pulsar\IO\AbstractIO;
use Pulsar\Proto\BaseCommand_Type;
use Pulsar\Proto\CommandCloseProducer;
use Pulsar\Proto\CommandProducer;
use Pulsar\Proto\ProducerAccessMode;
use Pulsar\Util\Buffer;
use Pulsar\Util\Helper;


/**
 * Class PartitionProducer
 *
 * @package Pulsar
 */
class PartitionProducer
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
     * @var ProducerOptions
     */
    protected $options;


    /**
     * @var string
     */
    protected $name;


    /**
     * @param int $id
     * @param string $topic
     * @param AbstractIO $connection
     * @param ProducerOptions $options
     * @throws Exception\IOException
     * @throws \Exception
     */
    public function __construct(int $id, string $topic, AbstractIO $connection, ProducerOptions $options)
    {
        $this->id = $id;
        $this->connection = $connection;
        $this->options = $options;
        $this->topic = $topic;
        $this->name = sprintf('%s-%d', $this->options->getProducerName(), $this->id);
        $this->create();
    }


    /**
     * @return string
     */
    public function getTopic(): string
    {
        return $this->topic;
    }



    /**
     * @return void
     * @throws Exception\IOException
     * @throws \Exception
     */
    protected function create()
    {
        $commandProducer = new CommandProducer();
        $commandProducer->setTopic($this->topic);
        $commandProducer->setProducerId($this->id);
        $commandProducer->setRequestId(Helper::getRequestID());
        $commandProducer->setProducerName($this->name);
        $commandProducer->setUserProvidedProducerName(true);
        $commandProducer->setEncrypted(false);
        $commandProducer->setTxnEnabled(false);
        $commandProducer->setProducerAccessMode(ProducerAccessMode::Shared);

        $this->connection->writeCommand(BaseCommand_Type::PRODUCER, $commandProducer)->wait();
    }



    /**
     * @throws Exception\IOException
     * @throws \Exception
     */
    public function close()
    {
        $command = new CommandCloseProducer();
        $command->setProducerId($this->id);
        $command->setRequestId(Helper::getRequestID());
        $this->connection->writeCommand(BaseCommand_Type::CLOSE_PRODUCER, $command)->wait();
    }


    /**
     * @param Buffer $buffer
     * @return mixed
     * @throws RuntimeException
     */
    public function send(Buffer $buffer)
    {
        $bytes = $buffer->bytes();
        $maxSize = $this->connection->getMaxMessageSize();
        if (strlen($bytes) > $maxSize) {
            throw new RuntimeException(sprintf('Message length exceeded, %d allowed', $maxSize));
        }

        return $this->connection->write($bytes)->wait();
    }


    /**
     * @param Buffer $buffer
     * @return void
     */
    public function sendAsync(Buffer $buffer)
    {
        $this->connection->write($buffer->bytes());
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


    /**
     * @return int
     */
    public function getID(): int
    {
        return $this->id;
    }
}