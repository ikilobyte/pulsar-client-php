<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandConsumerStatsResponse message
 */
class CommandConsumerStatsResponse extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_ID = 1;
    const ERROR_CODE = 2;
    const ERROR_MESSAGE = 3;
    const MSGRATEOUT = 4;
    const MSGTHROUGHPUTOUT = 5;
    const MSGRATEREDELIVER = 6;
    const CONSUMERNAME = 7;
    const AVAILABLEPERMITS = 8;
    const UNACKEDMESSAGES = 9;
    const BLOCKEDCONSUMERONUNACKEDMSGS = 10;
    const ADDRESS = 11;
    const CONNECTEDSINCE = 12;
    const TYPE = 13;
    const MSGRATEEXPIRED = 14;
    const MSGBACKLOG = 15;
    const MESSAGEACKRATE = 16;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST_ID => array(
            'name' => 'request_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ERROR_CODE => array(
            'name' => 'error_code',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ERROR_MESSAGE => array(
            'name' => 'error_message',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MSGRATEOUT => array(
            'name' => 'msgRateOut',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_DOUBLE,
        ),
        self::MSGTHROUGHPUTOUT => array(
            'name' => 'msgThroughputOut',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_DOUBLE,
        ),
        self::MSGRATEREDELIVER => array(
            'name' => 'msgRateRedeliver',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_DOUBLE,
        ),
        self::CONSUMERNAME => array(
            'name' => 'consumerName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::AVAILABLEPERMITS => array(
            'name' => 'availablePermits',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UNACKEDMESSAGES => array(
            'name' => 'unackedMessages',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BLOCKEDCONSUMERONUNACKEDMSGS => array(
            'name' => 'blockedConsumerOnUnackedMsgs',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ADDRESS => array(
            'name' => 'address',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CONNECTEDSINCE => array(
            'name' => 'connectedSince',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MSGRATEEXPIRED => array(
            'name' => 'msgRateExpired',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_DOUBLE,
        ),
        self::MSGBACKLOG => array(
            'name' => 'msgBacklog',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MESSAGEACKRATE => array(
            'name' => 'messageAckRate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_DOUBLE,
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
        $this->values[self::ERROR_CODE] = null;
        $this->values[self::ERROR_MESSAGE] = null;
        $this->values[self::MSGRATEOUT] = null;
        $this->values[self::MSGTHROUGHPUTOUT] = null;
        $this->values[self::MSGRATEREDELIVER] = null;
        $this->values[self::CONSUMERNAME] = null;
        $this->values[self::AVAILABLEPERMITS] = null;
        $this->values[self::UNACKEDMESSAGES] = null;
        $this->values[self::BLOCKEDCONSUMERONUNACKEDMSGS] = null;
        $this->values[self::ADDRESS] = null;
        $this->values[self::CONNECTEDSINCE] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::MSGRATEEXPIRED] = null;
        $this->values[self::MSGBACKLOG] = null;
        $this->values[self::MESSAGEACKRATE] = null;
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
     * Sets value of 'error_code' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setErrorCode($value)
    {
        return $this->set(self::ERROR_CODE, $value);
    }

    /**
     * Returns value of 'error_code' property
     *
     * @return integer
     */
    public function getErrorCode()
    {
        $value = $this->get(self::ERROR_CODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'error_code' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasErrorCode()
    {
        return $this->get(self::ERROR_CODE) !== null;
    }

    /**
     * Sets value of 'error_message' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setErrorMessage($value)
    {
        return $this->set(self::ERROR_MESSAGE, $value);
    }

    /**
     * Returns value of 'error_message' property
     *
     * @return string
     */
    public function getErrorMessage()
    {
        $value = $this->get(self::ERROR_MESSAGE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'error_message' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasErrorMessage()
    {
        return $this->get(self::ERROR_MESSAGE) !== null;
    }

    /**
     * Sets value of 'msgRateOut' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setMsgRateOut($value)
    {
        return $this->set(self::MSGRATEOUT, $value);
    }

    /**
     * Returns value of 'msgRateOut' property
     *
     * @return double
     */
    public function getMsgRateOut()
    {
        $value = $this->get(self::MSGRATEOUT);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Returns true if 'msgRateOut' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgRateOut()
    {
        return $this->get(self::MSGRATEOUT) !== null;
    }

    /**
     * Sets value of 'msgThroughputOut' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setMsgThroughputOut($value)
    {
        return $this->set(self::MSGTHROUGHPUTOUT, $value);
    }

    /**
     * Returns value of 'msgThroughputOut' property
     *
     * @return double
     */
    public function getMsgThroughputOut()
    {
        $value = $this->get(self::MSGTHROUGHPUTOUT);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Returns true if 'msgThroughputOut' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgThroughputOut()
    {
        return $this->get(self::MSGTHROUGHPUTOUT) !== null;
    }

    /**
     * Sets value of 'msgRateRedeliver' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setMsgRateRedeliver($value)
    {
        return $this->set(self::MSGRATEREDELIVER, $value);
    }

    /**
     * Returns value of 'msgRateRedeliver' property
     *
     * @return double
     */
    public function getMsgRateRedeliver()
    {
        $value = $this->get(self::MSGRATEREDELIVER);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Returns true if 'msgRateRedeliver' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgRateRedeliver()
    {
        return $this->get(self::MSGRATEREDELIVER) !== null;
    }

    /**
     * Sets value of 'consumerName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setConsumerName($value)
    {
        return $this->set(self::CONSUMERNAME, $value);
    }

    /**
     * Returns value of 'consumerName' property
     *
     * @return string
     */
    public function getConsumerName()
    {
        $value = $this->get(self::CONSUMERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'consumerName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConsumerName()
    {
        return $this->get(self::CONSUMERNAME) !== null;
    }

    /**
     * Sets value of 'availablePermits' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAvailablePermits($value)
    {
        return $this->set(self::AVAILABLEPERMITS, $value);
    }

    /**
     * Returns value of 'availablePermits' property
     *
     * @return integer
     */
    public function getAvailablePermits()
    {
        $value = $this->get(self::AVAILABLEPERMITS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'availablePermits' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAvailablePermits()
    {
        return $this->get(self::AVAILABLEPERMITS) !== null;
    }

    /**
     * Sets value of 'unackedMessages' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUnackedMessages($value)
    {
        return $this->set(self::UNACKEDMESSAGES, $value);
    }

    /**
     * Returns value of 'unackedMessages' property
     *
     * @return integer
     */
    public function getUnackedMessages()
    {
        $value = $this->get(self::UNACKEDMESSAGES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'unackedMessages' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUnackedMessages()
    {
        return $this->get(self::UNACKEDMESSAGES) !== null;
    }

    /**
     * Sets value of 'blockedConsumerOnUnackedMsgs' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBlockedConsumerOnUnackedMsgs($value)
    {
        return $this->set(self::BLOCKEDCONSUMERONUNACKEDMSGS, $value);
    }

    /**
     * Returns value of 'blockedConsumerOnUnackedMsgs' property
     *
     * @return boolean
     */
    public function getBlockedConsumerOnUnackedMsgs()
    {
        $value = $this->get(self::BLOCKEDCONSUMERONUNACKEDMSGS);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'blockedConsumerOnUnackedMsgs' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBlockedConsumerOnUnackedMsgs()
    {
        return $this->get(self::BLOCKEDCONSUMERONUNACKEDMSGS) !== null;
    }

    /**
     * Sets value of 'address' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAddress($value)
    {
        return $this->set(self::ADDRESS, $value);
    }

    /**
     * Returns value of 'address' property
     *
     * @return string
     */
    public function getAddress()
    {
        $value = $this->get(self::ADDRESS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'address' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAddress()
    {
        return $this->get(self::ADDRESS) !== null;
    }

    /**
     * Sets value of 'connectedSince' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setConnectedSince($value)
    {
        return $this->set(self::CONNECTEDSINCE, $value);
    }

    /**
     * Returns value of 'connectedSince' property
     *
     * @return string
     */
    public function getConnectedSince()
    {
        $value = $this->get(self::CONNECTEDSINCE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'connectedSince' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConnectedSince()
    {
        return $this->get(self::CONNECTEDSINCE) !== null;
    }

    /**
     * Sets value of 'type' property
     *
     * @param string $value Property value
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
     * @return string
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'msgRateExpired' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setMsgRateExpired($value)
    {
        return $this->set(self::MSGRATEEXPIRED, $value);
    }

    /**
     * Returns value of 'msgRateExpired' property
     *
     * @return double
     */
    public function getMsgRateExpired()
    {
        $value = $this->get(self::MSGRATEEXPIRED);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Returns true if 'msgRateExpired' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgRateExpired()
    {
        return $this->get(self::MSGRATEEXPIRED) !== null;
    }

    /**
     * Sets value of 'msgBacklog' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMsgBacklog($value)
    {
        return $this->set(self::MSGBACKLOG, $value);
    }

    /**
     * Returns value of 'msgBacklog' property
     *
     * @return integer
     */
    public function getMsgBacklog()
    {
        $value = $this->get(self::MSGBACKLOG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'msgBacklog' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgBacklog()
    {
        return $this->get(self::MSGBACKLOG) !== null;
    }

    /**
     * Sets value of 'messageAckRate' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setMessageAckRate($value)
    {
        return $this->set(self::MESSAGEACKRATE, $value);
    }

    /**
     * Returns value of 'messageAckRate' property
     *
     * @return double
     */
    public function getMessageAckRate()
    {
        $value = $this->get(self::MESSAGEACKRATE);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Returns true if 'messageAckRate' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMessageAckRate()
    {
        return $this->get(self::MESSAGEACKRATE) !== null;
    }
}
}