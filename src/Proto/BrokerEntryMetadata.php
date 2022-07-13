<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * BrokerEntryMetadata message
 */
class BrokerEntryMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const BROKER_TIMESTAMP = 1;
    const INDEX = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BROKER_TIMESTAMP => array(
            'name' => 'broker_timestamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::INDEX => array(
            'name' => 'index',
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
        $this->values[self::BROKER_TIMESTAMP] = null;
        $this->values[self::INDEX] = null;
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
     * Sets value of 'broker_timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBrokerTimestamp($value)
    {
        return $this->set(self::BROKER_TIMESTAMP, $value);
    }

    /**
     * Returns value of 'broker_timestamp' property
     *
     * @return integer
     */
    public function getBrokerTimestamp()
    {
        $value = $this->get(self::BROKER_TIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'broker_timestamp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBrokerTimestamp()
    {
        return $this->get(self::BROKER_TIMESTAMP) !== null;
    }

    /**
     * Sets value of 'index' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIndex($value)
    {
        return $this->set(self::INDEX, $value);
    }

    /**
     * Returns value of 'index' property
     *
     * @return integer
     */
    public function getIndex()
    {
        $value = $this->get(self::INDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'index' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIndex()
    {
        return $this->get(self::INDEX) !== null;
    }
}
}