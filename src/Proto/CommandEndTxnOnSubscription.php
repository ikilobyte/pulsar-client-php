<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandEndTxnOnSubscription message
 */
class CommandEndTxnOnSubscription extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_ID = 1;
    const TXNID_LEAST_BITS = 2;
    const TXNID_MOST_BITS = 3;
    const SUBSCRIPTION = 4;
    const TXN_ACTION = 5;
    const TXNID_LEAST_BITS_OF_LOW_WATERMARK = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST_ID => array(
            'name' => 'request_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TXNID_LEAST_BITS => array(
            'default' => 0,
            'name' => 'txnid_least_bits',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TXNID_MOST_BITS => array(
            'default' => 0,
            'name' => 'txnid_most_bits',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SUBSCRIPTION => array(
            'name' => 'subscription',
            'required' => false,
            'type' => '\Pulsar\Proto\Subscription'
        ),
        self::TXN_ACTION => array(
            'name' => 'txn_action',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TXNID_LEAST_BITS_OF_LOW_WATERMARK => array(
            'name' => 'txnid_least_bits_of_low_watermark',
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
        $this->values[self::TXNID_LEAST_BITS] = self::$fields[self::TXNID_LEAST_BITS]['default'];
        $this->values[self::TXNID_MOST_BITS] = self::$fields[self::TXNID_MOST_BITS]['default'];
        $this->values[self::SUBSCRIPTION] = null;
        $this->values[self::TXN_ACTION] = null;
        $this->values[self::TXNID_LEAST_BITS_OF_LOW_WATERMARK] = null;
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
     * Sets value of 'txnid_least_bits' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTxnidLeastBits($value)
    {
        return $this->set(self::TXNID_LEAST_BITS, $value);
    }

    /**
     * Returns value of 'txnid_least_bits' property
     *
     * @return integer
     */
    public function getTxnidLeastBits()
    {
        $value = $this->get(self::TXNID_LEAST_BITS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'txnid_least_bits' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTxnidLeastBits()
    {
        return $this->get(self::TXNID_LEAST_BITS) !== null;
    }

    /**
     * Sets value of 'txnid_most_bits' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTxnidMostBits($value)
    {
        return $this->set(self::TXNID_MOST_BITS, $value);
    }

    /**
     * Returns value of 'txnid_most_bits' property
     *
     * @return integer
     */
    public function getTxnidMostBits()
    {
        $value = $this->get(self::TXNID_MOST_BITS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'txnid_most_bits' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTxnidMostBits()
    {
        return $this->get(self::TXNID_MOST_BITS) !== null;
    }

    /**
     * Sets value of 'subscription' property
     *
     * @param \Pulsar\Proto\Subscription $value Property value
     *
     * @return null
     */
    public function setSubscription(\Pulsar\Proto\Subscription $value=null)
    {
        return $this->set(self::SUBSCRIPTION, $value);
    }

    /**
     * Returns value of 'subscription' property
     *
     * @return \Pulsar\Proto\Subscription
     */
    public function getSubscription()
    {
        return $this->get(self::SUBSCRIPTION);
    }

    /**
     * Returns true if 'subscription' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSubscription()
    {
        return $this->get(self::SUBSCRIPTION) !== null;
    }

    /**
     * Sets value of 'txn_action' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTxnAction($value)
    {
        return $this->set(self::TXN_ACTION, $value);
    }

    /**
     * Returns value of 'txn_action' property
     *
     * @return integer
     */
    public function getTxnAction()
    {
        $value = $this->get(self::TXN_ACTION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'txn_action' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTxnAction()
    {
        return $this->get(self::TXN_ACTION) !== null;
    }

    /**
     * Sets value of 'txnid_least_bits_of_low_watermark' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTxnidLeastBitsOfLowWatermark($value)
    {
        return $this->set(self::TXNID_LEAST_BITS_OF_LOW_WATERMARK, $value);
    }

    /**
     * Returns value of 'txnid_least_bits_of_low_watermark' property
     *
     * @return integer
     */
    public function getTxnidLeastBitsOfLowWatermark()
    {
        $value = $this->get(self::TXNID_LEAST_BITS_OF_LOW_WATERMARK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'txnid_least_bits_of_low_watermark' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTxnidLeastBitsOfLowWatermark()
    {
        return $this->get(self::TXNID_LEAST_BITS_OF_LOW_WATERMARK) !== null;
    }
}
}