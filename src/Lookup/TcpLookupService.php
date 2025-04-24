<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/7/8
 * Time: 4:07 PM
 */
declare( strict_types = 1 );


namespace Pulsar\Lookup;

use Protobuf\AbstractMessage;
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
     * @var Options
     */
    protected $options;


    /**
     * @param Options $options
     * @throws OptionsException
     */
    public function __construct(Options $options)
    {
        $parse = $options->getUrl();
        $this->host = $parse['host'];
        $this->port = $parse['port'];
        $this->options = $options;
        $this->connection = Factory::create($options);
        $this->connection->connect($this->host, $this->port);
        $this->connection->handshake($options->offsetGet(Options::Authentication));
    }


    /**
     * @param string $topic
     * @return Result
     * @throws IOException
     * @throws RuntimeException
     * @throws OptionsException
     */
    public function lookup(string $topic): Result
    {
        $subCommand = $this->request($this->connection, $topic);

        for ($i = 0; $i < 20; $i++) {

            list($brokerServiceUrl, $proxyServiceUrl) = $this->getBrokerAddress($subCommand);

            $parse = parse_url($brokerServiceUrl);

            switch ($subCommand->getResponse()->value()) {

                // 1、Connect to a broker using a broker
                // 2、Send lookups to new brokers
                // 3、until you return to Connect
                // 4、Maximum 20 attempts
                case CommandLookupTopicResponse\LookupType::Redirect_VALUE:

                    // clone the Options
                    $options = clone $this->options;

                    $options->setUrl($brokerServiceUrl);

                    // create Connection
                    $connection = Factory::create($options);

                    // establish a connection
                    $connection->connect($parse['host'], $parse['port']);

                    // handshake
                    $connection->handshake($options->offsetGet(Options::Authentication));

                    // lookup
                    $subCommand = $this->request($connection, $topic, $subCommand->getAuthoritative());

                    break;

                // is the broker where the current connection is located
                // But it also creates a new connection
                // Instead of using this current connection
                // TLS is supported at this time
                case CommandLookupTopicResponse\LookupType::Connect_VALUE:

                    return new Result($parse['host'], $parse['port'], $proxyServiceUrl);

                //
                default:
                    $this->handleCommandFailed($subCommand);
            }
        }

        throw new RuntimeException('Maximum number of topic searches exceeded');
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
            $this->handleCommandFailed($subCommand);
        }

        return $subCommand->getPartitions();
    }



    /**
     * @param CommandLookupTopicResponse $response
     * @return array<string>
     * @throws OptionsException
     */
    protected function getBrokerAddress(CommandLookupTopicResponse $response): array
    {
        if ($this->options->isTLS()) {
            $brokerServiceUrl = $response->getBrokerServiceUrlTls();
        } else {
            $brokerServiceUrl = $response->getBrokerServiceUrl();
        }

        // Through the current service agent
        $proxyBrokerServiceUrl = $brokerServiceUrl;

        if ($response->getProxyThroughServiceUrl()) {
            $brokerServiceUrl = $this->options->data['url'];
        }

        return [$brokerServiceUrl, $proxyBrokerServiceUrl];
    }



    /**
     * @param AbstractIO $connect
     * @param string $topic
     * @param bool $authoritative
     * @return CommandLookupTopicResponse
     * @throws IOException
     */
    protected function request(AbstractIO $connect, string $topic, bool $authoritative = false): CommandLookupTopicResponse
    {
        $command = new CommandLookupTopic();
        $command->setRequestId(Helper::getRequestID());
        $command->setAuthoritative($authoritative);
        $command->setTopic($topic);
        $response = $connect->writeCommand(Type::LOOKUP(), $command)->wait();

        /**
         * @var $subCommand CommandLookupTopicResponse
         */
        $subCommand = $response->subCommand;
        return $subCommand;
    }

    /**
     * @return void
     */
    public function close()
    {
        $this->connection->close();
    }

    /**
     * @return void
     * @throws RuntimeException
     */
    protected function handleCommandFailed(AbstractMessage $command)
    {
        $code = 0;
        $msg = $command->getMessage();
        if ($command->hasError()) {
            $code = $command->getError()->value();
            $msg = $command->getError()->name();
        }

        throw RuntimeException($msg, $code);
    }
}
