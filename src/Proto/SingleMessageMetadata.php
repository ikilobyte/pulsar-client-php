<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * SingleMessageMetadata message
 */
class SingleMessageMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const PROPERTIES = 1;
    const PARTITION_KEY = 2;
    const PAYLOAD_SIZE = 3;
    const COMPACTED_OUT = 4;
    const EVENT_TIME = 5;
    const PARTITION_KEY_B64_ENCODED = 6;
    const ORDERING_KEY = 7;
    const SEQUENCE_ID = 8;
    const NULL_VALUE = 9;
    const NULL_PARTITION_KEY = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PROPERTIES => array(
            'name' => 'properties',
            'repeated' => true,
            'type' => '\Pulsar\Proto\KeyValue'
        ),
        self::PARTITION_KEY => array(
            'name' => 'partition_key',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PAYLOAD_SIZE => array(
            'name' => 'payload_size',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COMPACTED_OUT => array(
            'default' => false,
            'name' => 'compacted_out',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::EVENT_TIME => array(
            'default' => 0,
            'name' => 'event_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PARTITION_KEY_B64_ENCODED => array(
            'default' => false,
            'name' => 'partition_key_b64_encoded',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ORDERING_KEY => array(
            'name' => 'ordering_key',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SEQUENCE_ID => array(
            'name' => 'sequence_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NULL_VALUE => array(
            'default' => false,
            'name' => 'null_value',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::NULL_PARTITION_KEY => array(
            'default' => false,
            'name' => 'null_partition_key',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::PROPERTIES] = array();
        $this->values[self::PARTITION_KEY] = null;
        $this->values[self::PAYLOAD_SIZE] = null;
        $this->values[self::COMPACTED_OUT] = self::$fields[self::COMPACTED_OUT]['default'];
        $this->values[self::EVENT_TIME] = self::$fields[self::EVENT_TIME]['default'];
        $this->values[self::PARTITION_KEY_B64_ENCODED] = self::$fields[self::PARTITION_KEY_B64_ENCODED]['default'];
        $this->values[self::ORDERING_KEY] = null;
        $this->values[self::SEQUENCE_ID] = null;
        $this->values[self::NULL_VALUE] = self::$fields[self::NULL_VALUE]['default'];
        $this->values[self::NULL_PARTITION_KEY] = self::$fields[self::NULL_PARTITION_KEY]['default'];
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
     * Appends value to 'properties' list
     *
     * @param \Pulsar\Proto\KeyValue $value Value to append
     *
     * @return null
     */
    public function appendProperties(\Pulsar\Proto\KeyValue $value)
    {
        return $this->append(self::PROPERTIES, $value);
    }

    /**
     * Clears 'properties' list
     *
     * @return null
     */
    public function clearProperties()
    {
        return $this->clear(self::PROPERTIES);
    }

    /**
     * Returns 'properties' list
     *
     * @return \Pulsar\Proto\KeyValue[]
     */
    public function getProperties()
    {
        return $this->get(self::PROPERTIES);
    }

    /**
     * Returns true if 'properties' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProperties()
    {
        return count($this->get(self::PROPERTIES)) !== 0;
    }

    /**
     * Returns 'properties' iterator
     *
     * @return \ArrayIterator
     */
    public function getPropertiesIterator()
    {
        return new \ArrayIterator($this->get(self::PROPERTIES));
    }

    /**
     * Returns element from 'properties' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Pulsar\Proto\KeyValue
     */
    public function getPropertiesAt($offset)
    {
        return $this->get(self::PROPERTIES, $offset);
    }

    /**
     * Returns count of 'properties' list
     *
     * @return int
     */
    public function getPropertiesCount()
    {
        return $this->count(self::PROPERTIES);
    }

    /**
     * Sets value of 'partition_key' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPartitionKey($value)
    {
        return $this->set(self::PARTITION_KEY, $value);
    }

    /**
     * Returns value of 'partition_key' property
     *
     * @return string
     */
    public function getPartitionKey()
    {
        $value = $this->get(self::PARTITION_KEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'partition_key' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPartitionKey()
    {
        return $this->get(self::PARTITION_KEY) !== null;
    }

    /**
     * Sets value of 'payload_size' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPayloadSize($value)
    {
        return $this->set(self::PAYLOAD_SIZE, $value);
    }

    /**
     * Returns value of 'payload_size' property
     *
     * @return integer
     */
    public function getPayloadSize()
    {
        $value = $this->get(self::PAYLOAD_SIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'payload_size' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPayloadSize()
    {
        return $this->get(self::PAYLOAD_SIZE) !== null;
    }

    /**
     * Sets value of 'compacted_out' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setCompactedOut($value)
    {
        return $this->set(self::COMPACTED_OUT, $value);
    }

    /**
     * Returns value of 'compacted_out' property
     *
     * @return boolean
     */
    public function getCompactedOut()
    {
        $value = $this->get(self::COMPACTED_OUT);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'compacted_out' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCompactedOut()
    {
        return $this->get(self::COMPACTED_OUT) !== null;
    }

    /**
     * Sets value of 'event_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEventTime($value)
    {
        return $this->set(self::EVENT_TIME, $value);
    }

    /**
     * Returns value of 'event_time' property
     *
     * @return integer
     */
    public function getEventTime()
    {
        $value = $this->get(self::EVENT_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'event_time' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEventTime()
    {
        return $this->get(self::EVENT_TIME) !== null;
    }

    /**
     * Sets value of 'partition_key_b64_encoded' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setPartitionKeyB64Encoded($value)
    {
        return $this->set(self::PARTITION_KEY_B64_ENCODED, $value);
    }

    /**
     * Returns value of 'partition_key_b64_encoded' property
     *
     * @return boolean
     */
    public function getPartitionKeyB64Encoded()
    {
        $value = $this->get(self::PARTITION_KEY_B64_ENCODED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'partition_key_b64_encoded' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPartitionKeyB64Encoded()
    {
        return $this->get(self::PARTITION_KEY_B64_ENCODED) !== null;
    }

    /**
     * Sets value of 'ordering_key' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrderingKey($value)
    {
        return $this->set(self::ORDERING_KEY, $value);
    }

    /**
     * Returns value of 'ordering_key' property
     *
     * @return string
     */
    public function getOrderingKey()
    {
        $value = $this->get(self::ORDERING_KEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'ordering_key' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOrderingKey()
    {
        return $this->get(self::ORDERING_KEY) !== null;
    }

    /**
     * Sets value of 'sequence_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSequenceId($value)
    {
        return $this->set(self::SEQUENCE_ID, $value);
    }

    /**
     * Returns value of 'sequence_id' property
     *
     * @return integer
     */
    public function getSequenceId()
    {
        $value = $this->get(self::SEQUENCE_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sequence_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSequenceId()
    {
        return $this->get(self::SEQUENCE_ID) !== null;
    }

    /**
     * Sets value of 'null_value' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setNullValue($value)
    {
        return $this->set(self::NULL_VALUE, $value);
    }

    /**
     * Returns value of 'null_value' property
     *
     * @return boolean
     */
    public function getNullValue()
    {
        $value = $this->get(self::NULL_VALUE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'null_value' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNullValue()
    {
        return $this->get(self::NULL_VALUE) !== null;
    }

    /**
     * Sets value of 'null_partition_key' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setNullPartitionKey($value)
    {
        return $this->set(self::NULL_PARTITION_KEY, $value);
    }

    /**
     * Returns value of 'null_partition_key' property
     *
     * @return boolean
     */
    public function getNullPartitionKey()
    {
        $value = $this->get(self::NULL_PARTITION_KEY);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'null_partition_key' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNullPartitionKey()
    {
        return $this->get(self::NULL_PARTITION_KEY) !== null;
    }
}
}