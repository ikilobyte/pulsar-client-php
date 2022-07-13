<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandAck message
 */
class CommandAck extends \ProtobufMessage
{
    /* Field index constants */
    const CONSUMER_ID = 1;
    const ACK_TYPE = 2;
    const MESSAGE_ID = 3;
    const VALIDATION_ERROR = 4;
    const PROPERTIES = 5;
    const TXNID_LEAST_BITS = 6;
    const TXNID_MOST_BITS = 7;
    const REQUEST_ID = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONSUMER_ID => array(
            'name' => 'consumer_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ACK_TYPE => array(
            'name' => 'ack_type',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MESSAGE_ID => array(
            'name' => 'message_id',
            'repeated' => true,
            'type' => '\Pulsar\Proto\MessageIdData'
        ),
        self::VALIDATION_ERROR => array(
            'name' => 'validation_error',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PROPERTIES => array(
            'name' => 'properties',
            'repeated' => true,
            'type' => '\Pulsar\Proto\KeyLongValue'
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
        self::REQUEST_ID => array(
            'name' => 'request_id',
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
        $this->values[self::CONSUMER_ID] = null;
        $this->values[self::ACK_TYPE] = null;
        $this->values[self::MESSAGE_ID] = array();
        $this->values[self::VALIDATION_ERROR] = null;
        $this->values[self::PROPERTIES] = array();
        $this->values[self::TXNID_LEAST_BITS] = self::$fields[self::TXNID_LEAST_BITS]['default'];
        $this->values[self::TXNID_MOST_BITS] = self::$fields[self::TXNID_MOST_BITS]['default'];
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
     * Sets value of 'ack_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAckType($value)
    {
        return $this->set(self::ACK_TYPE, $value);
    }

    /**
     * Returns value of 'ack_type' property
     *
     * @return integer
     */
    public function getAckType()
    {
        $value = $this->get(self::ACK_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ack_type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAckType()
    {
        return $this->get(self::ACK_TYPE) !== null;
    }

    /**
     * Appends value to 'message_id' list
     *
     * @param \Pulsar\Proto\MessageIdData $value Value to append
     *
     * @return null
     */
    public function appendMessageId(\Pulsar\Proto\MessageIdData $value)
    {
        return $this->append(self::MESSAGE_ID, $value);
    }

    /**
     * Clears 'message_id' list
     *
     * @return null
     */
    public function clearMessageId()
    {
        return $this->clear(self::MESSAGE_ID);
    }

    /**
     * Returns 'message_id' list
     *
     * @return \Pulsar\Proto\MessageIdData[]
     */
    public function getMessageId()
    {
        return $this->get(self::MESSAGE_ID);
    }

    /**
     * Returns true if 'message_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMessageId()
    {
        return count($this->get(self::MESSAGE_ID)) !== 0;
    }

    /**
     * Returns 'message_id' iterator
     *
     * @return \ArrayIterator
     */
    public function getMessageIdIterator()
    {
        return new \ArrayIterator($this->get(self::MESSAGE_ID));
    }

    /**
     * Returns element from 'message_id' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Pulsar\Proto\MessageIdData
     */
    public function getMessageIdAt($offset)
    {
        return $this->get(self::MESSAGE_ID, $offset);
    }

    /**
     * Returns count of 'message_id' list
     *
     * @return int
     */
    public function getMessageIdCount()
    {
        return $this->count(self::MESSAGE_ID);
    }

    /**
     * Sets value of 'validation_error' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setValidationError($value)
    {
        return $this->set(self::VALIDATION_ERROR, $value);
    }

    /**
     * Returns value of 'validation_error' property
     *
     * @return integer
     */
    public function getValidationError()
    {
        $value = $this->get(self::VALIDATION_ERROR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'validation_error' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValidationError()
    {
        return $this->get(self::VALIDATION_ERROR) !== null;
    }

    /**
     * Appends value to 'properties' list
     *
     * @param \Pulsar\Proto\KeyLongValue $value Value to append
     *
     * @return null
     */
    public function appendProperties(\Pulsar\Proto\KeyLongValue $value)
    {
        return $this->append(self::PROPERTIES, $value);
    }

    /**
     * Clears 'properties' list
     *
     * @return null
     */
    public function clearProperties()
    {
        return $this->clear(self::PROPERTIES);
    }

    /**
     * Returns 'properties' list
     *
     * @return \Pulsar\Proto\KeyLongValue[]
     */
    public function getProperties()
    {
        return $this->get(self::PROPERTIES);
    }

    /**
     * Returns true if 'properties' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProperties()
    {
        return count($this->get(self::PROPERTIES)) !== 0;
    }

    /**
     * Returns 'properties' iterator
     *
     * @return \ArrayIterator
     */
    public function getPropertiesIterator()
    {
        return new \ArrayIterator($this->get(self::PROPERTIES));
    }

    /**
     * Returns element from 'properties' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Pulsar\Proto\KeyLongValue
     */
    public function getPropertiesAt($offset)
    {
        return $this->get(self::PROPERTIES, $offset);
    }

    /**
     * Returns count of 'properties' list
     *
     * @return int
     */
    public function getPropertiesCount()
    {
        return $this->count(self::PROPERTIES);
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