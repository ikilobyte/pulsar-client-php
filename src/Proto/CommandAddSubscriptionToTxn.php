<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandAddSubscriptionToTxn message
 */
class CommandAddSubscriptionToTxn extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_ID = 1;
    const TXNID_LEAST_BITS = 2;
    const TXNID_MOST_BITS = 3;
    const SUBSCRIPTION = 4;

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
            'repeated' => true,
            'type' => '\Pulsar\Proto\Subscription'
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
        $this->values[self::SUBSCRIPTION] = array();
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
     * Appends value to 'subscription' list
     *
     * @param \Pulsar\Proto\Subscription $value Value to append
     *
     * @return null
     */
    public function appendSubscription(\Pulsar\Proto\Subscription $value)
    {
        return $this->append(self::SUBSCRIPTION, $value);
    }

    /**
     * Clears 'subscription' list
     *
     * @return null
     */
    public function clearSubscription()
    {
        return $this->clear(self::SUBSCRIPTION);
    }

    /**
     * Returns 'subscription' list
     *
     * @return \Pulsar\Proto\Subscription[]
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
        return count($this->get(self::SUBSCRIPTION)) !== 0;
    }

    /**
     * Returns 'subscription' iterator
     *
     * @return \ArrayIterator
     */
    public function getSubscriptionIterator()
    {
        return new \ArrayIterator($this->get(self::SUBSCRIPTION));
    }

    /**
     * Returns element from 'subscription' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Pulsar\Proto\Subscription
     */
    public function getSubscriptionAt($offset)
    {
        return $this->get(self::SUBSCRIPTION, $offset);
    }

    /**
     * Returns count of 'subscription' list
     *
     * @return int
     */
    public function getSubscriptionCount()
    {
        return $this->count(self::SUBSCRIPTION);
    }
}
}