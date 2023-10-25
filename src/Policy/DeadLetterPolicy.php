<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/8/10
 * Time: 2:57 PM
 */
declare( strict_types = 1 );


namespace Pulsar\Policy;


use Pulsar\Authentication\Authentication;
use Pulsar\Compression\Compression;
use Pulsar\ConsumerOptions;
use Pulsar\Exception;
use Pulsar\Exception\OptionsException;
use Pulsar\Message;
use Pulsar\Options;
use Pulsar\Producer;
use Pulsar\ProducerOptions;

/**
 * Class DeadLetterPolicy
 *
 * @package Pulsar
 */
class DeadLetterPolicy
{
    /**
     * @var array
     */
    protected $config = [];


    /**
     * @var array
     */
    protected $data = [];


    /**
     * @var ConsumerOptions|null
     */
    protected $options;


    /**
     * @param array $config
     * @param ConsumerOptions|null $options
     * @throws OptionsException
     */
    public function __construct(array $config = [], ConsumerOptions $options = null)
    {
        $this->config = $config;
        $this->options = $options;

        if (empty($this->config['subscription'])) {
            // Consistent with consumers
            $this->config['subscription'] = $options->getSubscriptionName();
        }
    }


    /**
     * @param Message $message
     * @return bool
     * @throws Exception\IOException
     * @throws Exception\OptionsException
     * @throws Exception\RuntimeException
     */
    public function trigger(Message $message): bool
    {
        $max = $this->config['max'] ?? 0;

        // Dead letter queue delivery is not turned on
        if ($max <= 0) {
            return false;
        }

        $id = $message->getMessageId();

        if (!isset($this->data[ $id ])) {
            $this->data[ $id ] = 0;
        }

        $count = $this->data[ $id ] += 1;

        if ($count < $max) {
            return false;
        }


        // Sending messages to the dead letter queue
        $this->storage($message);

        unset($this->data[ $id ]);
        return true;
    }




    /**
     * @param Message $message
     * @return void
     * @throws Exception\IOException
     * @throws Exception\OptionsException
     * @throws Exception\RuntimeException
     */
    protected function storage(Message $message)
    {
        $topic = $this->config['topic'];

        // Recommend use default format
        if (empty($topic)) {
            $topic = sprintf(
                '%s-%s-DLQ',
                // replace partition topic flag
                preg_replace('/-partition-\d+/', '', $message->getTopic()),
                $this->options->getSubscriptionName()
            );
        }

        $options = new ProducerOptions();
        $options->setConnectTimeout(3);
        $options->setTopic($topic);
        $options->setInitialSubscriptionName($this->config['subscription']);
        $options->setCompression(Compression::ZLIB);

        /**
         * @var $authentication Authentication
         */
        $authentication = $this->options->offsetGet(Options::Authentication);
        if ($authentication) {
            $options->setAuthentication($authentication);
        }

        $producer = new Producer($this->options->getUrl()['url'], $options);
        $producer->connect();
        $producer->send($message->getPayload());
        $producer->close();
    }
}