<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/08/23
 * Time: 1:59 PM
 */

namespace Pulsar;


use Pulsar\Exception\OptionsException;
use Pulsar\Exception\RuntimeException;
use Pulsar\Proto\CommandMessage;
use Pulsar\Util\Packer;
use SplQueue;

/**
 * Class Reader
 *
 * @package Pulsar
 */
class Reader extends Client
{

    /**
     * @var SplQueue
     */
    protected $messageQueue;


    /**
     * @var ReaderOptions
     */
    protected $options;


    /**
     * @var array<PartitionConsumer>
     */
    protected $consumers = [];


    /**
     * @param string $url
     * @param ReaderOptions $options
     * @throws OptionsException
     */
    public function __construct(string $url, ReaderOptions $options)
    {
        parent::__construct($url, $options);
        $this->messageQueue = new SplQueue();
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
    public function next(): Message
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

        // ping
        $this->ping();

        if (is_null($response)) {
            return $this->next();
        }


        /**
         * @var $commandMessage CommandMessage
         */
        $commandMessage = $response->getSubCommand();
        if (!( $commandMessage instanceof CommandMessage )) {
            return $this->next();
        }


        $consumer = $this->getPartitionConsumer($commandMessage->getConsumerId());

        /**
         * @var $messages array<Message>
         */
        $messages = Packer::decode($commandMessage, $response->getBuffer(), $consumer->getTopic());

        foreach ($messages as $message) {
            $this->messageQueue->enqueue($message);
        }

        $consumer->decrement(sizeof($messages));

        return $this->messageQueue->dequeue();
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
     * @param int $consumerID
     * @return PartitionConsumer
     */
    protected function getPartitionConsumer(int $consumerID): PartitionConsumer
    {
        return $this->consumers[ $consumerID ];
    }


    /**
     * @return int
     */
    protected function getWaitSeconds(): int
    {
        return 30;
    }
}
