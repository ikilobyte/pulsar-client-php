<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/08/23
 * Time: 2:36 PM
 */

namespace Pulsar;

use Pulsar\Proto\MessageIdData;


/**
 * Class ReaderOptions
 *
 * @package Pulsar
 */
class ReaderOptions extends Options
{

    /**
     * reader name
     *
     * @var string
     */
    const NAME = 'name';


    /**
     * Provides message throughput using local memory, default is 1000
     *
     * @var int
     */
    const RECEIVE_QUEUE_SIZE = 'receive_queue_size';


    /**
     * @var string
     */
    const START_MESSAGE_ID = 'start_message_id';

    /**
     * @param string $name
     * @return void
     */
    public function setReaderName(string $name)
    {
        $this->data[ self::NAME ] = $name;
    }



    /**
     * @param MessageIdData $message
     * @return void
     */
    public function setStartMessageID(MessageIdData $message)
    {
        $this->data[ self::START_MESSAGE_ID ] = $message;
    }


    /**
     * @return int|mixed|MessageIdData
     */
    public function getStartMessageID()
    {
        return $this->data[ self::START_MESSAGE_ID ] ?? Message::latestMessageIdData();
    }


    /**
     * @return null
     */
    public function getSubscriptionInitialPosition()
    {
        return null;
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
     * @throws \Exception
     */
    public function getSubscriptionName(): string
    {
        return sprintf('reader-%s', base64_encode(random_bytes(6)));
    }


    /**
     * @return string
     */
    public function getSubscriptionType(): string
    {
        // Exclusive only
        return SubscriptionType::Exclusive;
    }

    /**
     * @return int|mixed|string
     * @throws \Exception
     */
    public function getConsumerName(): string
    {
        if (!isset($this->data[ self::NAME ])) {
            $this->data[ self::NAME ] = base64_encode(random_bytes(6));
        }

        return $this->data[ self::NAME ];
    }

}