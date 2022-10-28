<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/25
 * Time: 9:56 PM
 */

namespace Pulsar;


use Pulsar\IO\AbstractIO;
use Pulsar\IO\EventLoop;
use Pulsar\IO\Factory;
use Pulsar\IO\Select;
use Pulsar\Lookup\HttpLookupService;
use Pulsar\Lookup\LookupService;
use Pulsar\Lookup\TcpLookupService;

/**
 * Class Client
 *
 * @package Ikilobyte\Pulsar
 */
abstract class Client
{

    /**
     * @var string
     */
    protected $url;

    /**
     * @var string
     */
    protected $serviceHost;

    /**
     * @var int
     */
    protected $servicePort;


    /**
     * @var string
     */
    protected $serviceScheme;

    /**
     * Class library version
     */
    const VERSION_ID = '1.1.5';

    /**
     * @var Options
     */
    protected $options;


    /**
     * @var bool
     */
    protected $isHandshake = false;


    /**
     * @var TopicManage
     */
    protected $topicManage;


    /**
     * @var LookupService
     */
    protected $lookupService;


    /**
     * @var EventLoop
     */
    protected $eventloop;


    /**
     * @var array<string,AbstractIO>
     */
    protected $connections = [];


    /**
     * @var int reconnect count
     */
    protected $reconnect = 0;


    /**
     * @param string $url
     * @param Options $options
     * @throws Exception\OptionsException
     */
    public function __construct(string $url, Options $options)
    {
        $options->setUrl($url);
        $this->url = $url;
        $this->options = $options;

        $parse = $this->options->getUrl();
        $this->serviceHost = $parse['host'];
        $this->servicePort = $parse['port'];
        $this->serviceScheme = $parse['scheme'];
        $this->getPartitionTopicMetadata();
    }


    /**
     * @return void
     * @throws Exception\OptionsException
     */
    protected function getPartitionTopicMetadata()
    {
        $this->eventloop = new Select();
        $this->lookupService = $this->makeLookupService();
        $this->topicManage = new TopicManage();

        // lookup
        foreach ($this->options->getTopics() as $topic) {
            $partition = $this->lookupService->getPartitionedTopicMetadata(
                $this->options->validateTopic($topic)
            );
            $this->topicManage->setPartitions($topic, $partition);
        }
    }



    /**
     * @return void
     */
    protected function initialization()
    {
        foreach ($this->topicManage->all() as $topic) {
            $result = $this->lookupService->lookup($topic);

            $connectionKey = $result->format();

            if (!isset($this->connections[ $connectionKey ])) {

                $connection = Factory::create($this->options);

                // Establishing a tcp connection
                $connection->connect(
                    $result->getHost(),
                    $result->getPort(),
                    $this->options->offsetGet(Options::CONNECT_TIMEOUT)
                );

                $connection->handshake(
                    $this->options->offsetGet(Options::Authentication),
                    $result->getBrokerServiceUrl()
                );

                // There may be multiple topics assigned to the same connection
                // Only one connection will be created for the same broker
                $this->connections[ $connectionKey ] = $connection;
            }

            $this->topicManage->setConnection($topic, $this->connections[ $connectionKey ]);

            // Add to EventLoop
            $this->eventloop->addRead($this->topicManage->getConnection($topic));
        }

        $this->isHandshake = true;
        $this->lookupService->close();
    }


    /**
     * @return LookupService
     * @throws Exception\OptionsException
     */
    protected function makeLookupService(): LookupService
    {
        if ($this->serviceScheme == 'http') {
            return new HttpLookupService($this->options);
        }

        return new TcpLookupService($this->options);
    }


    /**
     * @return void
     */
    protected function close()
    {
        foreach ($this->connections as $connection) {
            $connection->close();
        }
    }


    /**
     * all connections send PING command
     *
     * @return void
     */
    protected function ping()
    {
        foreach ($this->connections as $connection) {
            $connection->ping();
        }
    }
}