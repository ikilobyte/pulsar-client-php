<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/26
 * Time: 9:36 PM
 */

namespace Pulsar;

use Protobuf\MessageCollection;
use Pulsar\Exception\RuntimeException;
use Pulsar\Proto\KeyValue;
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
     * @var MessageCollection|null
     */
    protected $properties = null;


    /**
     * @var int
     */
    protected $redeliveryCount = 0;

    /**
     * @param MessageIdData $id
     * @param int $consumerID
     * @param string $publishTime
     * @param string $topic
     * @param string $payload
     * @param int $batchNums
     * @param int $batchIdx
     * @param int $redeliveryCount
     * @param MessageCollection|null $properties
     */
    public function __construct(MessageIdData     $id,
                                int               $consumerID,
                                string            $publishTime,
                                string            $topic,
                                string            $payload,
                                int               $batchNums = 1,
                                int               $batchIdx = 0,
                                int               $redeliveryCount = 0,
                                MessageCollection $properties = null
    )
    {
        $this->id = $id;
        $this->consumerID = $consumerID;
        $this->publishTime = $publishTime;
        $this->topic = $topic;
        $this->payload = $payload;
        $this->batchNums = $batchNums;
        $this->batchIdx = $batchIdx;
        $this->redeliveryCount = $redeliveryCount;
        $this->properties = $properties;
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
     * The number is self-incrementing when nack is used and is maintained by the pulsar broker
     * The quantity is reset when the consumer disconnects
     */
    public function getRedeliveryCount(): int
    {
        return $this->redeliveryCount;
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
     * @return array
     */
    public function getProperties(): array
    {
        if (is_null($this->properties)) {
            return [];
        }

        $results = [];
        foreach ($this->properties as $kv) {

            /**
             * @var $kv KeyValue
             */
            $results[ $kv->getKey() ] = $kv->getValue();
        }

        return $results;
    }

    /**
     * @return bool
     */
    public function canAck(): bool
    {
        return Tracking::tryAck($this->id, $this->batchIdx);
    }


    /**
     * 生成最新的消息ID给reader使用
     *
     * @return MessageIdData
     */
    public static function latestMessageIdData(): MessageIdData
    {
        $id = new MessageIdData();
        $id->setLedgerId(PHP_INT_MAX);
        $id->setEntryId(PHP_INT_MAX);
        return $id;
    }


    /**
     * 生成最早的消息ID给reader使用
     *
     * @return MessageIdData
     */
    public static function earliestMessageIdData(): MessageIdData
    {
        $id = new MessageIdData();
        $id->setLedgerId(-1);
        $id->setEntryId(-1);
        return $id;
    }


    /**
     * 将消息ID转成MessageID对象
     *
     * @param string $messageID
     * @return MessageIdData
     * @throws RuntimeException
     */
    public static function deserialize(string $messageID): MessageIdData
    {
        return Helper::unserializeID($messageID);
    }
}