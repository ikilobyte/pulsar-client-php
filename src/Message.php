<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/26
 * Time: 9:36 PM
 */

namespace Pulsar;

use Pulsar\Proto\MessageIdData;
use Pulsar\Util\Helper;
use Pulsar\Util\Tracking;


/**
 * Class Message
 *
 * @package Pulsar
 */
class Message
{
    /**
     * @var MessageIdData
     */
    protected $id;

    /**
     * @var
     */
    protected $publishTime;

    /**
     * @var string
     */
    protected $payload;


    /**
     * @var int
     */
    protected $batchNums = 1;

    /**
     * @var int
     */
    protected $batchIdx = 0;


    /**
     * @var int
     */
    protected $consumerID;


    /**
     * @var string
     */
    protected $topic;


    /**
     * @param MessageIdData $id
     * @param int $consumerID
     * @param string $publishTime
     * @param string $topic
     * @param string $payload
     * @param int $batchNums
     * @param int $batchIdx
     */
    public function __construct(MessageIdData $id,
                                int           $consumerID,
                                string        $publishTime,
                                string        $topic,
                                string        $payload,
                                int           $batchNums = 1,
                                int           $batchIdx = 0
    )
    {
        $this->id = $id;
        $this->consumerID = $consumerID;
        $this->publishTime = $publishTime;
        $this->topic = $topic;
        $this->payload = $payload;
        $this->batchNums = $batchNums;
        $this->batchIdx = $batchIdx;
    }

    /**
     * @return string
     */
    public function getMessageId(): string
    {
        return Helper::serializeID($this->id);
    }


    /**
     * @return int
     */
    public function getConsumerID(): int
    {
        return $this->consumerID;
    }

    /**
     * @return MessageIdData
     */
    public function getMessageIdData(): MessageIdData
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getPublishTime(): string
    {
        return $this->publishTime;
    }

    /**
     * @return string
     */
    public function getPayload(): string
    {
        return $this->payload;
    }


    /**
     * @return string
     */
    public function getTopic(): string
    {
        return $this->topic;
    }

    /**
     * @return bool
     */
    public function canAck(): bool
    {
        return Tracking::tryAck($this->id, $this->batchIdx);
    }
}