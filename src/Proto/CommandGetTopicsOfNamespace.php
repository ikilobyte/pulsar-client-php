<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandGetTopicsOfNamespace message
 */
class CommandGetTopicsOfNamespace extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_ID = 1;
    const NAMESPACE = 2;
    const MODE = 3;
    const TOPICS_PATTERN = 4;
    const TOPICS_HASH = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST_ID => array(
            'name' => 'request_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NAMESPACE => array(
            'name' => 'namespace',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MODE => array(
            'default' => \Pulsar\Proto\CommandGetTopicsOfNamespace_Mode::PERSISTENT,
            'name' => 'mode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOPICS_PATTERN => array(
            'name' => 'topics_pattern',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOPICS_HASH => array(
            'name' => 'topics_hash',
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
        $this->values[self::NAMESPACE] = null;
        $this->values[self::MODE] = self::$fields[self::MODE]['default'];
        $this->values[self::TOPICS_PATTERN] = null;
        $this->values[self::TOPICS_HASH] = null;
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
     * Sets value of 'namespace' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNamespace($value)
    {
        return $this->set(self::NAMESPACE, $value);
    }

    /**
     * Returns value of 'namespace' property
     *
     * @return string
     */
    public function getNamespace()
    {
        $value = $this->get(self::NAMESPACE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'namespace' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNamespace()
    {
        return $this->get(self::NAMESPACE) !== null;
    }

    /**
     * Sets value of 'mode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMode($value)
    {
        return $this->set(self::MODE, $value);
    }

    /**
     * Returns value of 'mode' property
     *
     * @return integer
     */
    public function getMode()
    {
        $value = $this->get(self::MODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'mode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMode()
    {
        return $this->get(self::MODE) !== null;
    }

    /**
     * Sets value of 'topics_pattern' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTopicsPattern($value)
    {
        return $this->set(self::TOPICS_PATTERN, $value);
    }

    /**
     * Returns value of 'topics_pattern' property
     *
     * @return string
     */
    public function getTopicsPattern()
    {
        $value = $this->get(self::TOPICS_PATTERN);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'topics_pattern' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTopicsPattern()
    {
        return $this->get(self::TOPICS_PATTERN) !== null;
    }

    /**
     * Sets value of 'topics_hash' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTopicsHash($value)
    {
        return $this->set(self::TOPICS_HASH, $value);
    }

    /**
     * Returns value of 'topics_hash' property
     *
     * @return string
     */
    public function getTopicsHash()
    {
        $value = $this->get(self::TOPICS_HASH);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'topics_hash' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTopicsHash()
    {
        return $this->get(self::TOPICS_HASH) !== null;
    }
}
}