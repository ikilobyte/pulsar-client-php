<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandAuthResponse message
 */
class CommandAuthResponse extends \ProtobufMessage
{
    /* Field index constants */
    const CLIENT_VERSION = 1;
    const RESPONSE = 2;
    const PROTOCOL_VERSION = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CLIENT_VERSION => array(
            'name' => 'client_version',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::RESPONSE => array(
            'name' => 'response',
            'required' => false,
            'type' => '\Pulsar\Proto\AuthData'
        ),
        self::PROTOCOL_VERSION => array(
            'default' => 0,
            'name' => 'protocol_version',
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
        $this->values[self::CLIENT_VERSION] = null;
        $this->values[self::RESPONSE] = null;
        $this->values[self::PROTOCOL_VERSION] = self::$fields[self::PROTOCOL_VERSION]['default'];
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
     * Sets value of 'client_version' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setClientVersion($value)
    {
        return $this->set(self::CLIENT_VERSION, $value);
    }

    /**
     * Returns value of 'client_version' property
     *
     * @return string
     */
    public function getClientVersion()
    {
        $value = $this->get(self::CLIENT_VERSION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'client_version' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientVersion()
    {
        return $this->get(self::CLIENT_VERSION) !== null;
    }

    /**
     * Sets value of 'response' property
     *
     * @param \Pulsar\Proto\AuthData $value Property value
     *
     * @return null
     */
    public function setResponse(\Pulsar\Proto\AuthData $value=null)
    {
        return $this->set(self::RESPONSE, $value);
    }

    /**
     * Returns value of 'response' property
     *
     * @return \Pulsar\Proto\AuthData
     */
    public function getResponse()
    {
        return $this->get(self::RESPONSE);
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
}
}