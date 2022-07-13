<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandConsumerStats message
 */
class CommandConsumerStats extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_ID = 1;
    const CONSUMER_ID = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST_ID => array(
            'name' => 'request_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONSUMER_ID => array(
            'name' => 'consumer_id',
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
        $this->values[self::REQUEST_ID] = null;
        $this->values[self::CONSUMER_ID] = null;
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
}
}