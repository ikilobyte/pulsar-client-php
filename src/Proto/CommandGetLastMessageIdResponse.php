<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandGetLastMessageIdResponse message
 */
class CommandGetLastMessageIdResponse extends \ProtobufMessage
{
    /* Field index constants */
    const LAST_MESSAGE_ID = 1;
    const REQUEST_ID = 2;
    const CONSUMER_MARK_DELETE_POSITION = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LAST_MESSAGE_ID => array(
            'name' => 'last_message_id',
            'required' => true,
            'type' => '\Pulsar\Proto\MessageIdData'
        ),
        self::REQUEST_ID => array(
            'name' => 'request_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONSUMER_MARK_DELETE_POSITION => array(
            'name' => 'consumer_mark_delete_position',
            'required' => false,
            'type' => '\Pulsar\Proto\MessageIdData'
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
        $this->values[self::LAST_MESSAGE_ID] = null;
        $this->values[self::REQUEST_ID] = null;
        $this->values[self::CONSUMER_MARK_DELETE_POSITION] = null;
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
     * Sets value of 'last_message_id' property
     *
     * @param \Pulsar\Proto\MessageIdData $value Property value
     *
     * @return null
     */
    public function setLastMessageId(\Pulsar\Proto\MessageIdData $value=null)
    {
        return $this->set(self::LAST_MESSAGE_ID, $value);
    }

    /**
     * Returns value of 'last_message_id' property
     *
     * @return \Pulsar\Proto\MessageIdData
     */
    public function getLastMessageId()
    {
        return $this->get(self::LAST_MESSAGE_ID);
    }

    /**
     * Returns true if 'last_message_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLastMessageId()
    {
        return $this->get(self::LAST_MESSAGE_ID) !== null;
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
     * Sets value of 'consumer_mark_delete_position' property
     *
     * @param \Pulsar\Proto\MessageIdData $value Property value
     *
     * @return null
     */
    public function setConsumerMarkDeletePosition(\Pulsar\Proto\MessageIdData $value=null)
    {
        return $this->set(self::CONSUMER_MARK_DELETE_POSITION, $value);
    }

    /**
     * Returns value of 'consumer_mark_delete_position' property
     *
     * @return \Pulsar\Proto\MessageIdData
     */
    public function getConsumerMarkDeletePosition()
    {
        return $this->get(self::CONSUMER_MARK_DELETE_POSITION);
    }

    /**
     * Returns true if 'consumer_mark_delete_position' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConsumerMarkDeletePosition()
    {
        return $this->get(self::CONSUMER_MARK_DELETE_POSITION) !== null;
    }
}
}