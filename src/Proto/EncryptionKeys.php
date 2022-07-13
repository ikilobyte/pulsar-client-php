<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * EncryptionKeys message
 */
class EncryptionKeys extends \ProtobufMessage
{
    /* Field index constants */
    const KEY = 1;
    const VALUE = 2;
    const METADATA = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::KEY => array(
            'name' => 'key',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VALUE => array(
            'name' => 'value',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::METADATA => array(
            'name' => 'metadata',
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
        $this->values[self::KEY] = null;
        $this->values[self::VALUE] = null;
        $this->values[self::METADATA] = array();
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
     * Sets value of 'key' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setKey($value)
    {
        return $this->set(self::KEY, $value);
    }

    /**
     * Returns value of 'key' property
     *
     * @return string
     */
    public function getKey()
    {
        $value = $this->get(self::KEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'key' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKey()
    {
        return $this->get(self::KEY) !== null;
    }

    /**
     * Sets value of 'value' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setValue($value)
    {
        return $this->set(self::VALUE, $value);
    }

    /**
     * Returns value of 'value' property
     *
     * @return string
     */
    public function getValue()
    {
        $value = $this->get(self::VALUE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'value' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValue()
    {
        return $this->get(self::VALUE) !== null;
    }

    /**
     * Appends value to 'metadata' list
     *
     * @param \Pulsar\Proto\KeyValue $value Value to append
     *
     * @return null
     */
    public function appendMetadata(\Pulsar\Proto\KeyValue $value)
    {
        return $this->append(self::METADATA, $value);
    }

    /**
     * Clears 'metadata' list
     *
     * @return null
     */
    public function clearMetadata()
    {
        return $this->clear(self::METADATA);
    }

    /**
     * Returns 'metadata' list
     *
     * @return \Pulsar\Proto\KeyValue[]
     */
    public function getMetadata()
    {
        return $this->get(self::METADATA);
    }

    /**
     * Returns true if 'metadata' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMetadata()
    {
        return count($this->get(self::METADATA)) !== 0;
    }

    /**
     * Returns 'metadata' iterator
     *
     * @return \ArrayIterator
     */
    public function getMetadataIterator()
    {
        return new \ArrayIterator($this->get(self::METADATA));
    }

    /**
     * Returns element from 'metadata' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Pulsar\Proto\KeyValue
     */
    public function getMetadataAt($offset)
    {
        return $this->get(self::METADATA, $offset);
    }

    /**
     * Returns count of 'metadata' list
     *
     * @return int
     */
    public function getMetadataCount()
    {
        return $this->count(self::METADATA);
    }
}
}