<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandSeek message
 */
class CommandSeek extends \ProtobufMessage
{
    /* Field index constants */
    const CONSUMER_ID = 1;
    const REQUEST_ID = 2;
    const MESSAGE_ID = 3;
    const MESSAGE_PUBLISH_TIME = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONSUMER_ID => array(
            'name' => 'consumer_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REQUEST_ID => array(
            'name' => 'request_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MESSAGE_ID => array(
            'name' => 'message_id',
            'required' => false,
            'type' => '\Pulsar\Proto\MessageIdData'
        ),
        self::MESSAGE_PUBLISH_TIME => array(
            'name' => 'message_publish_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::CONSUMER_ID] = null;
        $this->values[self::REQUEST_ID] = null;
        $this->values[self::MESSAGE_ID] = null;
        $this->values[self::MESSAGE_PUBLISH_TIME] = null;
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
     * Sets value of 'consumer_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setConsumerId($value)
    {
        return $this->set(self::CONSUMER_ID, $value);
    }

    /**
     * Returns value of 'consumer_id' property
     *
     * @return integer
     */
    public function getConsumerId()
    {
        $value = $this->get(self::CONSUMER_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'consumer_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConsumerId()
    {
        return $this->get(self::CONSUMER_ID) !== null;
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
     * Sets value of 'message_id' property
     *
     * @param \Pulsar\Proto\MessageIdData $value Property value
     *
     * @return null
     */
    public function setMessageId(\Pulsar\Proto\MessageIdData $value=null)
    {
        return $this->set(self::MESSAGE_ID, $value);
    }

    /**
     * Returns value of 'message_id' property
     *
     * @return \Pulsar\Proto\MessageIdData
     */
    public function getMessageId()
    {
        return $this->get(self::MESSAGE_ID);
    }

    /**
     * Returns true if 'message_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMessageId()
    {
        return $this->get(self::MESSAGE_ID) !== null;
    }

    /**
     * Sets value of 'message_publish_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMessagePublishTime($value)
    {
        return $this->set(self::MESSAGE_PUBLISH_TIME, $value);
    }

    /**
     * Returns value of 'message_publish_time' property
     *
     * @return integer
     */
    public function getMessagePublishTime()
    {
        $value = $this->get(self::MESSAGE_PUBLISH_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'message_publish_time' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMessagePublishTime()
    {
        return $this->get(self::MESSAGE_PUBLISH_TIME) !== null;
    }
}
}