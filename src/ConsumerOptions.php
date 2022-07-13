<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/26
 * Time: 3:28 PM
 */

namespace Pulsar;

use Pulsar\Exception\OptionsException;

/**
 * Class ConsumerOptions
 *
 * @package Pulsar
 */
class ConsumerOptions extends Options
{
    /**
     * @var string consumer name
     */
    const NAME = 'name';

    /**
     * @var string subscription
     */
    const SUBSCRIPTION = 'subscription';

    /**
     * @var int sub_type
     */
    const SUBSCRIPTION_TYPE = 'sub_type';


    /**
     * @var int Nack Latency delivery default 60 seconds Unit second
     */
    const NACK_REDELIVERY_DELAY = 'nack_redelivery_delay';

    /**
     * @var int Provides message throughput using local memory, default is 1000
     */
    const RECEIVE_QUEUE_SIZE = 'receive_queue_size';


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