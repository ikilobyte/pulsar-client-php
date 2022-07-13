<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandGetTopicsOfNamespaceResponse message
 */
class CommandGetTopicsOfNamespaceResponse extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_ID = 1;
    const TOPICS = 2;
    const FILTERED = 3;
    const TOPICS_HASH = 4;
    const CHANGED = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST_ID => array(
            'name' => 'request_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOPICS => array(
            'name' => 'topics',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FILTERED => array(
            'default' => false,
            'name' => 'filtered',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::TOPICS_HASH => array(
            'name' => 'topics_hash',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CHANGED => array(
            'default' => true,
            'name' => 'changed',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::TOPICS] = array();
        $this->values[self::FILTERED] = self::$fields[self::FILTERED]['default'];
        $this->values[self::TOPICS_HASH] = null;
        $this->values[self::CHANGED] = self::$fields[self::CHANGED]['default'];
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
     * Appends value to 'topics' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendTopics($value)
    {
        return $this->append(self::TOPICS, $value);
    }

    /**
     * Clears 'topics' list
     *
     * @return null
     */
    public function clearTopics()
    {
        return $this->clear(self::TOPICS);
    }

    /**
     * Returns 'topics' list
     *
     * @return string[]
     */
    public function getTopics()
    {
        return $this->get(self::TOPICS);
    }

    /**
     * Returns true if 'topics' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTopics()
    {
        return count($this->get(self::TOPICS)) !== 0;
    }

    /**
     * Returns 'topics' iterator
     *
     * @return \ArrayIterator
     */
    public function getTopicsIterator()
    {
        return new \ArrayIterator($this->get(self::TOPICS));
    }

    /**
     * Returns element from 'topics' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getTopicsAt($offset)
    {
        return $this->get(self::TOPICS, $offset);
    }

    /**
     * Returns count of 'topics' list
     *
     * @return int
     */
    public function getTopicsCount()
    {
        return $this->count(self::TOPICS);
    }

    /**
     * Sets value of 'filtered' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setFiltered($value)
    {
        return $this->set(self::FILTERED, $value);
    }

    /**
     * Returns value of 'filtered' property
     *
     * @return boolean
     */
    public function getFiltered()
    {
        $value = $this->get(self::FILTERED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'filtered' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFiltered()
    {
        return $this->get(self::FILTERED) !== null;
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

    /**
     * Sets value of 'changed' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setChanged($value)
    {
        return $this->set(self::CHANGED, $value);
    }

    /**
     * Returns value of 'changed' property
     *
     * @return boolean
     */
    public function getChanged()
    {
        $value = $this->get(self::CHANGED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'changed' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChanged()
    {
        return $this->get(self::CHANGED) !== null;
    }
}
}