<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandSubscribe message
 */
class CommandSubscribe extends \ProtobufMessage
{
    /* Field index constants */
    const TOPIC = 1;
    const SUBSCRIPTION = 2;
    const SUBTYPE = 3;
    const CONSUMER_ID = 4;
    const REQUEST_ID = 5;
    const CONSUMER_NAME = 6;
    const PRIORITY_LEVEL = 7;
    const DURABLE = 8;
    const START_MESSAGE_ID = 9;
    const METADATA = 10;
    const READ_COMPACTED = 11;
    const SCHEMA = 12;
    const INITIALPOSITION = 13;
    const REPLICATE_SUBSCRIPTION_STATE = 14;
    const FORCE_TOPIC_CREATION = 15;
    const START_MESSAGE_ROLLBACK_DURATION_SEC = 16;
    const KEYSHAREDMETA = 17;
    const SUBSCRIPTION_PROPERTIES = 18;
    const CONSUMER_EPOCH = 19;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TOPIC => array(
            'name' => 'topic',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SUBSCRIPTION => array(
            'name' => 'subscription',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SUBTYPE => array(
            'name' => 'subType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONSUMER_ID => array(
            'name' => 'consumer_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REQUEST_ID => array(
            'name' => 'request_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONSUMER_NAME => array(
            'name' => 'consumer_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PRIORITY_LEVEL => array(
            'name' => 'priority_level',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DURABLE => array(
            'default' => true,
            'name' => 'durable',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::START_MESSAGE_ID => array(
            'name' => 'start_message_id',
            'required' => false,
            'type' => '\Pulsar\Proto\MessageIdData'
        ),
        self::METADATA => array(
            'name' => 'metadata',
            'repeated' => true,
            'type' => '\Pulsar\Proto\KeyValue'
        ),
        self::READ_COMPACTED => array(
            'name' => 'read_compacted',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::SCHEMA => array(
            'name' => 'schema',
            'required' => false,
            'type' => '\Pulsar\Proto\Schema'
        ),
        self::INITIALPOSITION => array(
            'default' => \Pulsar\Proto\CommandSubscribe_InitialPosition::Latest,
            'name' => 'initialPosition',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REPLICATE_SUBSCRIPTION_STATE => array(
            'name' => 'replicate_subscription_state',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::FORCE_TOPIC_CREATION => array(
            'default' => true,
            'name' => 'force_topic_creation',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::START_MESSAGE_ROLLBACK_DURATION_SEC => array(
            'default' => 0,
            'name' => 'start_message_rollback_duration_sec',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::KEYSHAREDMETA => array(
            'name' => 'keySharedMeta',
            'required' => false,
            'type' => '\Pulsar\Proto\KeySharedMeta'
        ),
        self::SUBSCRIPTION_PROPERTIES => array(
            'name' => 'subscription_properties',
            'repeated' => true,
            'type' => '\Pulsar\Proto\KeyValue'
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
        $this->values[self::TOPIC] = null;
        $this->values[self::SUBSCRIPTION] = null;
        $this->values[self::SUBTYPE] = null;
        $this->values[self::CONSUMER_ID] = null;
        $this->values[self::REQUEST_ID] = null;
        $this->values[self::CONSUMER_NAME] = null;
        $this->values[self::PRIORITY_LEVEL] = null;
        $this->values[self::DURABLE] = self::$fields[self::DURABLE]['default'];
        $this->values[self::START_MESSAGE_ID] = null;
        $this->values[self::METADATA] = array();
        $this->values[self::READ_COMPACTED] = null;
        $this->values[self::SCHEMA] = null;
        $this->values[self::INITIALPOSITION] = self::$fields[self::INITIALPOSITION]['default'];
        $this->values[self::REPLICATE_SUBSCRIPTION_STATE] = null;
        $this->values[self::FORCE_TOPIC_CREATION] = self::$fields[self::FORCE_TOPIC_CREATION]['default'];
        $this->values[self::START_MESSAGE_ROLLBACK_DURATION_SEC] = self::$fields[self::START_MESSAGE_ROLLBACK_DURATION_SEC]['default'];
        $this->values[self::KEYSHAREDMETA] = null;
        $this->values[self::SUBSCRIPTION_PROPERTIES] = array();
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
     * Sets value of 'topic' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTopic($value)
    {
        return $this->set(self::TOPIC, $value);
    }

    /**
     * Returns value of 'topic' property
     *
     * @return string
     */
    public function getTopic()
    {
        $value = $this->get(self::TOPIC);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'topic' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTopic()
    {
        return $this->get(self::TOPIC) !== null;
    }

    /**
     * Sets value of 'subscription' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSubscription($value)
    {
        return $this->set(self::SUBSCRIPTION, $value);
    }

    /**
     * Returns value of 'subscription' property
     *
     * @return string
     */
    public function getSubscription()
    {
        $value = $this->get(self::SUBSCRIPTION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'subscription' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSubscription()
    {
        return $this->get(self::SUBSCRIPTION) !== null;
    }

    /**
     * Sets value of 'subType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSubType($value)
    {
        return $this->set(self::SUBTYPE, $value);
    }

    /**
     * Returns value of 'subType' property
     *
     * @return integer
     */
    public function getSubType()
    {
        $value = $this->get(self::SUBTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'subType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSubType()
    {
        return $this->get(self::SUBTYPE) !== null;
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
     * Sets value of 'request_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRequestId($value)
    {
        return $this->set(self::REQUEST_ID, $value);
    }

    /**
     * Returns value of 'request_id' property
     *
     * @return integer
     */
    public function getRequestId()
    {
        $value = $this->get(self::REQUEST_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'request_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRequestId()
    {
        return $this->get(self::REQUEST_ID) !== null;
    }

    /**
     * Sets value of 'consumer_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setConsumerName($value)
    {
        return $this->set(self::CONSUMER_NAME, $value);
    }

    /**
     * Returns value of 'consumer_name' property
     *
     * @return string
     */
    public function getConsumerName()
    {
        $value = $this->get(self::CONSUMER_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'consumer_name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConsumerName()
    {
        return $this->get(self::CONSUMER_NAME) !== null;
    }

    /**
     * Sets value of 'priority_level' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPriorityLevel($value)
    {
        return $this->set(self::PRIORITY_LEVEL, $value);
    }

    /**
     * Returns value of 'priority_level' property
     *
     * @return integer
     */
    public function getPriorityLevel()
    {
        $value = $this->get(self::PRIORITY_LEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'priority_level' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPriorityLevel()
    {
        return $this->get(self::PRIORITY_LEVEL) !== null;
    }

    /**
     * Sets value of 'durable' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setDurable($value)
    {
        return $this->set(self::DURABLE, $value);
    }

    /**
     * Returns value of 'durable' property
     *
     * @return boolean
     */
    public function getDurable()
    {
        $value = $this->get(self::DURABLE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'durable' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDurable()
    {
        return $this->get(self::DURABLE) !== null;
    }

    /**
     * Sets value of 'start_message_id' property
     *
     * @param \Pulsar\Proto\MessageIdData $value Property value
     *
     * @return null
     */
    public function setStartMessageId(\Pulsar\Proto\MessageIdData $value=null)
    {
        return $this->set(self::START_MESSAGE_ID, $value);
    }

    /**
     * Returns value of 'start_message_id' property
     *
     * @return \Pulsar\Proto\MessageIdData
     */
    public function getStartMessageId()
    {
        return $this->get(self::START_MESSAGE_ID);
    }

    /**
     * Returns true if 'start_message_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStartMessageId()
    {
        return $this->get(self::START_MESSAGE_ID) !== null;
    }

    /**
     * Appends value to 'metadata' list
     *
     * @param \Pulsar\Proto\KeyValue $value Value to append
     *
     * @return null
     */
    public function appendMetadata(\Pulsar\Proto\KeyValue $value)
    {
        return $this->append(self::METADATA, $value);
    }

    /**
     * Clears 'metadata' list
     *
     * @return null
     */
    public function clearMetadata()
    {
        return $this->clear(self::METADATA);
    }

    /**
     * Returns 'metadata' list
     *
     * @return \Pulsar\Proto\KeyValue[]
     */
    public function getMetadata()
    {
        return $this->get(self::METADATA);
    }

    /**
     * Returns true if 'metadata' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMetadata()
    {
        return count($this->get(self::METADATA)) !== 0;
    }

    /**
     * Returns 'metadata' iterator
     *
     * @return \ArrayIterator
     */
    public function getMetadataIterator()
    {
        return new \ArrayIterator($this->get(self::METADATA));
    }

    /**
     * Returns element from 'metadata' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Pulsar\Proto\KeyValue
     */
    public function getMetadataAt($offset)
    {
        return $this->get(self::METADATA, $offset);
    }

    /**
     * Returns count of 'metadata' list
     *
     * @return int
     */
    public function getMetadataCount()
    {
        return $this->count(self::METADATA);
    }

    /**
     * Sets value of 'read_compacted' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setReadCompacted($value)
    {
        return $this->set(self::READ_COMPACTED, $value);
    }

    /**
     * Returns value of 'read_compacted' property
     *
     * @return boolean
     */
    public function getReadCompacted()
    {
        $value = $this->get(self::READ_COMPACTED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'read_compacted' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReadCompacted()
    {
        return $this->get(self::READ_COMPACTED) !== null;
    }

    /**
     * Sets value of 'schema' property
     *
     * @param \Pulsar\Proto\Schema $value Property value
     *
     * @return null
     */
    public function setSchema(\Pulsar\Proto\Schema $value=null)
    {
        return $this->set(self::SCHEMA, $value);
    }

    /**
     * Returns value of 'schema' property
     *
     * @return \Pulsar\Proto\Schema
     */
    public function getSchema()
    {
        return $this->get(self::SCHEMA);
    }

    /**
     * Returns true if 'schema' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSchema()
    {
        return $this->get(self::SCHEMA) !== null;
    }

    /**
     * Sets value of 'initialPosition' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setInitialPosition($value)
    {
        return $this->set(self::INITIALPOSITION, $value);
    }

    /**
     * Returns value of 'initialPosition' property
     *
     * @return integer
     */
    public function getInitialPosition()
    {
        $value = $this->get(self::INITIALPOSITION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'initialPosition' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasInitialPosition()
    {
        return $this->get(self::INITIALPOSITION) !== null;
    }

    /**
     * Sets value of 'replicate_subscription_state' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setReplicateSubscriptionState($value)
    {
        return $this->set(self::REPLICATE_SUBSCRIPTION_STATE, $value);
    }

    /**
     * Returns value of 'replicate_subscription_state' property
     *
     * @return boolean
     */
    public function getReplicateSubscriptionState()
    {
        $value = $this->get(self::REPLICATE_SUBSCRIPTION_STATE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'replicate_subscription_state' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReplicateSubscriptionState()
    {
        return $this->get(self::REPLICATE_SUBSCRIPTION_STATE) !== null;
    }

    /**
     * Sets value of 'force_topic_creation' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setForceTopicCreation($value)
    {
        return $this->set(self::FORCE_TOPIC_CREATION, $value);
    }

    /**
     * Returns value of 'force_topic_creation' property
     *
     * @return boolean
     */
    public function getForceTopicCreation()
    {
        $value = $this->get(self::FORCE_TOPIC_CREATION);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'force_topic_creation' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasForceTopicCreation()
    {
        return $this->get(self::FORCE_TOPIC_CREATION) !== null;
    }

    /**
     * Sets value of 'start_message_rollback_duration_sec' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStartMessageRollbackDurationSec($value)
    {
        return $this->set(self::START_MESSAGE_ROLLBACK_DURATION_SEC, $value);
    }

    /**
     * Returns value of 'start_message_rollback_duration_sec' property
     *
     * @return integer
     */
    public function getStartMessageRollbackDurationSec()
    {
        $value = $this->get(self::START_MESSAGE_ROLLBACK_DURATION_SEC);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'start_message_rollback_duration_sec' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStartMessageRollbackDurationSec()
    {
        return $this->get(self::START_MESSAGE_ROLLBACK_DURATION_SEC) !== null;
    }

    /**
     * Sets value of 'keySharedMeta' property
     *
     * @param \Pulsar\Proto\KeySharedMeta $value Property value
     *
     * @return null
     */
    public function setKeySharedMeta(\Pulsar\Proto\KeySharedMeta $value=null)
    {
        return $this->set(self::KEYSHAREDMETA, $value);
    }

    /**
     * Returns value of 'keySharedMeta' property
     *
     * @return \Pulsar\Proto\KeySharedMeta
     */
    public function getKeySharedMeta()
    {
        return $this->get(self::KEYSHAREDMETA);
    }

    /**
     * Returns true if 'keySharedMeta' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKeySharedMeta()
    {
        return $this->get(self::KEYSHAREDMETA) !== null;
    }

    /**
     * Appends value to 'subscription_properties' list
     *
     * @param \Pulsar\Proto\KeyValue $value Value to append
     *
     * @return null
     */
    public function appendSubscriptionProperties(\Pulsar\Proto\KeyValue $value)
    {
        return $this->append(self::SUBSCRIPTION_PROPERTIES, $value);
    }

    /**
     * Clears 'subscription_properties' list
     *
     * @return null
     */
    public function clearSubscriptionProperties()
    {
        return $this->clear(self::SUBSCRIPTION_PROPERTIES);
    }

    /**
     * Returns 'subscription_properties' list
     *
     * @return \Pulsar\Proto\KeyValue[]
     */
    public function getSubscriptionProperties()
    {
        return $this->get(self::SUBSCRIPTION_PROPERTIES);
    }

    /**
     * Returns true if 'subscription_properties' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSubscriptionProperties()
    {
        return count($this->get(self::SUBSCRIPTION_PROPERTIES)) !== 0;
    }

    /**
     * Returns 'subscription_properties' iterator
     *
     * @return \ArrayIterator
     */
    public function getSubscriptionPropertiesIterator()
    {
        return new \ArrayIterator($this->get(self::SUBSCRIPTION_PROPERTIES));
    }

    /**
     * Returns element from 'subscription_properties' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Pulsar\Proto\KeyValue
     */
    public function getSubscriptionPropertiesAt($offset)
    {
        return $this->get(self::SUBSCRIPTION_PROPERTIES, $offset);
    }

    /**
     * Returns count of 'subscription_properties' list
     *
     * @return int
     */
    public function getSubscriptionPropertiesCount()
    {
        return $this->count(self::SUBSCRIPTION_PROPERTIES);
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