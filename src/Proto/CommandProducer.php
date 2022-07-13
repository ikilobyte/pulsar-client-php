<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandProducer message
 */
class CommandProducer extends \ProtobufMessage
{
    /* Field index constants */
    const TOPIC = 1;
    const PRODUCER_ID = 2;
    const REQUEST_ID = 3;
    const PRODUCER_NAME = 4;
    const ENCRYPTED = 5;
    const METADATA = 6;
    const SCHEMA = 7;
    const EPOCH = 8;
    const USER_PROVIDED_PRODUCER_NAME = 9;
    const PRODUCER_ACCESS_MODE = 10;
    const TOPIC_EPOCH = 11;
    const TXN_ENABLED = 12;
    const INITIAL_SUBSCRIPTION_NAME = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TOPIC => array(
            'name' => 'topic',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PRODUCER_ID => array(
            'name' => 'producer_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REQUEST_ID => array(
            'name' => 'request_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRODUCER_NAME => array(
            'name' => 'producer_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ENCRYPTED => array(
            'default' => false,
            'name' => 'encrypted',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::METADATA => array(
            'name' => 'metadata',
            'repeated' => true,
            'type' => '\Pulsar\Proto\KeyValue'
        ),
        self::SCHEMA => array(
            'name' => 'schema',
            'required' => false,
            'type' => '\Pulsar\Proto\Schema'
        ),
        self::EPOCH => array(
            'default' => 0,
            'name' => 'epoch',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::USER_PROVIDED_PRODUCER_NAME => array(
            'default' => true,
            'name' => 'user_provided_producer_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::PRODUCER_ACCESS_MODE => array(
            'default' => \Pulsar\Proto\ProducerAccessMode::Shared,
            'name' => 'producer_access_mode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOPIC_EPOCH => array(
            'name' => 'topic_epoch',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TXN_ENABLED => array(
            'default' => false,
            'name' => 'txn_enabled',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::INITIAL_SUBSCRIPTION_NAME => array(
            'name' => 'initial_subscription_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::PRODUCER_ID] = null;
        $this->values[self::REQUEST_ID] = null;
        $this->values[self::PRODUCER_NAME] = null;
        $this->values[self::ENCRYPTED] = self::$fields[self::ENCRYPTED]['default'];
        $this->values[self::METADATA] = array();
        $this->values[self::SCHEMA] = null;
        $this->values[self::EPOCH] = self::$fields[self::EPOCH]['default'];
        $this->values[self::USER_PROVIDED_PRODUCER_NAME] = self::$fields[self::USER_PROVIDED_PRODUCER_NAME]['default'];
        $this->values[self::PRODUCER_ACCESS_MODE] = self::$fields[self::PRODUCER_ACCESS_MODE]['default'];
        $this->values[self::TOPIC_EPOCH] = null;
        $this->values[self::TXN_ENABLED] = self::$fields[self::TXN_ENABLED]['default'];
        $this->values[self::INITIAL_SUBSCRIPTION_NAME] = null;
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
     * Sets value of 'producer_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setProducerId($value)
    {
        return $this->set(self::PRODUCER_ID, $value);
    }

    /**
     * Returns value of 'producer_id' property
     *
     * @return integer
     */
    public function getProducerId()
    {
        $value = $this->get(self::PRODUCER_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'producer_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProducerId()
    {
        return $this->get(self::PRODUCER_ID) !== null;
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
     * Sets value of 'producer_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setProducerName($value)
    {
        return $this->set(self::PRODUCER_NAME, $value);
    }

    /**
     * Returns value of 'producer_name' property
     *
     * @return string
     */
    public function getProducerName()
    {
        $value = $this->get(self::PRODUCER_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'producer_name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProducerName()
    {
        return $this->get(self::PRODUCER_NAME) !== null;
    }

    /**
     * Sets value of 'encrypted' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setEncrypted($value)
    {
        return $this->set(self::ENCRYPTED, $value);
    }

    /**
     * Returns value of 'encrypted' property
     *
     * @return boolean
     */
    public function getEncrypted()
    {
        $value = $this->get(self::ENCRYPTED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'encrypted' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEncrypted()
    {
        return $this->get(self::ENCRYPTED) !== null;
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
     * Sets value of 'epoch' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEpoch($value)
    {
        return $this->set(self::EPOCH, $value);
    }

    /**
     * Returns value of 'epoch' property
     *
     * @return integer
     */
    public function getEpoch()
    {
        $value = $this->get(self::EPOCH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'epoch' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEpoch()
    {
        return $this->get(self::EPOCH) !== null;
    }

    /**
     * Sets value of 'user_provided_producer_name' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setUserProvidedProducerName($value)
    {
        return $this->set(self::USER_PROVIDED_PRODUCER_NAME, $value);
    }

    /**
     * Returns value of 'user_provided_producer_name' property
     *
     * @return boolean
     */
    public function getUserProvidedProducerName()
    {
        $value = $this->get(self::USER_PROVIDED_PRODUCER_NAME);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'user_provided_producer_name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUserProvidedProducerName()
    {
        return $this->get(self::USER_PROVIDED_PRODUCER_NAME) !== null;
    }

    /**
     * Sets value of 'producer_access_mode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setProducerAccessMode($value)
    {
        return $this->set(self::PRODUCER_ACCESS_MODE, $value);
    }

    /**
     * Returns value of 'producer_access_mode' property
     *
     * @return integer
     */
    public function getProducerAccessMode()
    {
        $value = $this->get(self::PRODUCER_ACCESS_MODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'producer_access_mode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProducerAccessMode()
    {
        return $this->get(self::PRODUCER_ACCESS_MODE) !== null;
    }

    /**
     * Sets value of 'topic_epoch' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTopicEpoch($value)
    {
        return $this->set(self::TOPIC_EPOCH, $value);
    }

    /**
     * Returns value of 'topic_epoch' property
     *
     * @return integer
     */
    public function getTopicEpoch()
    {
        $value = $this->get(self::TOPIC_EPOCH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'topic_epoch' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTopicEpoch()
    {
        return $this->get(self::TOPIC_EPOCH) !== null;
    }

    /**
     * Sets value of 'txn_enabled' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setTxnEnabled($value)
    {
        return $this->set(self::TXN_ENABLED, $value);
    }

    /**
     * Returns value of 'txn_enabled' property
     *
     * @return boolean
     */
    public function getTxnEnabled()
    {
        $value = $this->get(self::TXN_ENABLED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'txn_enabled' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTxnEnabled()
    {
        return $this->get(self::TXN_ENABLED) !== null;
    }

    /**
     * Sets value of 'initial_subscription_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInitialSubscriptionName($value)
    {
        return $this->set(self::INITIAL_SUBSCRIPTION_NAME, $value);
    }

    /**
     * Returns value of 'initial_subscription_name' property
     *
     * @return string
     */
    public function getInitialSubscriptionName()
    {
        $value = $this->get(self::INITIAL_SUBSCRIPTION_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'initial_subscription_name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasInitialSubscriptionName()
    {
        return $this->get(self::INITIAL_SUBSCRIPTION_NAME) !== null;
    }
}
}