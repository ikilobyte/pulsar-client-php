<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/30
 * Time: 5:57 PM
 */
declare( strict_types = 1 );


namespace Pulsar;


use Pulsar\Util\Helper;

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
     * Specify the sequence ID of each message, used for message de-duplication, unspecified will be generated automatically
     * This sequence ID needs to be unique and needs to be self-increasing
     *
     * @see https://pulsar.apache.org/docs/next/concepts-messaging#message-deduplication
     */
    const SEQUENCE_ID = 'sequence_id';


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


    /**
     * @return int
     */
    public function getSequenceID(): int
    {
        return (int)( $this->data[ self::SEQUENCE_ID ] ?? Helper::getSequenceId() );
    }
}
