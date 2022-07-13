<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * AuthData message
 */
class AuthData extends \ProtobufMessage
{
    /* Field index constants */
    const AUTH_METHOD_NAME = 1;
    const AUTH_DATA = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::AUTH_METHOD_NAME => array(
            'name' => 'auth_method_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::AUTH_DATA => array(
            'name' => 'auth_data',
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
        $this->values[self::AUTH_METHOD_NAME] = null;
        $this->values[self::AUTH_DATA] = null;
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
     * Sets value of 'auth_method_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAuthMethodName($value)
    {
        return $this->set(self::AUTH_METHOD_NAME, $value);
    }

    /**
     * Returns value of 'auth_method_name' property
     *
     * @return string
     */
    public function getAuthMethodName()
    {
        $value = $this->get(self::AUTH_METHOD_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'auth_method_name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAuthMethodName()
    {
        return $this->get(self::AUTH_METHOD_NAME) !== null;
    }

    /**
     * Sets value of 'auth_data' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAuthData($value)
    {
        return $this->set(self::AUTH_DATA, $value);
    }

    /**
     * Returns value of 'auth_data' property
     *
     * @return string
     */
    public function getAuthData()
    {
        $value = $this->get(self::AUTH_DATA);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'auth_data' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAuthData()
    {
        return $this->get(self::AUTH_DATA) !== null;
    }
}
}