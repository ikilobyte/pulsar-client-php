<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandSendError message
 */
class CommandSendError extends \ProtobufMessage
{
    /* Field index constants */
    const PRODUCER_ID = 1;
    const SEQUENCE_ID = 2;
    const ERROR = 3;
    const MESSAGE = 4;

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
        self::ERROR => array(
            'name' => 'error',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MESSAGE => array(
            'name' => 'message',
            'required' => true,
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
        $this->values[self::PRODUCER_ID] = null;
        $this->values[self::SEQUENCE_ID] = null;
        $this->values[self::ERROR] = null;
        $this->values[self::MESSAGE] = null;
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
     * Sets value of 'error' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setError($value)
    {
        return $this->set(self::ERROR, $value);
    }

    /**
     * Returns value of 'error' property
     *
     * @return integer
     */
    public function getError()
    {
        $value = $this->get(self::ERROR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'error' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasError()
    {
        return $this->get(self::ERROR) !== null;
    }

    /**
     * Sets value of 'message' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessage($value)
    {
        return $this->set(self::MESSAGE, $value);
    }

    /**
     * Returns value of 'message' property
     *
     * @return string
     */
    public function getMessage()
    {
        $value = $this->get(self::MESSAGE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'message' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMessage()
    {
        return $this->get(self::MESSAGE) !== null;
    }
}
}