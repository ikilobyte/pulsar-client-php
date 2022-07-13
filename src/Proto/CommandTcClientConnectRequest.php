<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandTcClientConnectRequest message
 */
class CommandTcClientConnectRequest extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_ID = 1;
    const TC_ID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST_ID => array(
            'name' => 'request_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TC_ID => array(
            'default' => 0,
            'name' => 'tc_id',
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
        $this->values[self::TC_ID] = self::$fields[self::TC_ID]['default'];
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
     * Sets value of 'tc_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTcId($value)
    {
        return $this->set(self::TC_ID, $value);
    }

    /**
     * Returns value of 'tc_id' property
     *
     * @return integer
     */
    public function getTcId()
    {
        $value = $this->get(self::TC_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'tc_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTcId()
    {
        return $this->get(self::TC_ID) !== null;
    }
}
}