<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandSendReceipt message
 */
class CommandSendReceipt extends \ProtobufMessage
{
    /* Field index constants */
    const PRODUCER_ID = 1;
    const SEQUENCE_ID = 2;
    const MESSAGE_ID = 3;
    const HIGHEST_SEQUENCE_ID = 4;

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
        self::MESSAGE_ID => array(
            'name' => 'message_id',
            'required' => false,
            'type' => '\Pulsar\Proto\MessageIdData'
        ),
        self::HIGHEST_SEQUENCE_ID => array(
            'default' => 0,
            'name' => 'highest_sequence_id',
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
        $this->values[self::PRODUCER_ID] = null;
        $this->values[self::SEQUENCE_ID] = null;
        $this->values[self::MESSAGE_ID] = null;
        $this->values[self::HIGHEST_SEQUENCE_ID] = self::$fields[self::HIGHEST_SEQUENCE_ID]['default'];
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
     * Sets value of 'message_id' property
     *
     * @param \Pulsar\Proto\MessageIdData $value Property value
     *
     * @return null
     */
    public function setMessageId(\Pulsar\Proto\MessageIdData $value=null)
    {
        return $this->set(self::MESSAGE_ID, $value);
    }

    /**
     * Returns value of 'message_id' property
     *
     * @return \Pulsar\Proto\MessageIdData
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
        return $this->get(self::MESSAGE_ID) !== null;
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
}
}