<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandMessage message
 */
class CommandMessage extends \ProtobufMessage
{
    /* Field index constants */
    const CONSUMER_ID = 1;
    const MESSAGE_ID = 2;
    const REDELIVERY_COUNT = 3;
    const ACK_SET = 4;
    const CONSUMER_EPOCH = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONSUMER_ID => array(
            'name' => 'consumer_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MESSAGE_ID => array(
            'name' => 'message_id',
            'required' => true,
            'type' => '\Pulsar\Proto\MessageIdData'
        ),
        self::REDELIVERY_COUNT => array(
            'default' => 0,
            'name' => 'redelivery_count',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ACK_SET => array(
            'name' => 'ack_set',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONSUMER_EPOCH => array(
            'name' => 'consumer_epoch',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::CONSUMER_ID] = null;
        $this->values[self::MESSAGE_ID] = null;
        $this->values[self::REDELIVERY_COUNT] = self::$fields[self::REDELIVERY_COUNT]['default'];
        $this->values[self::ACK_SET] = array();
        $this->values[self::CONSUMER_EPOCH] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'consumer_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setConsumerId($value)
    {
        return $this->set(self::CONSUMER_ID, $value);
    }

    /**
     * Returns value of 'consumer_id' property
     *
     * @return integer
     */
    public function getConsumerId()
    {
        $value = $this->get(self::CONSUMER_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'consumer_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConsumerId()
    {
        return $this->get(self::CONSUMER_ID) !== null;
    }

    /**
     * Sets value of 'message_id' property
     *
     * @param \Pulsar\Proto\MessageIdData $value Property value
     *
     * @return null
     */
    public function setMessageId(\Pulsar\Proto\MessageIdData $value=null)
    {
        return $this->set(self::MESSAGE_ID, $value);
    }

    /**
     * Returns value of 'message_id' property
     *
     * @return \Pulsar\Proto\MessageIdData
     */
    public function getMessageId()
    {
        return $this->get(self::MESSAGE_ID);
    }

    /**
     * Returns true if 'message_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMessageId()
    {
        return $this->get(self::MESSAGE_ID) !== null;
    }

    /**
     * Sets value of 'redelivery_count' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRedeliveryCount($value)
    {
        return $this->set(self::REDELIVERY_COUNT, $value);
    }

    /**
     * Returns value of 'redelivery_count' property
     *
     * @return integer
     */
    public function getRedeliveryCount()
    {
        $value = $this->get(self::REDELIVERY_COUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'redelivery_count' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRedeliveryCount()
    {
        return $this->get(self::REDELIVERY_COUNT) !== null;
    }

    /**
     * Appends value to 'ack_set' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendAckSet($value)
    {
        return $this->append(self::ACK_SET, $value);
    }

    /**
     * Clears 'ack_set' list
     *
     * @return null
     */
    public function clearAckSet()
    {
        return $this->clear(self::ACK_SET);
    }

    /**
     * Returns 'ack_set' list
     *
     * @return integer[]
     */
    public function getAckSet()
    {
        return $this->get(self::ACK_SET);
    }

    /**
     * Returns true if 'ack_set' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAckSet()
    {
        return count($this->get(self::ACK_SET)) !== 0;
    }

    /**
     * Returns 'ack_set' iterator
     *
     * @return \ArrayIterator
     */
    public function getAckSetIterator()
    {
        return new \ArrayIterator($this->get(self::ACK_SET));
    }

    /**
     * Returns element from 'ack_set' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getAckSetAt($offset)
    {
        return $this->get(self::ACK_SET, $offset);
    }

    /**
     * Returns count of 'ack_set' list
     *
     * @return int
     */
    public function getAckSetCount()
    {
        return $this->count(self::ACK_SET);
    }

    /**
     * Sets value of 'consumer_epoch' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setConsumerEpoch($value)
    {
        return $this->set(self::CONSUMER_EPOCH, $value);
    }

    /**
     * Returns value of 'consumer_epoch' property
     *
     * @return integer
     */
    public function getConsumerEpoch()
    {
        $value = $this->get(self::CONSUMER_EPOCH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'consumer_epoch' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConsumerEpoch()
    {
        return $this->get(self::CONSUMER_EPOCH) !== null;
    }
}
}