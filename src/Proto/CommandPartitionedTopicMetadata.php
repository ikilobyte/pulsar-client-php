<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandPartitionedTopicMetadata message
 */
class CommandPartitionedTopicMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const TOPIC = 1;
    const REQUEST_ID = 2;
    const ORIGINAL_PRINCIPAL = 3;
    const ORIGINAL_AUTH_DATA = 4;
    const ORIGINAL_AUTH_METHOD = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TOPIC => array(
            'name' => 'topic',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REQUEST_ID => array(
            'name' => 'request_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::TOPIC] = null;
        $this->values[self::REQUEST_ID] = null;
        $this->values[self::ORIGINAL_PRINCIPAL] = null;
        $this->values[self::ORIGINAL_AUTH_DATA] = null;
        $this->values[self::ORIGINAL_AUTH_METHOD] = null;
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
     * Sets value of 'topic' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTopic($value)
    {
        return $this->set(self::TOPIC, $value);
    }

    /**
     * Returns value of 'topic' property
     *
     * @return string
     */
    public function getTopic()
    {
        $value = $this->get(self::TOPIC);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'topic' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTopic()
    {
        return $this->get(self::TOPIC) !== null;
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
}
}