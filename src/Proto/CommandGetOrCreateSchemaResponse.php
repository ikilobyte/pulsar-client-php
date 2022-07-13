<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandGetOrCreateSchemaResponse message
 */
class CommandGetOrCreateSchemaResponse extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_ID = 1;
    const ERROR_CODE = 2;
    const ERROR_MESSAGE = 3;
    const SCHEMA_VERSION = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST_ID => array(
            'name' => 'request_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ERROR_CODE => array(
            'name' => 'error_code',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ERROR_MESSAGE => array(
            'name' => 'error_message',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SCHEMA_VERSION => array(
            'name' => 'schema_version',
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
        $this->values[self::REQUEST_ID] = null;
        $this->values[self::ERROR_CODE] = null;
        $this->values[self::ERROR_MESSAGE] = null;
        $this->values[self::SCHEMA_VERSION] = null;
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
     * Sets value of 'error_code' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setErrorCode($value)
    {
        return $this->set(self::ERROR_CODE, $value);
    }

    /**
     * Returns value of 'error_code' property
     *
     * @return integer
     */
    public function getErrorCode()
    {
        $value = $this->get(self::ERROR_CODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'error_code' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasErrorCode()
    {
        return $this->get(self::ERROR_CODE) !== null;
    }

    /**
     * Sets value of 'error_message' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setErrorMessage($value)
    {
        return $this->set(self::ERROR_MESSAGE, $value);
    }

    /**
     * Returns value of 'error_message' property
     *
     * @return string
     */
    public function getErrorMessage()
    {
        $value = $this->get(self::ERROR_MESSAGE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'error_message' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasErrorMessage()
    {
        return $this->get(self::ERROR_MESSAGE) !== null;
    }

    /**
     * Sets value of 'schema_version' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSchemaVersion($value)
    {
        return $this->set(self::SCHEMA_VERSION, $value);
    }

    /**
     * Returns value of 'schema_version' property
     *
     * @return string
     */
    public function getSchemaVersion()
    {
        $value = $this->get(self::SCHEMA_VERSION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'schema_version' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSchemaVersion()
    {
        return $this->get(self::SCHEMA_VERSION) !== null;
    }
}
}