<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandConnect message
 */
class CommandConnect extends \ProtobufMessage
{
    /* Field index constants */
    const CLIENT_VERSION = 1;
    const AUTH_METHOD = 2;
    const AUTH_METHOD_NAME = 5;
    const AUTH_DATA = 3;
    const PROTOCOL_VERSION = 4;
    const PROXY_TO_BROKER_URL = 6;
    const ORIGINAL_PRINCIPAL = 7;
    const ORIGINAL_AUTH_DATA = 8;
    const ORIGINAL_AUTH_METHOD = 9;
    const FEATURE_FLAGS = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CLIENT_VERSION => array(
            'name' => 'client_version',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::AUTH_METHOD => array(
            'name' => 'auth_method',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
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
        self::PROTOCOL_VERSION => array(
            'default' => 0,
            'name' => 'protocol_version',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PROXY_TO_BROKER_URL => array(
            'name' => 'proxy_to_broker_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ORIGINAL_PRINCIPAL => array(
            'name' => 'original_principal',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ORIGINAL_AUTH_DATA => array(
            'name' => 'original_auth_data',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ORIGINAL_AUTH_METHOD => array(
            'name' => 'original_auth_method',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FEATURE_FLAGS => array(
            'name' => 'feature_flags',
            'required' => false,
            'type' => '\Pulsar\Proto\FeatureFlags'
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
        $this->values[self::AUTH_METHOD] = null;
        $this->values[self::AUTH_METHOD_NAME] = null;
        $this->values[self::AUTH_DATA] = null;
        $this->values[self::PROTOCOL_VERSION] = self::$fields[self::PROTOCOL_VERSION]['default'];
        $this->values[self::PROXY_TO_BROKER_URL] = null;
        $this->values[self::ORIGINAL_PRINCIPAL] = null;
        $this->values[self::ORIGINAL_AUTH_DATA] = null;
        $this->values[self::ORIGINAL_AUTH_METHOD] = null;
        $this->values[self::FEATURE_FLAGS] = null;
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
     * Sets value of 'auth_method' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAuthMethod($value)
    {
        return $this->set(self::AUTH_METHOD, $value);
    }

    /**
     * Returns value of 'auth_method' property
     *
     * @return integer
     */
    public function getAuthMethod()
    {
        $value = $this->get(self::AUTH_METHOD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'auth_method' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAuthMethod()
    {
        return $this->get(self::AUTH_METHOD) !== null;
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
     * Sets value of 'proxy_to_broker_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setProxyToBrokerUrl($value)
    {
        return $this->set(self::PROXY_TO_BROKER_URL, $value);
    }

    /**
     * Returns value of 'proxy_to_broker_url' property
     *
     * @return string
     */
    public function getProxyToBrokerUrl()
    {
        $value = $this->get(self::PROXY_TO_BROKER_URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'proxy_to_broker_url' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProxyToBrokerUrl()
    {
        return $this->get(self::PROXY_TO_BROKER_URL) !== null;
    }

    /**
     * Sets value of 'original_principal' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOriginalPrincipal($value)
    {
        return $this->set(self::ORIGINAL_PRINCIPAL, $value);
    }

    /**
     * Returns value of 'original_principal' property
     *
     * @return string
     */
    public function getOriginalPrincipal()
    {
        $value = $this->get(self::ORIGINAL_PRINCIPAL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'original_principal' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOriginalPrincipal()
    {
        return $this->get(self::ORIGINAL_PRINCIPAL) !== null;
    }

    /**
     * Sets value of 'original_auth_data' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOriginalAuthData($value)
    {
        return $this->set(self::ORIGINAL_AUTH_DATA, $value);
    }

    /**
     * Returns value of 'original_auth_data' property
     *
     * @return string
     */
    public function getOriginalAuthData()
    {
        $value = $this->get(self::ORIGINAL_AUTH_DATA);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'original_auth_data' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOriginalAuthData()
    {
        return $this->get(self::ORIGINAL_AUTH_DATA) !== null;
    }

    /**
     * Sets value of 'original_auth_method' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOriginalAuthMethod($value)
    {
        return $this->set(self::ORIGINAL_AUTH_METHOD, $value);
    }

    /**
     * Returns value of 'original_auth_method' property
     *
     * @return string
     */
    public function getOriginalAuthMethod()
    {
        $value = $this->get(self::ORIGINAL_AUTH_METHOD);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'original_auth_method' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOriginalAuthMethod()
    {
        return $this->get(self::ORIGINAL_AUTH_METHOD) !== null;
    }

    /**
     * Sets value of 'feature_flags' property
     *
     * @param \Pulsar\Proto\FeatureFlags $value Property value
     *
     * @return null
     */
    public function setFeatureFlags(\Pulsar\Proto\FeatureFlags $value=null)
    {
        return $this->set(self::FEATURE_FLAGS, $value);
    }

    /**
     * Returns value of 'feature_flags' property
     *
     * @return \Pulsar\Proto\FeatureFlags
     */
    public function getFeatureFlags()
    {
        return $this->get(self::FEATURE_FLAGS);
    }

    /**
     * Returns true if 'feature_flags' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFeatureFlags()
    {
        return $this->get(self::FEATURE_FLAGS) !== null;
    }
}
}