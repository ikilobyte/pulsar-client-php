<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/7/8
 * Time: 4:07 PM
 */
declare( strict_types = 1 );


namespace Pulsar\Lookup;


use Pulsar\Exception\IOException;
use Pulsar\Exception\OptionsException;
use Pulsar\Exception\RuntimeException;
use Pulsar\IO\AbstractIO;
use Pulsar\IO\Factory;
use Pulsar\Options;
use Pulsar\Proto\BaseCommand\Type;
use Pulsar\Proto\CommandLookupTopic;
use Pulsar\Proto\CommandLookupTopicResponse;
use Pulsar\Proto\CommandPartitionedTopicMetadata;
use Pulsar\Proto\CommandPartitionedTopicMetadataResponse;
use Pulsar\Util\Helper;


/**
 * Class TcpLookupService
 *
 * @package Pulsar\Lookup
 */
class TcpLookupService implements LookupService
{
    /**
     * @var AbstractIO
     */
    protected $connection;


    /**
     * @var string
     */
    protected $host;

    /**
     * @var int
     */
    protected $port;


    /**
     * @param Options $options
     * @throws OptionsException
     */
    public function __construct(Options $options)
    {
        $parse = $options->getUrl();
        $this->host = $parse['host'];
        $this->port = $parse['port'];
        $this->connection = Factory::create($options);
        $this->connection->connect($this->host, $this->port);
        $this->connection->handshake($options->offsetGet(Options::Authentication));
    }


    /**
     * @param string $topic
     * @return Result
     * @throws IOException
     * @throws RuntimeException
     */
    public function lookup(string $topic): Result
    {
        $command = new CommandLookupTopic();
        $command->setRequestId(Helper::getRequestID());
        $command->setAuthoritative(false);
        $command->setTopic($topic);
        $response = $this->connection->writeCommand(Type::LOOKUP(), $command)->wait();

        /**
         * @var $subCommand CommandLookupTopicResponse
         */
        $subCommand = $response->subCommand;


        switch ($subCommand->getResponse()->value()) {

            // Need to connect to a new broker
            // TLS is not supported at this time
            case CommandLookupTopicResponse\LookupType::Redirect_VALUE:
                $parse = parse_url($subCommand->getBrokerServiceUrl());
                return new Result($parse['host'], $parse['port'], $subCommand->getBrokerServiceUrl());

            // is the broker where the current connection is located
            // But it also creates a new connection
            // Instead of using this current connection
            // TLS is not supported at this time
            case CommandLookupTopicResponse\LookupType::Connect_VALUE:
                return new Result($this->host, $this->port, $subCommand->getBrokerServiceUrl());

            //
            default:
                throw new RuntimeException($subCommand->getMessage());
        }
    }



    /**
     * @param string $topic
     * @return int
     * @throws IOException
     * @throws RuntimeException
     */
    public function getPartitionedTopicMetadata(string $topic): int
    {
        $command = new CommandPartitionedTopicMetadata();
        $command->setRequestId(Helper::getRequestID());
        $command->setTopic($topic);

        $results = $this->connection->writeCommand(Type::PARTITIONED_METADATA(), $command)->wait();

        /**
         * @var $subCommand CommandPartitionedTopicMetadataResponse
         */
        $subCommand = $results->subCommand;
        if ($subCommand->getResponse()->value() == CommandPartitionedTopicMetadataResponse\LookupType::Failed_VALUE) {
            throw new RuntimeException($subCommand->getMessage());
        }

        return $subCommand->getPartitions();
    }


    /**
     * @return void
     */
    public function close()
    {
        $this->connection->close();
    }
}