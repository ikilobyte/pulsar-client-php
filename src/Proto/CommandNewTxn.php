<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandNewTxn message
 */
class CommandNewTxn extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_ID = 1;
    const TXN_TTL_SECONDS = 2;
    const TC_ID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST_ID => array(
            'name' => 'request_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TXN_TTL_SECONDS => array(
            'default' => 0,
            'name' => 'txn_ttl_seconds',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TC_ID => array(
            'default' => 0,
            'name' => 'tc_id',
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
        $this->values[self::REQUEST_ID] = null;
        $this->values[self::TXN_TTL_SECONDS] = self::$fields[self::TXN_TTL_SECONDS]['default'];
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
     * Sets value of 'txn_ttl_seconds' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTxnTtlSeconds($value)
    {
        return $this->set(self::TXN_TTL_SECONDS, $value);
    }

    /**
     * Returns value of 'txn_ttl_seconds' property
     *
     * @return integer
     */
    public function getTxnTtlSeconds()
    {
        $value = $this->get(self::TXN_TTL_SECONDS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'txn_ttl_seconds' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTxnTtlSeconds()
    {
        return $this->get(self::TXN_TTL_SECONDS) !== null;
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