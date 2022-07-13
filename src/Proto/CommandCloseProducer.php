<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandCloseProducer message
 */
class CommandCloseProducer extends \ProtobufMessage
{
    /* Field index constants */
    const PRODUCER_ID = 1;
    const REQUEST_ID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
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
        $this->values[self::PRODUCER_ID] = null;
        $this->values[self::REQUEST_ID] = null;
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
}
}