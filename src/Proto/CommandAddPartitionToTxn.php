<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandAddPartitionToTxn message
 */
class CommandAddPartitionToTxn extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_ID = 1;
    const TXNID_LEAST_BITS = 2;
    const TXNID_MOST_BITS = 3;
    const PARTITIONS = 4;

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
        self::PARTITIONS => array(
            'name' => 'partitions',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::PARTITIONS] = array();
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
     * Appends value to 'partitions' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendPartitions($value)
    {
        return $this->append(self::PARTITIONS, $value);
    }

    /**
     * Clears 'partitions' list
     *
     * @return null
     */
    public function clearPartitions()
    {
        return $this->clear(self::PARTITIONS);
    }

    /**
     * Returns 'partitions' list
     *
     * @return string[]
     */
    public function getPartitions()
    {
        return $this->get(self::PARTITIONS);
    }

    /**
     * Returns true if 'partitions' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPartitions()
    {
        return count($this->get(self::PARTITIONS)) !== 0;
    }

    /**
     * Returns 'partitions' iterator
     *
     * @return \ArrayIterator
     */
    public function getPartitionsIterator()
    {
        return new \ArrayIterator($this->get(self::PARTITIONS));
    }

    /**
     * Returns element from 'partitions' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getPartitionsAt($offset)
    {
        return $this->get(self::PARTITIONS, $offset);
    }

    /**
     * Returns count of 'partitions' list
     *
     * @return int
     */
    public function getPartitionsCount()
    {
        return $this->count(self::PARTITIONS);
    }
}
}