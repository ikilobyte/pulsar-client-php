<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/26
 * Time: 3:28 PM
 */

namespace Pulsar;

use Pulsar\Exception\OptionsException;
use Pulsar\Proto\CommandSubscribe\InitialPosition;

/**
 * Class ConsumerOptions
 *
 * @package Pulsar
 */
class ConsumerOptions extends Options
{
    /**
     * consumer name
     *
     * @var string
     */
    const NAME = 'name';

    /**
     * subscription
     *
     * @var string
     */
    const SUBSCRIPTION = 'subscription';

    /**
     * sub_type
     *
     * @var int
     */
    const SUBSCRIPTION_TYPE = 'sub_type';

    /**
     * Nack Latency delivery default 60 seconds Unit second
     *
     * @var int
     */
    const NACK_REDELIVERY_DELAY = 'nack_redelivery_delay';

    /**
     * Provides message throughput using local memory, default is 1000
     *
     * @var int
     */
    const RECEIVE_QUEUE_SIZE = 'receive_queue_size';

    /**
     * @var string
     */
    const DEAD_LETTER_POLICY = 'dead_letter_policy';


    /**
     * @var string
     */
    const INITIAL_POSITION = 'initial_position';


    /**
     * @param array $topics
     * @return void
     */
    public function setTopics(array $topics)
    {
        $this->data[ self::TOPICS ] = $topics;
    }


    /**
     * @param string $name
     * @return void
     */
    public function setConsumerName(string $name)
    {
        $this->data[ self::NAME ] = $name;
    }

    /**
     * @param string $subscription
     * @return void
     */
    public function setSubscription(string $subscription)
    {
        $this->data[ self::SUBSCRIPTION ] = $subscription;
    }

    /**
     * @param int $subType
     * @return void
     */
    public function setSubscriptionType(int $subType)
    {
        $this->data[ self::SUBSCRIPTION_TYPE ] = $subType;
    }


    /**
     * @param InitialPosition $position
     * @return void
     */
    public function setSubscriptionInitialPosition(InitialPosition $position)
    {
        $this->data[ self::INITIAL_POSITION ] = $position;
    }

    
    /**
     * @return InitialPosition
     */
    public function getSubscriptionInitialPosition(): InitialPosition
    {
        return $this->data[ self::INITIAL_POSITION ] ?? InitialPosition::Latest();
    }


    /**
     * @param int $seconds
     * @return void
     */
    public function setNackRedeliveryDelay(int $seconds)
    {
        $this->data[ self::NACK_REDELIVERY_DELAY ] = $seconds;
    }



    /**
     * @param int $size
     * @return void
     */
    public function setReceiveQueueSize(int $size)
    {
        if ($size <= 0) {
            $size = 1000;
        }
        $this->data[ self::RECEIVE_QUEUE_SIZE ] = $size;
    }


    /**
     * @param int $maxRedeliveryCount
     * @param string $deadLetterTopic
     * @param string $initialSubscriptionName
     * @return void
     * @throws OptionsException
     */
    public function setDeadLetterPolicy(int $maxRedeliveryCount, string $deadLetterTopic = '', string $initialSubscriptionName = 'logic')
    {
        if ($maxRedeliveryCount <= 0) {
            throw new OptionsException('maxRedeliveryCount Must be greater than 0');
        }

        $config = [
            'max'          => $maxRedeliveryCount,
            'topic'        => $deadLetterTopic,
            'subscription' => $initialSubscriptionName,
        ];
        $this->data[ self::DEAD_LETTER_POLICY ] = new DeadLetterPolicy($config, $this);
    }


    /**
     * @return DeadLetterPolicy
     */
    public function getDeadLetterPolicy(): DeadLetterPolicy
    {
        return $this->data[ self::DEAD_LETTER_POLICY ] ?? new DeadLetterPolicy();
    }

    /**
     * @return int|mixed
     */
    public function getReceiveQueueSize()
    {
        return $this->data[ self::RECEIVE_QUEUE_SIZE ] ?? 1000;
    }

    /**
     * @return string
     * @throws OptionsException
     */
    public function getSubscriptionName(): string
    {
        $subscription = trim($this->data[ ConsumerOptions::SUBSCRIPTION ] ?? '');
        if (empty($subscription)) {
            throw new OptionsException('subscription name is required for consumer');
        }

        return $subscription;
    }


    /**
     * @return string
     * @throws OptionsException
     */
    public function getSubscriptionType(): string
    {

        $subscriptionType = trim($this->data[ ConsumerOptions::SUBSCRIPTION_TYPE ] ?? SubscriptionType::Exclusive);
        if ($subscriptionType < SubscriptionType::Exclusive || $subscriptionType > SubscriptionType::Key_Shared) {
            throw new OptionsException('subscription type Out of range');
        }
        $this->offsetSet(ConsumerOptions::SUBSCRIPTION_TYPE, $subscriptionType);
        return $subscriptionType;
    }

    /**
     * @return int|mixed
     */
    public function getNackRedeliveryDelay()
    {
        $delay = $this->data[ self::NACK_REDELIVERY_DELAY ] ?? 60;
        return $delay <= 0 ? 60 : $delay;
    }


    /**
     * @return mixed|string
     * @throws \Exception
     */
    public function getConsumerName()
    {
        if (!isset($this->data[ ConsumerOptions::NAME ])) {
            $this->data[ ConsumerOptions::NAME ] = base64_encode(random_bytes(6));
        }

        return $this->data[ ConsumerOptions::NAME ];
    }
}