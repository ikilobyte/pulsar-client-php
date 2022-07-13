<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandPartitionedTopicMetadataResponse message
 */
class CommandPartitionedTopicMetadataResponse extends \ProtobufMessage
{
    /* Field index constants */
    const PARTITIONS = 1;
    const REQUEST_ID = 2;
    const RESPONSE = 3;
    const ERROR = 4;
    const MESSAGE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PARTITIONS => array(
            'name' => 'partitions',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REQUEST_ID => array(
            'name' => 'request_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RESPONSE => array(
            'name' => 'response',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ERROR => array(
            'name' => 'error',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MESSAGE => array(
            'name' => 'message',
            'required' => false,
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
        $this->values[self::PARTITIONS] = null;
        $this->values[self::REQUEST_ID] = null;
        $this->values[self::RESPONSE] = null;
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
     * Sets value of 'partitions' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPartitions($value)
    {
        return $this->set(self::PARTITIONS, $value);
    }

    /**
     * Returns value of 'partitions' property
     *
     * @return integer
     */
    public function getPartitions()
    {
        $value = $this->get(self::PARTITIONS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'partitions' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPartitions()
    {
        return $this->get(self::PARTITIONS) !== null;
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
     * Sets value of 'response' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setResponse($value)
    {
        return $this->set(self::RESPONSE, $value);
    }

    /**
     * Returns value of 'response' property
     *
     * @return integer
     */
    public function getResponse()
    {
        $value = $this->get(self::RESPONSE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'response' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasResponse()
    {
        return $this->get(self::RESPONSE) !== null;
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