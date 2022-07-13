<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandProducerSuccess message
 */
class CommandProducerSuccess extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_ID = 1;
    const PRODUCER_NAME = 2;
    const LAST_SEQUENCE_ID = 3;
    const SCHEMA_VERSION = 4;
    const TOPIC_EPOCH = 5;
    const PRODUCER_READY = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST_ID => array(
            'name' => 'request_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRODUCER_NAME => array(
            'name' => 'producer_name',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LAST_SEQUENCE_ID => array(
            'default' => -1,
            'name' => 'last_sequence_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SCHEMA_VERSION => array(
            'name' => 'schema_version',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOPIC_EPOCH => array(
            'name' => 'topic_epoch',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRODUCER_READY => array(
            'default' => true,
            'name' => 'producer_ready',
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
        $this->values[self::REQUEST_ID] = null;
        $this->values[self::PRODUCER_NAME] = null;
        $this->values[self::LAST_SEQUENCE_ID] = self::$fields[self::LAST_SEQUENCE_ID]['default'];
        $this->values[self::SCHEMA_VERSION] = null;
        $this->values[self::TOPIC_EPOCH] = null;
        $this->values[self::PRODUCER_READY] = self::$fields[self::PRODUCER_READY]['default'];
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
     * Sets value of 'last_sequence_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastSequenceId($value)
    {
        return $this->set(self::LAST_SEQUENCE_ID, $value);
    }

    /**
     * Returns value of 'last_sequence_id' property
     *
     * @return integer
     */
    public function getLastSequenceId()
    {
        $value = $this->get(self::LAST_SEQUENCE_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'last_sequence_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLastSequenceId()
    {
        return $this->get(self::LAST_SEQUENCE_ID) !== null;
    }

    /**
     * Sets value of 'schema_version' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSchemaVersion($value)
    {
        return $this->set(self::SCHEMA_VERSION, $value);
    }

    /**
     * Returns value of 'schema_version' property
     *
     * @return string
     */
    public function getSchemaVersion()
    {
        $value = $this->get(self::SCHEMA_VERSION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'schema_version' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSchemaVersion()
    {
        return $this->get(self::SCHEMA_VERSION) !== null;
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
     * Sets value of 'producer_ready' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setProducerReady($value)
    {
        return $this->set(self::PRODUCER_READY, $value);
    }

    /**
     * Returns value of 'producer_ready' property
     *
     * @return boolean
     */
    public function getProducerReady()
    {
        $value = $this->get(self::PRODUCER_READY);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'producer_ready' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProducerReady()
    {
        return $this->get(self::PRODUCER_READY) !== null;
    }
}
}