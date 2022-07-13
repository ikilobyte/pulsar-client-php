<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandActiveConsumerChange message
 */
class CommandActiveConsumerChange extends \ProtobufMessage
{
    /* Field index constants */
    const CONSUMER_ID = 1;
    const IS_ACTIVE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONSUMER_ID => array(
            'name' => 'consumer_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IS_ACTIVE => array(
            'default' => false,
            'name' => 'is_active',
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
        $this->values[self::CONSUMER_ID] = null;
        $this->values[self::IS_ACTIVE] = self::$fields[self::IS_ACTIVE]['default'];
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
     * Sets value of 'is_active' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsActive($value)
    {
        return $this->set(self::IS_ACTIVE, $value);
    }

    /**
     * Returns value of 'is_active' property
     *
     * @return boolean
     */
    public function getIsActive()
    {
        $value = $this->get(self::IS_ACTIVE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'is_active' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIsActive()
    {
        return $this->get(self::IS_ACTIVE) !== null;
    }
}
}