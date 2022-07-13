<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * Schema message
 */
class Schema extends \ProtobufMessage
{
    /* Field index constants */
    const NAME = 1;
    const SCHEMA_DATA = 3;
    const TYPE = 4;
    const PROPERTIES = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'name',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SCHEMA_DATA => array(
            'name' => 'schema_data',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PROPERTIES => array(
            'name' => 'properties',
            'repeated' => true,
            'type' => '\Pulsar\Proto\KeyValue'
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
        $this->values[self::NAME] = null;
        $this->values[self::SCHEMA_DATA] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::PROPERTIES] = array();
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
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        $value = $this->get(self::NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasName()
    {
        return $this->get(self::NAME) !== null;
    }

    /**
     * Sets value of 'schema_data' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSchemaData($value)
    {
        return $this->set(self::SCHEMA_DATA, $value);
    }

    /**
     * Returns value of 'schema_data' property
     *
     * @return string
     */
    public function getSchemaData()
    {
        $value = $this->get(self::SCHEMA_DATA);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'schema_data' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSchemaData()
    {
        return $this->get(self::SCHEMA_DATA) !== null;
    }

    /**
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }

    /**
     * Appends value to 'properties' list
     *
     * @param \Pulsar\Proto\KeyValue $value Value to append
     *
     * @return null
     */
    public function appendProperties(\Pulsar\Proto\KeyValue $value)
    {
        return $this->append(self::PROPERTIES, $value);
    }

    /**
     * Clears 'properties' list
     *
     * @return null
     */
    public function clearProperties()
    {
        return $this->clear(self::PROPERTIES);
    }

    /**
     * Returns 'properties' list
     *
     * @return \Pulsar\Proto\KeyValue[]
     */
    public function getProperties()
    {
        return $this->get(self::PROPERTIES);
    }

    /**
     * Returns true if 'properties' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProperties()
    {
        return count($this->get(self::PROPERTIES)) !== 0;
    }

    /**
     * Returns 'properties' iterator
     *
     * @return \ArrayIterator
     */
    public function getPropertiesIterator()
    {
        return new \ArrayIterator($this->get(self::PROPERTIES));
    }

    /**
     * Returns element from 'properties' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Pulsar\Proto\KeyValue
     */
    public function getPropertiesAt($offset)
    {
        return $this->get(self::PROPERTIES, $offset);
    }

    /**
     * Returns count of 'properties' list
     *
     * @return int
     */
    public function getPropertiesCount()
    {
        return $this->count(self::PROPERTIES);
    }
}
}