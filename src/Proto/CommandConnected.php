<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandConnected message
 */
class CommandConnected extends \ProtobufMessage
{
    /* Field index constants */
    const SERVER_VERSION = 1;
    const PROTOCOL_VERSION = 2;
    const MAX_MESSAGE_SIZE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SERVER_VERSION => array(
            'name' => 'server_version',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PROTOCOL_VERSION => array(
            'default' => 0,
            'name' => 'protocol_version',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAX_MESSAGE_SIZE => array(
            'name' => 'max_message_size',
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
        $this->values[self::SERVER_VERSION] = null;
        $this->values[self::PROTOCOL_VERSION] = self::$fields[self::PROTOCOL_VERSION]['default'];
        $this->values[self::MAX_MESSAGE_SIZE] = null;
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
     * Sets value of 'server_version' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setServerVersion($value)
    {
        return $this->set(self::SERVER_VERSION, $value);
    }

    /**
     * Returns value of 'server_version' property
     *
     * @return string
     */
    public function getServerVersion()
    {
        $value = $this->get(self::SERVER_VERSION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'server_version' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasServerVersion()
    {
        return $this->get(self::SERVER_VERSION) !== null;
    }

    /**
     * Sets value of 'protocol_version' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setProtocolVersion($value)
    {
        return $this->set(self::PROTOCOL_VERSION, $value);
    }

    /**
     * Returns value of 'protocol_version' property
     *
     * @return integer
     */
    public function getProtocolVersion()
    {
        $value = $this->get(self::PROTOCOL_VERSION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'protocol_version' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProtocolVersion()
    {
        return $this->get(self::PROTOCOL_VERSION) !== null;
    }

    /**
     * Sets value of 'max_message_size' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxMessageSize($value)
    {
        return $this->set(self::MAX_MESSAGE_SIZE, $value);
    }

    /**
     * Returns value of 'max_message_size' property
     *
     * @return integer
     */
    public function getMaxMessageSize()
    {
        $value = $this->get(self::MAX_MESSAGE_SIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'max_message_size' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMaxMessageSize()
    {
        return $this->get(self::MAX_MESSAGE_SIZE) !== null;
    }
}
}