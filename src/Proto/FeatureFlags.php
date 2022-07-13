<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * FeatureFlags message
 */
class FeatureFlags extends \ProtobufMessage
{
    /* Field index constants */
    const SUPPORTS_AUTH_REFRESH = 1;
    const SUPPORTS_BROKER_ENTRY_METADATA = 2;
    const SUPPORTS_PARTIAL_PRODUCER = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SUPPORTS_AUTH_REFRESH => array(
            'default' => false,
            'name' => 'supports_auth_refresh',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::SUPPORTS_BROKER_ENTRY_METADATA => array(
            'default' => false,
            'name' => 'supports_broker_entry_metadata',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::SUPPORTS_PARTIAL_PRODUCER => array(
            'default' => false,
            'name' => 'supports_partial_producer',
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
        $this->values[self::SUPPORTS_AUTH_REFRESH] = self::$fields[self::SUPPORTS_AUTH_REFRESH]['default'];
        $this->values[self::SUPPORTS_BROKER_ENTRY_METADATA] = self::$fields[self::SUPPORTS_BROKER_ENTRY_METADATA]['default'];
        $this->values[self::SUPPORTS_PARTIAL_PRODUCER] = self::$fields[self::SUPPORTS_PARTIAL_PRODUCER]['default'];
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
     * Sets value of 'supports_auth_refresh' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setSupportsAuthRefresh($value)
    {
        return $this->set(self::SUPPORTS_AUTH_REFRESH, $value);
    }

    /**
     * Returns value of 'supports_auth_refresh' property
     *
     * @return boolean
     */
    public function getSupportsAuthRefresh()
    {
        $value = $this->get(self::SUPPORTS_AUTH_REFRESH);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'supports_auth_refresh' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSupportsAuthRefresh()
    {
        return $this->get(self::SUPPORTS_AUTH_REFRESH) !== null;
    }

    /**
     * Sets value of 'supports_broker_entry_metadata' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setSupportsBrokerEntryMetadata($value)
    {
        return $this->set(self::SUPPORTS_BROKER_ENTRY_METADATA, $value);
    }

    /**
     * Returns value of 'supports_broker_entry_metadata' property
     *
     * @return boolean
     */
    public function getSupportsBrokerEntryMetadata()
    {
        $value = $this->get(self::SUPPORTS_BROKER_ENTRY_METADATA);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'supports_broker_entry_metadata' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSupportsBrokerEntryMetadata()
    {
        return $this->get(self::SUPPORTS_BROKER_ENTRY_METADATA) !== null;
    }

    /**
     * Sets value of 'supports_partial_producer' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setSupportsPartialProducer($value)
    {
        return $this->set(self::SUPPORTS_PARTIAL_PRODUCER, $value);
    }

    /**
     * Returns value of 'supports_partial_producer' property
     *
     * @return boolean
     */
    public function getSupportsPartialProducer()
    {
        $value = $this->get(self::SUPPORTS_PARTIAL_PRODUCER);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'supports_partial_producer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSupportsPartialProducer()
    {
        return $this->get(self::SUPPORTS_PARTIAL_PRODUCER) !== null;
    }
}
}