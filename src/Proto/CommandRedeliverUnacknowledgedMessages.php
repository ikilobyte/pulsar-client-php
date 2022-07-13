<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandRedeliverUnacknowledgedMessages message
 */
class CommandRedeliverUnacknowledgedMessages extends \ProtobufMessage
{
    /* Field index constants */
    const CONSUMER_ID = 1;
    const MESSAGE_IDS = 2;
    const CONSUMER_EPOCH = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONSUMER_ID => array(
            'name' => 'consumer_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MESSAGE_IDS => array(
            'name' => 'message_ids',
            'repeated' => true,
            'type' => '\Pulsar\Proto\MessageIdData'
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
        $this->values[self::MESSAGE_IDS] = array();
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
     * Appends value to 'message_ids' list
     *
     * @param \Pulsar\Proto\MessageIdData $value Value to append
     *
     * @return null
     */
    public function appendMessageIds(\Pulsar\Proto\MessageIdData $value)
    {
        return $this->append(self::MESSAGE_IDS, $value);
    }

    /**
     * Clears 'message_ids' list
     *
     * @return null
     */
    public function clearMessageIds()
    {
        return $this->clear(self::MESSAGE_IDS);
    }

    /**
     * Returns 'message_ids' list
     *
     * @return \Pulsar\Proto\MessageIdData[]
     */
    public function getMessageIds()
    {
        return $this->get(self::MESSAGE_IDS);
    }

    /**
     * Returns true if 'message_ids' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMessageIds()
    {
        return count($this->get(self::MESSAGE_IDS)) !== 0;
    }

    /**
     * Returns 'message_ids' iterator
     *
     * @return \ArrayIterator
     */
    public function getMessageIdsIterator()
    {
        return new \ArrayIterator($this->get(self::MESSAGE_IDS));
    }

    /**
     * Returns element from 'message_ids' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Pulsar\Proto\MessageIdData
     */
    public function getMessageIdsAt($offset)
    {
        return $this->get(self::MESSAGE_IDS, $offset);
    }

    /**
     * Returns count of 'message_ids' list
     *
     * @return int
     */
    public function getMessageIdsCount()
    {
        return $this->count(self::MESSAGE_IDS);
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