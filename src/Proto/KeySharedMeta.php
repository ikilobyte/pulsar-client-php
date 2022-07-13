<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * KeySharedMeta message
 */
class KeySharedMeta extends \ProtobufMessage
{
    /* Field index constants */
    const KEYSHAREDMODE = 1;
    const HASHRANGES = 3;
    const ALLOWOUTOFORDERDELIVERY = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::KEYSHAREDMODE => array(
            'name' => 'keySharedMode',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HASHRANGES => array(
            'name' => 'hashRanges',
            'repeated' => true,
            'type' => '\Pulsar\Proto\IntRange'
        ),
        self::ALLOWOUTOFORDERDELIVERY => array(
            'default' => false,
            'name' => 'allowOutOfOrderDelivery',
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
        $this->values[self::KEYSHAREDMODE] = null;
        $this->values[self::HASHRANGES] = array();
        $this->values[self::ALLOWOUTOFORDERDELIVERY] = self::$fields[self::ALLOWOUTOFORDERDELIVERY]['default'];
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
     * Sets value of 'keySharedMode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setKeySharedMode($value)
    {
        return $this->set(self::KEYSHAREDMODE, $value);
    }

    /**
     * Returns value of 'keySharedMode' property
     *
     * @return integer
     */
    public function getKeySharedMode()
    {
        $value = $this->get(self::KEYSHAREDMODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'keySharedMode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKeySharedMode()
    {
        return $this->get(self::KEYSHAREDMODE) !== null;
    }

    /**
     * Appends value to 'hashRanges' list
     *
     * @param \Pulsar\Proto\IntRange $value Value to append
     *
     * @return null
     */
    public function appendHashRanges(\Pulsar\Proto\IntRange $value)
    {
        return $this->append(self::HASHRANGES, $value);
    }

    /**
     * Clears 'hashRanges' list
     *
     * @return null
     */
    public function clearHashRanges()
    {
        return $this->clear(self::HASHRANGES);
    }

    /**
     * Returns 'hashRanges' list
     *
     * @return \Pulsar\Proto\IntRange[]
     */
    public function getHashRanges()
    {
        return $this->get(self::HASHRANGES);
    }

    /**
     * Returns true if 'hashRanges' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHashRanges()
    {
        return count($this->get(self::HASHRANGES)) !== 0;
    }

    /**
     * Returns 'hashRanges' iterator
     *
     * @return \ArrayIterator
     */
    public function getHashRangesIterator()
    {
        return new \ArrayIterator($this->get(self::HASHRANGES));
    }

    /**
     * Returns element from 'hashRanges' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Pulsar\Proto\IntRange
     */
    public function getHashRangesAt($offset)
    {
        return $this->get(self::HASHRANGES, $offset);
    }

    /**
     * Returns count of 'hashRanges' list
     *
     * @return int
     */
    public function getHashRangesCount()
    {
        return $this->count(self::HASHRANGES);
    }

    /**
     * Sets value of 'allowOutOfOrderDelivery' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setAllowOutOfOrderDelivery($value)
    {
        return $this->set(self::ALLOWOUTOFORDERDELIVERY, $value);
    }

    /**
     * Returns value of 'allowOutOfOrderDelivery' property
     *
     * @return boolean
     */
    public function getAllowOutOfOrderDelivery()
    {
        $value = $this->get(self::ALLOWOUTOFORDERDELIVERY);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'allowOutOfOrderDelivery' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAllowOutOfOrderDelivery()
    {
        return $this->get(self::ALLOWOUTOFORDERDELIVERY) !== null;
    }
}
}