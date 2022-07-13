<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandSuccess message
 */
class CommandSuccess extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_ID = 1;
    const SCHEMA = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST_ID => array(
            'name' => 'request_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SCHEMA => array(
            'name' => 'schema',
            'required' => false,
            'type' => '\Pulsar\Proto\Schema'
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
        $this->values[self::SCHEMA] = null;
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
     * Sets value of 'schema' property
     *
     * @param \Pulsar\Proto\Schema $value Property value
     *
     * @return null
     */
    public function setSchema(\Pulsar\Proto\Schema $value=null)
    {
        return $this->set(self::SCHEMA, $value);
    }

    /**
     * Returns value of 'schema' property
     *
     * @return \Pulsar\Proto\Schema
     */
    public function getSchema()
    {
        return $this->get(self::SCHEMA);
    }

    /**
     * Returns true if 'schema' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSchema()
    {
        return $this->get(self::SCHEMA) !== null;
    }
}
}