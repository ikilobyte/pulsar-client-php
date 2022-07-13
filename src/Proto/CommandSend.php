<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandSend message
 */
class CommandSend extends \ProtobufMessage
{
    /* Field index constants */
    const PRODUCER_ID = 1;
    const SEQUENCE_ID = 2;
    const NUM_MESSAGES = 3;
    const TXNID_LEAST_BITS = 4;
    const TXNID_MOST_BITS = 5;
    const HIGHEST_SEQUENCE_ID = 6;
    const IS_CHUNK = 7;
    const MARKER = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PRODUCER_ID => array(
            'name' => 'producer_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SEQUENCE_ID => array(
            'name' => 'sequence_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NUM_MESSAGES => array(
            'default' => 1,
            'name' => 'num_messages',
            'required' => false,
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
        self::HIGHEST_SEQUENCE_ID => array(
            'default' => 0,
            'name' => 'highest_sequence_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IS_CHUNK => array(
            'default' => false,
            'name' => 'is_chunk',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::MARKER => array(
            'default' => false,
            'name' => 'marker',
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
        $this->values[self::PRODUCER_ID] = null;
        $this->values[self::SEQUENCE_ID] = null;
        $this->values[self::NUM_MESSAGES] = self::$fields[self::NUM_MESSAGES]['default'];
        $this->values[self::TXNID_LEAST_BITS] = self::$fields[self::TXNID_LEAST_BITS]['default'];
        $this->values[self::TXNID_MOST_BITS] = self::$fields[self::TXNID_MOST_BITS]['default'];
        $this->values[self::HIGHEST_SEQUENCE_ID] = self::$fields[self::HIGHEST_SEQUENCE_ID]['default'];
        $this->values[self::IS_CHUNK] = self::$fields[self::IS_CHUNK]['default'];
        $this->values[self::MARKER] = self::$fields[self::MARKER]['default'];
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
     * Sets value of 'sequence_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSequenceId($value)
    {
        return $this->set(self::SEQUENCE_ID, $value);
    }

    /**
     * Returns value of 'sequence_id' property
     *
     * @return integer
     */
    public function getSequenceId()
    {
        $value = $this->get(self::SEQUENCE_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sequence_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSequenceId()
    {
        return $this->get(self::SEQUENCE_ID) !== null;
    }

    /**
     * Sets value of 'num_messages' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNumMessages($value)
    {
        return $this->set(self::NUM_MESSAGES, $value);
    }

    /**
     * Returns value of 'num_messages' property
     *
     * @return integer
     */
    public function getNumMessages()
    {
        $value = $this->get(self::NUM_MESSAGES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'num_messages' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNumMessages()
    {
        return $this->get(self::NUM_MESSAGES) !== null;
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
     * Sets value of 'highest_sequence_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHighestSequenceId($value)
    {
        return $this->set(self::HIGHEST_SEQUENCE_ID, $value);
    }

    /**
     * Returns value of 'highest_sequence_id' property
     *
     * @return integer
     */
    public function getHighestSequenceId()
    {
        $value = $this->get(self::HIGHEST_SEQUENCE_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'highest_sequence_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHighestSequenceId()
    {
        return $this->get(self::HIGHEST_SEQUENCE_ID) !== null;
    }

    /**
     * Sets value of 'is_chunk' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsChunk($value)
    {
        return $this->set(self::IS_CHUNK, $value);
    }

    /**
     * Returns value of 'is_chunk' property
     *
     * @return boolean
     */
    public function getIsChunk()
    {
        $value = $this->get(self::IS_CHUNK);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'is_chunk' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIsChunk()
    {
        return $this->get(self::IS_CHUNK) !== null;
    }

    /**
     * Sets value of 'marker' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setMarker($value)
    {
        return $this->set(self::MARKER, $value);
    }

    /**
     * Returns value of 'marker' property
     *
     * @return boolean
     */
    public function getMarker()
    {
        $value = $this->get(self::MARKER);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'marker' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMarker()
    {
        return $this->get(self::MARKER) !== null;
    }
}
}