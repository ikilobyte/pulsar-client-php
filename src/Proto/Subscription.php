<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * Subscription message
 */
class Subscription extends \ProtobufMessage
{
    /* Field index constants */
    const TOPIC = 1;
    const SUBSCRIPTION = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TOPIC => array(
            'name' => 'topic',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SUBSCRIPTION => array(
            'name' => 'subscription',
            'required' => true,
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
        $this->values[self::SUBSCRIPTION] = null;
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
     * Sets value of 'subscription' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSubscription($value)
    {
        return $this->set(self::SUBSCRIPTION, $value);
    }

    /**
     * Returns value of 'subscription' property
     *
     * @return string
     */
    public function getSubscription()
    {
        $value = $this->get(self::SUBSCRIPTION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'subscription' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSubscription()
    {
        return $this->get(self::SUBSCRIPTION) !== null;
    }
}
}