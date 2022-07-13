<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandAuthChallenge message
 */
class CommandAuthChallenge extends \ProtobufMessage
{
    /* Field index constants */
    const SERVER_VERSION = 1;
    const CHALLENGE = 2;
    const PROTOCOL_VERSION = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SERVER_VERSION => array(
            'name' => 'server_version',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CHALLENGE => array(
            'name' => 'challenge',
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
        $this->values[self::SERVER_VERSION] = null;
        $this->values[self::CHALLENGE] = null;
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
     * Sets value of 'challenge' property
     *
     * @param \Pulsar\Proto\AuthData $value Property value
     *
     * @return null
     */
    public function setChallenge(\Pulsar\Proto\AuthData $value=null)
    {
        return $this->set(self::CHALLENGE, $value);
    }

    /**
     * Returns value of 'challenge' property
     *
     * @return \Pulsar\Proto\AuthData
     */
    public function getChallenge()
    {
        return $this->get(self::CHALLENGE);
    }

    /**
     * Returns true if 'challenge' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChallenge()
    {
        return $this->get(self::CHALLENGE) !== null;
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