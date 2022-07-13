<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/30
 * Time: 5:57 PM
 */
declare( strict_types = 1 );


namespace Pulsar;


/**
 * Class MessageOptions
 *
 * @package Pulsar
 */
class MessageOptions
{
    /**
     *  DeliverAfter requests to deliver the message only after the specified relative delay.
     *  Note: messages are only delivered with delay when a consumer is consuming
     *       through a `SubscriptionType=Shared` or `SubscriptionType=Key_Shared` subscription. With other subscription
     *       types, the messages will still be delivered immediately.
     */
    const DELAY_SECONDS = 'delay_seconds';


    /**
     * @var string
     * Key sets the key of the message for routing policy
     */
    const KEY = 'key';


    /**
     * @var array
     */
    protected $data = [];


    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }


    /**
     * @return string
     */
    public function getKey(): string
    {
        return (string)( $this->data[ self::KEY ] ?? '' );
    }


    /**
     * @return float|int|null
     */
    public function getDeliverAtTime()
    {
        $seconds = $this->data[ self::DELAY_SECONDS ] ?? null;

        if ($seconds) {
            return (int)( ( time() + $seconds ) * 1000 );
        }
        return null;
    }
}
