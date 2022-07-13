<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * MessageIdData message
 */
class MessageIdData extends \ProtobufMessage
{
    /* Field index constants */
    const LEDGERID = 1;
    const ENTRYID = 2;
    const PARTITION = 3;
    const BATCH_INDEX = 4;
    const ACK_SET = 5;
    const BATCH_SIZE = 6;
    const FIRST_CHUNK_MESSAGE_ID = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LEDGERID => array(
            'name' => 'ledgerId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ENTRYID => array(
            'name' => 'entryId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PARTITION => array(
            'default' => -1,
            'name' => 'partition',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BATCH_INDEX => array(
            'default' => -1,
            'name' => 'batch_index',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ACK_SET => array(
            'name' => 'ack_set',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BATCH_SIZE => array(
            'name' => 'batch_size',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FIRST_CHUNK_MESSAGE_ID => array(
            'name' => 'first_chunk_message_id',
            'required' => false,
            'type' => '\Pulsar\Proto\MessageIdData'
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
        $this->values[self::LEDGERID] = null;
        $this->values[self::ENTRYID] = null;
        $this->values[self::PARTITION] = self::$fields[self::PARTITION]['default'];
        $this->values[self::BATCH_INDEX] = self::$fields[self::BATCH_INDEX]['default'];
        $this->values[self::ACK_SET] = array();
        $this->values[self::BATCH_SIZE] = null;
        $this->values[self::FIRST_CHUNK_MESSAGE_ID] = null;
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
     * Sets value of 'ledgerId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLedgerId($value)
    {
        return $this->set(self::LEDGERID, $value);
    }

    /**
     * Returns value of 'ledgerId' property
     *
     * @return integer
     */
    public function getLedgerId()
    {
        $value = $this->get(self::LEDGERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ledgerId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLedgerId()
    {
        return $this->get(self::LEDGERID) !== null;
    }

    /**
     * Sets value of 'entryId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEntryId($value)
    {
        return $this->set(self::ENTRYID, $value);
    }

    /**
     * Returns value of 'entryId' property
     *
     * @return integer
     */
    public function getEntryId()
    {
        $value = $this->get(self::ENTRYID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'entryId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEntryId()
    {
        return $this->get(self::ENTRYID) !== null;
    }

    /**
     * Sets value of 'partition' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPartition($value)
    {
        return $this->set(self::PARTITION, $value);
    }

    /**
     * Returns value of 'partition' property
     *
     * @return integer
     */
    public function getPartition()
    {
        $value = $this->get(self::PARTITION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'partition' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPartition()
    {
        return $this->get(self::PARTITION) !== null;
    }

    /**
     * Sets value of 'batch_index' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBatchIndex($value)
    {
        return $this->set(self::BATCH_INDEX, $value);
    }

    /**
     * Returns value of 'batch_index' property
     *
     * @return integer
     */
    public function getBatchIndex()
    {
        $value = $this->get(self::BATCH_INDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'batch_index' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBatchIndex()
    {
        return $this->get(self::BATCH_INDEX) !== null;
    }

    /**
     * Appends value to 'ack_set' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendAckSet($value)
    {
        return $this->append(self::ACK_SET, $value);
    }

    /**
     * Clears 'ack_set' list
     *
     * @return null
     */
    public function clearAckSet()
    {
        return $this->clear(self::ACK_SET);
    }

    /**
     * Returns 'ack_set' list
     *
     * @return integer[]
     */
    public function getAckSet()
    {
        return $this->get(self::ACK_SET);
    }

    /**
     * Returns true if 'ack_set' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAckSet()
    {
        return count($this->get(self::ACK_SET)) !== 0;
    }

    /**
     * Returns 'ack_set' iterator
     *
     * @return \ArrayIterator
     */
    public function getAckSetIterator()
    {
        return new \ArrayIterator($this->get(self::ACK_SET));
    }

    /**
     * Returns element from 'ack_set' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getAckSetAt($offset)
    {
        return $this->get(self::ACK_SET, $offset);
    }

    /**
     * Returns count of 'ack_set' list
     *
     * @return int
     */
    public function getAckSetCount()
    {
        return $this->count(self::ACK_SET);
    }

    /**
     * Sets value of 'batch_size' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBatchSize($value)
    {
        return $this->set(self::BATCH_SIZE, $value);
    }

    /**
     * Returns value of 'batch_size' property
     *
     * @return integer
     */
    public function getBatchSize()
    {
        $value = $this->get(self::BATCH_SIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'batch_size' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBatchSize()
    {
        return $this->get(self::BATCH_SIZE) !== null;
    }

    /**
     * Sets value of 'first_chunk_message_id' property
     *
     * @param \Pulsar\Proto\MessageIdData $value Property value
     *
     * @return null
     */
    public function setFirstChunkMessageId(\Pulsar\Proto\MessageIdData $value=null)
    {
        return $this->set(self::FIRST_CHUNK_MESSAGE_ID, $value);
    }

    /**
     * Returns value of 'first_chunk_message_id' property
     *
     * @return \Pulsar\Proto\MessageIdData
     */
    public function getFirstChunkMessageId()
    {
        return $this->get(self::FIRST_CHUNK_MESSAGE_ID);
    }

    /**
     * Returns true if 'first_chunk_message_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFirstChunkMessageId()
    {
        return $this->get(self::FIRST_CHUNK_MESSAGE_ID) !== null;
    }
}
}