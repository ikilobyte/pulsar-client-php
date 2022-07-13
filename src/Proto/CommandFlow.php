<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandFlow message
 */
class CommandFlow extends \ProtobufMessage
{
    /* Field index constants */
    const CONSUMER_ID = 1;
    const MESSAGEPERMITS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONSUMER_ID => array(
            'name' => 'consumer_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MESSAGEPERMITS => array(
            'name' => 'messagePermits',
            'required' => true,
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
        $this->values[self::MESSAGEPERMITS] = null;
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
     * Sets value of 'messagePermits' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMessagePermits($value)
    {
        return $this->set(self::MESSAGEPERMITS, $value);
    }

    /**
     * Returns value of 'messagePermits' property
     *
     * @return integer
     */
    public function getMessagePermits()
    {
        $value = $this->get(self::MESSAGEPERMITS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'messagePermits' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMessagePermits()
    {
        return $this->get(self::MESSAGEPERMITS) !== null;
    }
}
}