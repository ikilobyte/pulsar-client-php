<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * BaseCommand message
 */
class BaseCommand extends \ProtobufMessage
{
    /* Field index constants */
    const TYPE = 1;
    const CONNECT = 2;
    const CONNECTED = 3;
    const SUBSCRIBE = 4;
    const PRODUCER = 5;
    const SEND = 6;
    const SEND_RECEIPT = 7;
    const SEND_ERROR = 8;
    const MESSAGE = 9;
    const ACK = 10;
    const FLOW = 11;
    const UNSUBSCRIBE = 12;
    const SUCCESS = 13;
    const ERROR = 14;
    const CLOSE_PRODUCER = 15;
    const CLOSE_CONSUMER = 16;
    const PRODUCER_SUCCESS = 17;
    const PING = 18;
    const PONG = 19;
    const REDELIVERUNACKNOWLEDGEDMESSAGES = 20;
    const PARTITIONMETADATA = 21;
    const PARTITIONMETADATARESPONSE = 22;
    const LOOKUPTOPIC = 23;
    const LOOKUPTOPICRESPONSE = 24;
    const CONSUMERSTATS = 25;
    const CONSUMERSTATSRESPONSE = 26;
    const REACHEDENDOFTOPIC = 27;
    const SEEK = 28;
    const GETLASTMESSAGEID = 29;
    const GETLASTMESSAGEIDRESPONSE = 30;
    const ACTIVE_CONSUMER_CHANGE = 31;
    const GETTOPICSOFNAMESPACE = 32;
    const GETTOPICSOFNAMESPACERESPONSE = 33;
    const GETSCHEMA = 34;
    const GETSCHEMARESPONSE = 35;
    const AUTHCHALLENGE = 36;
    const AUTHRESPONSE = 37;
    const ACKRESPONSE = 38;
    const GETORCREATESCHEMA = 39;
    const GETORCREATESCHEMARESPONSE = 40;
    const NEWTXN = 50;
    const NEWTXNRESPONSE = 51;
    const ADDPARTITIONTOTXN = 52;
    const ADDPARTITIONTOTXNRESPONSE = 53;
    const ADDSUBSCRIPTIONTOTXN = 54;
    const ADDSUBSCRIPTIONTOTXNRESPONSE = 55;
    const ENDTXN = 56;
    const ENDTXNRESPONSE = 57;
    const ENDTXNONPARTITION = 58;
    const ENDTXNONPARTITIONRESPONSE = 59;
    const ENDTXNONSUBSCRIPTION = 60;
    const ENDTXNONSUBSCRIPTIONRESPONSE = 61;
    const TCCLIENTCONNECTREQUEST = 62;
    const TCCLIENTCONNECTRESPONSE = 63;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TYPE => array(
            'name' => 'type',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONNECT => array(
            'name' => 'connect',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandConnect'
        ),
        self::CONNECTED => array(
            'name' => 'connected',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandConnected'
        ),
        self::SUBSCRIBE => array(
            'name' => 'subscribe',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandSubscribe'
        ),
        self::PRODUCER => array(
            'name' => 'producer',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandProducer'
        ),
        self::SEND => array(
            'name' => 'send',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandSend'
        ),
        self::SEND_RECEIPT => array(
            'name' => 'send_receipt',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandSendReceipt'
        ),
        self::SEND_ERROR => array(
            'name' => 'send_error',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandSendError'
        ),
        self::MESSAGE => array(
            'name' => 'message',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandMessage'
        ),
        self::ACK => array(
            'name' => 'ack',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandAck'
        ),
        self::FLOW => array(
            'name' => 'flow',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandFlow'
        ),
        self::UNSUBSCRIBE => array(
            'name' => 'unsubscribe',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandUnsubscribe'
        ),
        self::SUCCESS => array(
            'name' => 'success',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandSuccess'
        ),
        self::ERROR => array(
            'name' => 'error',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandError'
        ),
        self::CLOSE_PRODUCER => array(
            'name' => 'close_producer',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandCloseProducer'
        ),
        self::CLOSE_CONSUMER => array(
            'name' => 'close_consumer',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandCloseConsumer'
        ),
        self::PRODUCER_SUCCESS => array(
            'name' => 'producer_success',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandProducerSuccess'
        ),
        self::PING => array(
            'name' => 'ping',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandPing'
        ),
        self::PONG => array(
            'name' => 'pong',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandPong'
        ),
        self::REDELIVERUNACKNOWLEDGEDMESSAGES => array(
            'name' => 'redeliverUnacknowledgedMessages',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandRedeliverUnacknowledgedMessages'
        ),
        self::PARTITIONMETADATA => array(
            'name' => 'partitionMetadata',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandPartitionedTopicMetadata'
        ),
        self::PARTITIONMETADATARESPONSE => array(
            'name' => 'partitionMetadataResponse',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandPartitionedTopicMetadataResponse'
        ),
        self::LOOKUPTOPIC => array(
            'name' => 'lookupTopic',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandLookupTopic'
        ),
        self::LOOKUPTOPICRESPONSE => array(
            'name' => 'lookupTopicResponse',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandLookupTopicResponse'
        ),
        self::CONSUMERSTATS => array(
            'name' => 'consumerStats',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandConsumerStats'
        ),
        self::CONSUMERSTATSRESPONSE => array(
            'name' => 'consumerStatsResponse',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandConsumerStatsResponse'
        ),
        self::REACHEDENDOFTOPIC => array(
            'name' => 'reachedEndOfTopic',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandReachedEndOfTopic'
        ),
        self::SEEK => array(
            'name' => 'seek',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandSeek'
        ),
        self::GETLASTMESSAGEID => array(
            'name' => 'getLastMessageId',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandGetLastMessageId'
        ),
        self::GETLASTMESSAGEIDRESPONSE => array(
            'name' => 'getLastMessageIdResponse',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandGetLastMessageIdResponse'
        ),
        self::ACTIVE_CONSUMER_CHANGE => array(
            'name' => 'active_consumer_change',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandActiveConsumerChange'
        ),
        self::GETTOPICSOFNAMESPACE => array(
            'name' => 'getTopicsOfNamespace',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandGetTopicsOfNamespace'
        ),
        self::GETTOPICSOFNAMESPACERESPONSE => array(
            'name' => 'getTopicsOfNamespaceResponse',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandGetTopicsOfNamespaceResponse'
        ),
        self::GETSCHEMA => array(
            'name' => 'getSchema',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandGetSchema'
        ),
        self::GETSCHEMARESPONSE => array(
            'name' => 'getSchemaResponse',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandGetSchemaResponse'
        ),
        self::AUTHCHALLENGE => array(
            'name' => 'authChallenge',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandAuthChallenge'
        ),
        self::AUTHRESPONSE => array(
            'name' => 'authResponse',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandAuthResponse'
        ),
        self::ACKRESPONSE => array(
            'name' => 'ackResponse',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandAckResponse'
        ),
        self::GETORCREATESCHEMA => array(
            'name' => 'getOrCreateSchema',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandGetOrCreateSchema'
        ),
        self::GETORCREATESCHEMARESPONSE => array(
            'name' => 'getOrCreateSchemaResponse',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandGetOrCreateSchemaResponse'
        ),
        self::NEWTXN => array(
            'name' => 'newTxn',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandNewTxn'
        ),
        self::NEWTXNRESPONSE => array(
            'name' => 'newTxnResponse',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandNewTxnResponse'
        ),
        self::ADDPARTITIONTOTXN => array(
            'name' => 'addPartitionToTxn',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandAddPartitionToTxn'
        ),
        self::ADDPARTITIONTOTXNRESPONSE => array(
            'name' => 'addPartitionToTxnResponse',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandAddPartitionToTxnResponse'
        ),
        self::ADDSUBSCRIPTIONTOTXN => array(
            'name' => 'addSubscriptionToTxn',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandAddSubscriptionToTxn'
        ),
        self::ADDSUBSCRIPTIONTOTXNRESPONSE => array(
            'name' => 'addSubscriptionToTxnResponse',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandAddSubscriptionToTxnResponse'
        ),
        self::ENDTXN => array(
            'name' => 'endTxn',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandEndTxn'
        ),
        self::ENDTXNRESPONSE => array(
            'name' => 'endTxnResponse',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandEndTxnResponse'
        ),
        self::ENDTXNONPARTITION => array(
            'name' => 'endTxnOnPartition',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandEndTxnOnPartition'
        ),
        self::ENDTXNONPARTITIONRESPONSE => array(
            'name' => 'endTxnOnPartitionResponse',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandEndTxnOnPartitionResponse'
        ),
        self::ENDTXNONSUBSCRIPTION => array(
            'name' => 'endTxnOnSubscription',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandEndTxnOnSubscription'
        ),
        self::ENDTXNONSUBSCRIPTIONRESPONSE => array(
            'name' => 'endTxnOnSubscriptionResponse',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandEndTxnOnSubscriptionResponse'
        ),
        self::TCCLIENTCONNECTREQUEST => array(
            'name' => 'tcClientConnectRequest',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandTcClientConnectRequest'
        ),
        self::TCCLIENTCONNECTRESPONSE => array(
            'name' => 'tcClientConnectResponse',
            'required' => false,
            'type' => '\Pulsar\Proto\CommandTcClientConnectResponse'
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
        $this->values[self::TYPE] = null;
        $this->values[self::CONNECT] = null;
        $this->values[self::CONNECTED] = null;
        $this->values[self::SUBSCRIBE] = null;
        $this->values[self::PRODUCER] = null;
        $this->values[self::SEND] = null;
        $this->values[self::SEND_RECEIPT] = null;
        $this->values[self::SEND_ERROR] = null;
        $this->values[self::MESSAGE] = null;
        $this->values[self::ACK] = null;
        $this->values[self::FLOW] = null;
        $this->values[self::UNSUBSCRIBE] = null;
        $this->values[self::SUCCESS] = null;
        $this->values[self::ERROR] = null;
        $this->values[self::CLOSE_PRODUCER] = null;
        $this->values[self::CLOSE_CONSUMER] = null;
        $this->values[self::PRODUCER_SUCCESS] = null;
        $this->values[self::PING] = null;
        $this->values[self::PONG] = null;
        $this->values[self::REDELIVERUNACKNOWLEDGEDMESSAGES] = null;
        $this->values[self::PARTITIONMETADATA] = null;
        $this->values[self::PARTITIONMETADATARESPONSE] = null;
        $this->values[self::LOOKUPTOPIC] = null;
        $this->values[self::LOOKUPTOPICRESPONSE] = null;
        $this->values[self::CONSUMERSTATS] = null;
        $this->values[self::CONSUMERSTATSRESPONSE] = null;
        $this->values[self::REACHEDENDOFTOPIC] = null;
        $this->values[self::SEEK] = null;
        $this->values[self::GETLASTMESSAGEID] = null;
        $this->values[self::GETLASTMESSAGEIDRESPONSE] = null;
        $this->values[self::ACTIVE_CONSUMER_CHANGE] = null;
        $this->values[self::GETTOPICSOFNAMESPACE] = null;
        $this->values[self::GETTOPICSOFNAMESPACERESPONSE] = null;
        $this->values[self::GETSCHEMA] = null;
        $this->values[self::GETSCHEMARESPONSE] = null;
        $this->values[self::AUTHCHALLENGE] = null;
        $this->values[self::AUTHRESPONSE] = null;
        $this->values[self::ACKRESPONSE] = null;
        $this->values[self::GETORCREATESCHEMA] = null;
        $this->values[self::GETORCREATESCHEMARESPONSE] = null;
        $this->values[self::NEWTXN] = null;
        $this->values[self::NEWTXNRESPONSE] = null;
        $this->values[self::ADDPARTITIONTOTXN] = null;
        $this->values[self::ADDPARTITIONTOTXNRESPONSE] = null;
        $this->values[self::ADDSUBSCRIPTIONTOTXN] = null;
        $this->values[self::ADDSUBSCRIPTIONTOTXNRESPONSE] = null;
        $this->values[self::ENDTXN] = null;
        $this->values[self::ENDTXNRESPONSE] = null;
        $this->values[self::ENDTXNONPARTITION] = null;
        $this->values[self::ENDTXNONPARTITIONRESPONSE] = null;
        $this->values[self::ENDTXNONSUBSCRIPTION] = null;
        $this->values[self::ENDTXNONSUBSCRIPTIONRESPONSE] = null;
        $this->values[self::TCCLIENTCONNECTREQUEST] = null;
        $this->values[self::TCCLIENTCONNECTRESPONSE] = null;
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
     * Sets value of 'connect' property
     *
     * @param \Pulsar\Proto\CommandConnect $value Property value
     *
     * @return null
     */
    public function setConnect(\Pulsar\Proto\CommandConnect $value=null)
    {
        return $this->set(self::CONNECT, $value);
    }

    /**
     * Returns value of 'connect' property
     *
     * @return \Pulsar\Proto\CommandConnect
     */
    public function getConnect()
    {
        return $this->get(self::CONNECT);
    }

    /**
     * Returns true if 'connect' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConnect()
    {
        return $this->get(self::CONNECT) !== null;
    }

    /**
     * Sets value of 'connected' property
     *
     * @param \Pulsar\Proto\CommandConnected $value Property value
     *
     * @return null
     */
    public function setConnected(\Pulsar\Proto\CommandConnected $value=null)
    {
        return $this->set(self::CONNECTED, $value);
    }

    /**
     * Returns value of 'connected' property
     *
     * @return \Pulsar\Proto\CommandConnected
     */
    public function getConnected()
    {
        return $this->get(self::CONNECTED);
    }

    /**
     * Returns true if 'connected' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConnected()
    {
        return $this->get(self::CONNECTED) !== null;
    }

    /**
     * Sets value of 'subscribe' property
     *
     * @param \Pulsar\Proto\CommandSubscribe $value Property value
     *
     * @return null
     */
    public function setSubscribe(\Pulsar\Proto\CommandSubscribe $value=null)
    {
        return $this->set(self::SUBSCRIBE, $value);
    }

    /**
     * Returns value of 'subscribe' property
     *
     * @return \Pulsar\Proto\CommandSubscribe
     */
    public function getSubscribe()
    {
        return $this->get(self::SUBSCRIBE);
    }

    /**
     * Returns true if 'subscribe' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSubscribe()
    {
        return $this->get(self::SUBSCRIBE) !== null;
    }

    /**
     * Sets value of 'producer' property
     *
     * @param \Pulsar\Proto\CommandProducer $value Property value
     *
     * @return null
     */
    public function setProducer(\Pulsar\Proto\CommandProducer $value=null)
    {
        return $this->set(self::PRODUCER, $value);
    }

    /**
     * Returns value of 'producer' property
     *
     * @return \Pulsar\Proto\CommandProducer
     */
    public function getProducer()
    {
        return $this->get(self::PRODUCER);
    }

    /**
     * Returns true if 'producer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProducer()
    {
        return $this->get(self::PRODUCER) !== null;
    }

    /**
     * Sets value of 'send' property
     *
     * @param \Pulsar\Proto\CommandSend $value Property value
     *
     * @return null
     */
    public function setSend(\Pulsar\Proto\CommandSend $value=null)
    {
        return $this->set(self::SEND, $value);
    }

    /**
     * Returns value of 'send' property
     *
     * @return \Pulsar\Proto\CommandSend
     */
    public function getSend()
    {
        return $this->get(self::SEND);
    }

    /**
     * Returns true if 'send' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSend()
    {
        return $this->get(self::SEND) !== null;
    }

    /**
     * Sets value of 'send_receipt' property
     *
     * @param \Pulsar\Proto\CommandSendReceipt $value Property value
     *
     * @return null
     */
    public function setSendReceipt(\Pulsar\Proto\CommandSendReceipt $value=null)
    {
        return $this->set(self::SEND_RECEIPT, $value);
    }

    /**
     * Returns value of 'send_receipt' property
     *
     * @return \Pulsar\Proto\CommandSendReceipt
     */
    public function getSendReceipt()
    {
        return $this->get(self::SEND_RECEIPT);
    }

    /**
     * Returns true if 'send_receipt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSendReceipt()
    {
        return $this->get(self::SEND_RECEIPT) !== null;
    }

    /**
     * Sets value of 'send_error' property
     *
     * @param \Pulsar\Proto\CommandSendError $value Property value
     *
     * @return null
     */
    public function setSendError(\Pulsar\Proto\CommandSendError $value=null)
    {
        return $this->set(self::SEND_ERROR, $value);
    }

    /**
     * Returns value of 'send_error' property
     *
     * @return \Pulsar\Proto\CommandSendError
     */
    public function getSendError()
    {
        return $this->get(self::SEND_ERROR);
    }

    /**
     * Returns true if 'send_error' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSendError()
    {
        return $this->get(self::SEND_ERROR) !== null;
    }

    /**
     * Sets value of 'message' property
     *
     * @param \Pulsar\Proto\CommandMessage $value Property value
     *
     * @return null
     */
    public function setMessage(\Pulsar\Proto\CommandMessage $value=null)
    {
        return $this->set(self::MESSAGE, $value);
    }

    /**
     * Returns value of 'message' property
     *
     * @return \Pulsar\Proto\CommandMessage
     */
    public function getMessage()
    {
        return $this->get(self::MESSAGE);
    }

    /**
     * Returns true if 'message' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMessage()
    {
        return $this->get(self::MESSAGE) !== null;
    }

    /**
     * Sets value of 'ack' property
     *
     * @param \Pulsar\Proto\CommandAck $value Property value
     *
     * @return null
     */
    public function setAck(\Pulsar\Proto\CommandAck $value=null)
    {
        return $this->set(self::ACK, $value);
    }

    /**
     * Returns value of 'ack' property
     *
     * @return \Pulsar\Proto\CommandAck
     */
    public function getAck()
    {
        return $this->get(self::ACK);
    }

    /**
     * Returns true if 'ack' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAck()
    {
        return $this->get(self::ACK) !== null;
    }

    /**
     * Sets value of 'flow' property
     *
     * @param \Pulsar\Proto\CommandFlow $value Property value
     *
     * @return null
     */
    public function setFlow(\Pulsar\Proto\CommandFlow $value=null)
    {
        return $this->set(self::FLOW, $value);
    }

    /**
     * Returns value of 'flow' property
     *
     * @return \Pulsar\Proto\CommandFlow
     */
    public function getFlow()
    {
        return $this->get(self::FLOW);
    }

    /**
     * Returns true if 'flow' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFlow()
    {
        return $this->get(self::FLOW) !== null;
    }

    /**
     * Sets value of 'unsubscribe' property
     *
     * @param \Pulsar\Proto\CommandUnsubscribe $value Property value
     *
     * @return null
     */
    public function setUnsubscribe(\Pulsar\Proto\CommandUnsubscribe $value=null)
    {
        return $this->set(self::UNSUBSCRIBE, $value);
    }

    /**
     * Returns value of 'unsubscribe' property
     *
     * @return \Pulsar\Proto\CommandUnsubscribe
     */
    public function getUnsubscribe()
    {
        return $this->get(self::UNSUBSCRIBE);
    }

    /**
     * Returns true if 'unsubscribe' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUnsubscribe()
    {
        return $this->get(self::UNSUBSCRIBE) !== null;
    }

    /**
     * Sets value of 'success' property
     *
     * @param \Pulsar\Proto\CommandSuccess $value Property value
     *
     * @return null
     */
    public function setSuccess(\Pulsar\Proto\CommandSuccess $value=null)
    {
        return $this->set(self::SUCCESS, $value);
    }

    /**
     * Returns value of 'success' property
     *
     * @return \Pulsar\Proto\CommandSuccess
     */
    public function getSuccess()
    {
        return $this->get(self::SUCCESS);
    }

    /**
     * Returns true if 'success' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSuccess()
    {
        return $this->get(self::SUCCESS) !== null;
    }

    /**
     * Sets value of 'error' property
     *
     * @param \Pulsar\Proto\CommandError $value Property value
     *
     * @return null
     */
    public function setError(\Pulsar\Proto\CommandError $value=null)
    {
        return $this->set(self::ERROR, $value);
    }

    /**
     * Returns value of 'error' property
     *
     * @return \Pulsar\Proto\CommandError
     */
    public function getError()
    {
        return $this->get(self::ERROR);
    }

    /**
     * Returns true if 'error' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasError()
    {
        return $this->get(self::ERROR) !== null;
    }

    /**
     * Sets value of 'close_producer' property
     *
     * @param \Pulsar\Proto\CommandCloseProducer $value Property value
     *
     * @return null
     */
    public function setCloseProducer(\Pulsar\Proto\CommandCloseProducer $value=null)
    {
        return $this->set(self::CLOSE_PRODUCER, $value);
    }

    /**
     * Returns value of 'close_producer' property
     *
     * @return \Pulsar\Proto\CommandCloseProducer
     */
    public function getCloseProducer()
    {
        return $this->get(self::CLOSE_PRODUCER);
    }

    /**
     * Returns true if 'close_producer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCloseProducer()
    {
        return $this->get(self::CLOSE_PRODUCER) !== null;
    }

    /**
     * Sets value of 'close_consumer' property
     *
     * @param \Pulsar\Proto\CommandCloseConsumer $value Property value
     *
     * @return null
     */
    public function setCloseConsumer(\Pulsar\Proto\CommandCloseConsumer $value=null)
    {
        return $this->set(self::CLOSE_CONSUMER, $value);
    }

    /**
     * Returns value of 'close_consumer' property
     *
     * @return \Pulsar\Proto\CommandCloseConsumer
     */
    public function getCloseConsumer()
    {
        return $this->get(self::CLOSE_CONSUMER);
    }

    /**
     * Returns true if 'close_consumer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCloseConsumer()
    {
        return $this->get(self::CLOSE_CONSUMER) !== null;
    }

    /**
     * Sets value of 'producer_success' property
     *
     * @param \Pulsar\Proto\CommandProducerSuccess $value Property value
     *
     * @return null
     */
    public function setProducerSuccess(\Pulsar\Proto\CommandProducerSuccess $value=null)
    {
        return $this->set(self::PRODUCER_SUCCESS, $value);
    }

    /**
     * Returns value of 'producer_success' property
     *
     * @return \Pulsar\Proto\CommandProducerSuccess
     */
    public function getProducerSuccess()
    {
        return $this->get(self::PRODUCER_SUCCESS);
    }

    /**
     * Returns true if 'producer_success' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProducerSuccess()
    {
        return $this->get(self::PRODUCER_SUCCESS) !== null;
    }

    /**
     * Sets value of 'ping' property
     *
     * @param \Pulsar\Proto\CommandPing $value Property value
     *
     * @return null
     */
    public function setPing(\Pulsar\Proto\CommandPing $value=null)
    {
        return $this->set(self::PING, $value);
    }

    /**
     * Returns value of 'ping' property
     *
     * @return \Pulsar\Proto\CommandPing
     */
    public function getPing()
    {
        return $this->get(self::PING);
    }

    /**
     * Returns true if 'ping' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPing()
    {
        return $this->get(self::PING) !== null;
    }

    /**
     * Sets value of 'pong' property
     *
     * @param \Pulsar\Proto\CommandPong $value Property value
     *
     * @return null
     */
    public function setPong(\Pulsar\Proto\CommandPong $value=null)
    {
        return $this->set(self::PONG, $value);
    }

    /**
     * Returns value of 'pong' property
     *
     * @return \Pulsar\Proto\CommandPong
     */
    public function getPong()
    {
        return $this->get(self::PONG);
    }

    /**
     * Returns true if 'pong' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPong()
    {
        return $this->get(self::PONG) !== null;
    }

    /**
     * Sets value of 'redeliverUnacknowledgedMessages' property
     *
     * @param \Pulsar\Proto\CommandRedeliverUnacknowledgedMessages $value Property value
     *
     * @return null
     */
    public function setRedeliverUnacknowledgedMessages(\Pulsar\Proto\CommandRedeliverUnacknowledgedMessages $value=null)
    {
        return $this->set(self::REDELIVERUNACKNOWLEDGEDMESSAGES, $value);
    }

    /**
     * Returns value of 'redeliverUnacknowledgedMessages' property
     *
     * @return \Pulsar\Proto\CommandRedeliverUnacknowledgedMessages
     */
    public function getRedeliverUnacknowledgedMessages()
    {
        return $this->get(self::REDELIVERUNACKNOWLEDGEDMESSAGES);
    }

    /**
     * Returns true if 'redeliverUnacknowledgedMessages' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRedeliverUnacknowledgedMessages()
    {
        return $this->get(self::REDELIVERUNACKNOWLEDGEDMESSAGES) !== null;
    }

    /**
     * Sets value of 'partitionMetadata' property
     *
     * @param \Pulsar\Proto\CommandPartitionedTopicMetadata $value Property value
     *
     * @return null
     */
    public function setPartitionMetadata(\Pulsar\Proto\CommandPartitionedTopicMetadata $value=null)
    {
        return $this->set(self::PARTITIONMETADATA, $value);
    }

    /**
     * Returns value of 'partitionMetadata' property
     *
     * @return \Pulsar\Proto\CommandPartitionedTopicMetadata
     */
    public function getPartitionMetadata()
    {
        return $this->get(self::PARTITIONMETADATA);
    }

    /**
     * Returns true if 'partitionMetadata' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPartitionMetadata()
    {
        return $this->get(self::PARTITIONMETADATA) !== null;
    }

    /**
     * Sets value of 'partitionMetadataResponse' property
     *
     * @param \Pulsar\Proto\CommandPartitionedTopicMetadataResponse $value Property value
     *
     * @return null
     */
    public function setPartitionMetadataResponse(\Pulsar\Proto\CommandPartitionedTopicMetadataResponse $value=null)
    {
        return $this->set(self::PARTITIONMETADATARESPONSE, $value);
    }

    /**
     * Returns value of 'partitionMetadataResponse' property
     *
     * @return \Pulsar\Proto\CommandPartitionedTopicMetadataResponse
     */
    public function getPartitionMetadataResponse()
    {
        return $this->get(self::PARTITIONMETADATARESPONSE);
    }

    /**
     * Returns true if 'partitionMetadataResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPartitionMetadataResponse()
    {
        return $this->get(self::PARTITIONMETADATARESPONSE) !== null;
    }

    /**
     * Sets value of 'lookupTopic' property
     *
     * @param \Pulsar\Proto\CommandLookupTopic $value Property value
     *
     * @return null
     */
    public function setLookupTopic(\Pulsar\Proto\CommandLookupTopic $value=null)
    {
        return $this->set(self::LOOKUPTOPIC, $value);
    }

    /**
     * Returns value of 'lookupTopic' property
     *
     * @return \Pulsar\Proto\CommandLookupTopic
     */
    public function getLookupTopic()
    {
        return $this->get(self::LOOKUPTOPIC);
    }

    /**
     * Returns true if 'lookupTopic' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLookupTopic()
    {
        return $this->get(self::LOOKUPTOPIC) !== null;
    }

    /**
     * Sets value of 'lookupTopicResponse' property
     *
     * @param \Pulsar\Proto\CommandLookupTopicResponse $value Property value
     *
     * @return null
     */
    public function setLookupTopicResponse(\Pulsar\Proto\CommandLookupTopicResponse $value=null)
    {
        return $this->set(self::LOOKUPTOPICRESPONSE, $value);
    }

    /**
     * Returns value of 'lookupTopicResponse' property
     *
     * @return \Pulsar\Proto\CommandLookupTopicResponse
     */
    public function getLookupTopicResponse()
    {
        return $this->get(self::LOOKUPTOPICRESPONSE);
    }

    /**
     * Returns true if 'lookupTopicResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLookupTopicResponse()
    {
        return $this->get(self::LOOKUPTOPICRESPONSE) !== null;
    }

    /**
     * Sets value of 'consumerStats' property
     *
     * @param \Pulsar\Proto\CommandConsumerStats $value Property value
     *
     * @return null
     */
    public function setConsumerStats(\Pulsar\Proto\CommandConsumerStats $value=null)
    {
        return $this->set(self::CONSUMERSTATS, $value);
    }

    /**
     * Returns value of 'consumerStats' property
     *
     * @return \Pulsar\Proto\CommandConsumerStats
     */
    public function getConsumerStats()
    {
        return $this->get(self::CONSUMERSTATS);
    }

    /**
     * Returns true if 'consumerStats' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConsumerStats()
    {
        return $this->get(self::CONSUMERSTATS) !== null;
    }

    /**
     * Sets value of 'consumerStatsResponse' property
     *
     * @param \Pulsar\Proto\CommandConsumerStatsResponse $value Property value
     *
     * @return null
     */
    public function setConsumerStatsResponse(\Pulsar\Proto\CommandConsumerStatsResponse $value=null)
    {
        return $this->set(self::CONSUMERSTATSRESPONSE, $value);
    }

    /**
     * Returns value of 'consumerStatsResponse' property
     *
     * @return \Pulsar\Proto\CommandConsumerStatsResponse
     */
    public function getConsumerStatsResponse()
    {
        return $this->get(self::CONSUMERSTATSRESPONSE);
    }

    /**
     * Returns true if 'consumerStatsResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConsumerStatsResponse()
    {
        return $this->get(self::CONSUMERSTATSRESPONSE) !== null;
    }

    /**
     * Sets value of 'reachedEndOfTopic' property
     *
     * @param \Pulsar\Proto\CommandReachedEndOfTopic $value Property value
     *
     * @return null
     */
    public function setReachedEndOfTopic(\Pulsar\Proto\CommandReachedEndOfTopic $value=null)
    {
        return $this->set(self::REACHEDENDOFTOPIC, $value);
    }

    /**
     * Returns value of 'reachedEndOfTopic' property
     *
     * @return \Pulsar\Proto\CommandReachedEndOfTopic
     */
    public function getReachedEndOfTopic()
    {
        return $this->get(self::REACHEDENDOFTOPIC);
    }

    /**
     * Returns true if 'reachedEndOfTopic' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReachedEndOfTopic()
    {
        return $this->get(self::REACHEDENDOFTOPIC) !== null;
    }

    /**
     * Sets value of 'seek' property
     *
     * @param \Pulsar\Proto\CommandSeek $value Property value
     *
     * @return null
     */
    public function setSeek(\Pulsar\Proto\CommandSeek $value=null)
    {
        return $this->set(self::SEEK, $value);
    }

    /**
     * Returns value of 'seek' property
     *
     * @return \Pulsar\Proto\CommandSeek
     */
    public function getSeek()
    {
        return $this->get(self::SEEK);
    }

    /**
     * Returns true if 'seek' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSeek()
    {
        return $this->get(self::SEEK) !== null;
    }

    /**
     * Sets value of 'getLastMessageId' property
     *
     * @param \Pulsar\Proto\CommandGetLastMessageId $value Property value
     *
     * @return null
     */
    public function setGetLastMessageId(\Pulsar\Proto\CommandGetLastMessageId $value=null)
    {
        return $this->set(self::GETLASTMESSAGEID, $value);
    }

    /**
     * Returns value of 'getLastMessageId' property
     *
     * @return \Pulsar\Proto\CommandGetLastMessageId
     */
    public function getGetLastMessageId()
    {
        return $this->get(self::GETLASTMESSAGEID);
    }

    /**
     * Returns true if 'getLastMessageId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGetLastMessageId()
    {
        return $this->get(self::GETLASTMESSAGEID) !== null;
    }

    /**
     * Sets value of 'getLastMessageIdResponse' property
     *
     * @param \Pulsar\Proto\CommandGetLastMessageIdResponse $value Property value
     *
     * @return null
     */
    public function setGetLastMessageIdResponse(\Pulsar\Proto\CommandGetLastMessageIdResponse $value=null)
    {
        return $this->set(self::GETLASTMESSAGEIDRESPONSE, $value);
    }

    /**
     * Returns value of 'getLastMessageIdResponse' property
     *
     * @return \Pulsar\Proto\CommandGetLastMessageIdResponse
     */
    public function getGetLastMessageIdResponse()
    {
        return $this->get(self::GETLASTMESSAGEIDRESPONSE);
    }

    /**
     * Returns true if 'getLastMessageIdResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGetLastMessageIdResponse()
    {
        return $this->get(self::GETLASTMESSAGEIDRESPONSE) !== null;
    }

    /**
     * Sets value of 'active_consumer_change' property
     *
     * @param \Pulsar\Proto\CommandActiveConsumerChange $value Property value
     *
     * @return null
     */
    public function setActiveConsumerChange(\Pulsar\Proto\CommandActiveConsumerChange $value=null)
    {
        return $this->set(self::ACTIVE_CONSUMER_CHANGE, $value);
    }

    /**
     * Returns value of 'active_consumer_change' property
     *
     * @return \Pulsar\Proto\CommandActiveConsumerChange
     */
    public function getActiveConsumerChange()
    {
        return $this->get(self::ACTIVE_CONSUMER_CHANGE);
    }

    /**
     * Returns true if 'active_consumer_change' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasActiveConsumerChange()
    {
        return $this->get(self::ACTIVE_CONSUMER_CHANGE) !== null;
    }

    /**
     * Sets value of 'getTopicsOfNamespace' property
     *
     * @param \Pulsar\Proto\CommandGetTopicsOfNamespace $value Property value
     *
     * @return null
     */
    public function setGetTopicsOfNamespace(\Pulsar\Proto\CommandGetTopicsOfNamespace $value=null)
    {
        return $this->set(self::GETTOPICSOFNAMESPACE, $value);
    }

    /**
     * Returns value of 'getTopicsOfNamespace' property
     *
     * @return \Pulsar\Proto\CommandGetTopicsOfNamespace
     */
    public function getGetTopicsOfNamespace()
    {
        return $this->get(self::GETTOPICSOFNAMESPACE);
    }

    /**
     * Returns true if 'getTopicsOfNamespace' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGetTopicsOfNamespace()
    {
        return $this->get(self::GETTOPICSOFNAMESPACE) !== null;
    }

    /**
     * Sets value of 'getTopicsOfNamespaceResponse' property
     *
     * @param \Pulsar\Proto\CommandGetTopicsOfNamespaceResponse $value Property value
     *
     * @return null
     */
    public function setGetTopicsOfNamespaceResponse(\Pulsar\Proto\CommandGetTopicsOfNamespaceResponse $value=null)
    {
        return $this->set(self::GETTOPICSOFNAMESPACERESPONSE, $value);
    }

    /**
     * Returns value of 'getTopicsOfNamespaceResponse' property
     *
     * @return \Pulsar\Proto\CommandGetTopicsOfNamespaceResponse
     */
    public function getGetTopicsOfNamespaceResponse()
    {
        return $this->get(self::GETTOPICSOFNAMESPACERESPONSE);
    }

    /**
     * Returns true if 'getTopicsOfNamespaceResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGetTopicsOfNamespaceResponse()
    {
        return $this->get(self::GETTOPICSOFNAMESPACERESPONSE) !== null;
    }

    /**
     * Sets value of 'getSchema' property
     *
     * @param \Pulsar\Proto\CommandGetSchema $value Property value
     *
     * @return null
     */
    public function setGetSchema(\Pulsar\Proto\CommandGetSchema $value=null)
    {
        return $this->set(self::GETSCHEMA, $value);
    }

    /**
     * Returns value of 'getSchema' property
     *
     * @return \Pulsar\Proto\CommandGetSchema
     */
    public function getGetSchema()
    {
        return $this->get(self::GETSCHEMA);
    }

    /**
     * Returns true if 'getSchema' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGetSchema()
    {
        return $this->get(self::GETSCHEMA) !== null;
    }

    /**
     * Sets value of 'getSchemaResponse' property
     *
     * @param \Pulsar\Proto\CommandGetSchemaResponse $value Property value
     *
     * @return null
     */
    public function setGetSchemaResponse(\Pulsar\Proto\CommandGetSchemaResponse $value=null)
    {
        return $this->set(self::GETSCHEMARESPONSE, $value);
    }

    /**
     * Returns value of 'getSchemaResponse' property
     *
     * @return \Pulsar\Proto\CommandGetSchemaResponse
     */
    public function getGetSchemaResponse()
    {
        return $this->get(self::GETSCHEMARESPONSE);
    }

    /**
     * Returns true if 'getSchemaResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGetSchemaResponse()
    {
        return $this->get(self::GETSCHEMARESPONSE) !== null;
    }

    /**
     * Sets value of 'authChallenge' property
     *
     * @param \Pulsar\Proto\CommandAuthChallenge $value Property value
     *
     * @return null
     */
    public function setAuthChallenge(\Pulsar\Proto\CommandAuthChallenge $value=null)
    {
        return $this->set(self::AUTHCHALLENGE, $value);
    }

    /**
     * Returns value of 'authChallenge' property
     *
     * @return \Pulsar\Proto\CommandAuthChallenge
     */
    public function getAuthChallenge()
    {
        return $this->get(self::AUTHCHALLENGE);
    }

    /**
     * Returns true if 'authChallenge' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAuthChallenge()
    {
        return $this->get(self::AUTHCHALLENGE) !== null;
    }

    /**
     * Sets value of 'authResponse' property
     *
     * @param \Pulsar\Proto\CommandAuthResponse $value Property value
     *
     * @return null
     */
    public function setAuthResponse(\Pulsar\Proto\CommandAuthResponse $value=null)
    {
        return $this->set(self::AUTHRESPONSE, $value);
    }

    /**
     * Returns value of 'authResponse' property
     *
     * @return \Pulsar\Proto\CommandAuthResponse
     */
    public function getAuthResponse()
    {
        return $this->get(self::AUTHRESPONSE);
    }

    /**
     * Returns true if 'authResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAuthResponse()
    {
        return $this->get(self::AUTHRESPONSE) !== null;
    }

    /**
     * Sets value of 'ackResponse' property
     *
     * @param \Pulsar\Proto\CommandAckResponse $value Property value
     *
     * @return null
     */
    public function setAckResponse(\Pulsar\Proto\CommandAckResponse $value=null)
    {
        return $this->set(self::ACKRESPONSE, $value);
    }

    /**
     * Returns value of 'ackResponse' property
     *
     * @return \Pulsar\Proto\CommandAckResponse
     */
    public function getAckResponse()
    {
        return $this->get(self::ACKRESPONSE);
    }

    /**
     * Returns true if 'ackResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAckResponse()
    {
        return $this->get(self::ACKRESPONSE) !== null;
    }

    /**
     * Sets value of 'getOrCreateSchema' property
     *
     * @param \Pulsar\Proto\CommandGetOrCreateSchema $value Property value
     *
     * @return null
     */
    public function setGetOrCreateSchema(\Pulsar\Proto\CommandGetOrCreateSchema $value=null)
    {
        return $this->set(self::GETORCREATESCHEMA, $value);
    }

    /**
     * Returns value of 'getOrCreateSchema' property
     *
     * @return \Pulsar\Proto\CommandGetOrCreateSchema
     */
    public function getGetOrCreateSchema()
    {
        return $this->get(self::GETORCREATESCHEMA);
    }

    /**
     * Returns true if 'getOrCreateSchema' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGetOrCreateSchema()
    {
        return $this->get(self::GETORCREATESCHEMA) !== null;
    }

    /**
     * Sets value of 'getOrCreateSchemaResponse' property
     *
     * @param \Pulsar\Proto\CommandGetOrCreateSchemaResponse $value Property value
     *
     * @return null
     */
    public function setGetOrCreateSchemaResponse(\Pulsar\Proto\CommandGetOrCreateSchemaResponse $value=null)
    {
        return $this->set(self::GETORCREATESCHEMARESPONSE, $value);
    }

    /**
     * Returns value of 'getOrCreateSchemaResponse' property
     *
     * @return \Pulsar\Proto\CommandGetOrCreateSchemaResponse
     */
    public function getGetOrCreateSchemaResponse()
    {
        return $this->get(self::GETORCREATESCHEMARESPONSE);
    }

    /**
     * Returns true if 'getOrCreateSchemaResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGetOrCreateSchemaResponse()
    {
        return $this->get(self::GETORCREATESCHEMARESPONSE) !== null;
    }

    /**
     * Sets value of 'newTxn' property
     *
     * @param \Pulsar\Proto\CommandNewTxn $value Property value
     *
     * @return null
     */
    public function setNewTxn(\Pulsar\Proto\CommandNewTxn $value=null)
    {
        return $this->set(self::NEWTXN, $value);
    }

    /**
     * Returns value of 'newTxn' property
     *
     * @return \Pulsar\Proto\CommandNewTxn
     */
    public function getNewTxn()
    {
        return $this->get(self::NEWTXN);
    }

    /**
     * Returns true if 'newTxn' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewTxn()
    {
        return $this->get(self::NEWTXN) !== null;
    }

    /**
     * Sets value of 'newTxnResponse' property
     *
     * @param \Pulsar\Proto\CommandNewTxnResponse $value Property value
     *
     * @return null
     */
    public function setNewTxnResponse(\Pulsar\Proto\CommandNewTxnResponse $value=null)
    {
        return $this->set(self::NEWTXNRESPONSE, $value);
    }

    /**
     * Returns value of 'newTxnResponse' property
     *
     * @return \Pulsar\Proto\CommandNewTxnResponse
     */
    public function getNewTxnResponse()
    {
        return $this->get(self::NEWTXNRESPONSE);
    }

    /**
     * Returns true if 'newTxnResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewTxnResponse()
    {
        return $this->get(self::NEWTXNRESPONSE) !== null;
    }

    /**
     * Sets value of 'addPartitionToTxn' property
     *
     * @param \Pulsar\Proto\CommandAddPartitionToTxn $value Property value
     *
     * @return null
     */
    public function setAddPartitionToTxn(\Pulsar\Proto\CommandAddPartitionToTxn $value=null)
    {
        return $this->set(self::ADDPARTITIONTOTXN, $value);
    }

    /**
     * Returns value of 'addPartitionToTxn' property
     *
     * @return \Pulsar\Proto\CommandAddPartitionToTxn
     */
    public function getAddPartitionToTxn()
    {
        return $this->get(self::ADDPARTITIONTOTXN);
    }

    /**
     * Returns true if 'addPartitionToTxn' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAddPartitionToTxn()
    {
        return $this->get(self::ADDPARTITIONTOTXN) !== null;
    }

    /**
     * Sets value of 'addPartitionToTxnResponse' property
     *
     * @param \Pulsar\Proto\CommandAddPartitionToTxnResponse $value Property value
     *
     * @return null
     */
    public function setAddPartitionToTxnResponse(\Pulsar\Proto\CommandAddPartitionToTxnResponse $value=null)
    {
        return $this->set(self::ADDPARTITIONTOTXNRESPONSE, $value);
    }

    /**
     * Returns value of 'addPartitionToTxnResponse' property
     *
     * @return \Pulsar\Proto\CommandAddPartitionToTxnResponse
     */
    public function getAddPartitionToTxnResponse()
    {
        return $this->get(self::ADDPARTITIONTOTXNRESPONSE);
    }

    /**
     * Returns true if 'addPartitionToTxnResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAddPartitionToTxnResponse()
    {
        return $this->get(self::ADDPARTITIONTOTXNRESPONSE) !== null;
    }

    /**
     * Sets value of 'addSubscriptionToTxn' property
     *
     * @param \Pulsar\Proto\CommandAddSubscriptionToTxn $value Property value
     *
     * @return null
     */
    public function setAddSubscriptionToTxn(\Pulsar\Proto\CommandAddSubscriptionToTxn $value=null)
    {
        return $this->set(self::ADDSUBSCRIPTIONTOTXN, $value);
    }

    /**
     * Returns value of 'addSubscriptionToTxn' property
     *
     * @return \Pulsar\Proto\CommandAddSubscriptionToTxn
     */
    public function getAddSubscriptionToTxn()
    {
        return $this->get(self::ADDSUBSCRIPTIONTOTXN);
    }

    /**
     * Returns true if 'addSubscriptionToTxn' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAddSubscriptionToTxn()
    {
        return $this->get(self::ADDSUBSCRIPTIONTOTXN) !== null;
    }

    /**
     * Sets value of 'addSubscriptionToTxnResponse' property
     *
     * @param \Pulsar\Proto\CommandAddSubscriptionToTxnResponse $value Property value
     *
     * @return null
     */
    public function setAddSubscriptionToTxnResponse(\Pulsar\Proto\CommandAddSubscriptionToTxnResponse $value=null)
    {
        return $this->set(self::ADDSUBSCRIPTIONTOTXNRESPONSE, $value);
    }

    /**
     * Returns value of 'addSubscriptionToTxnResponse' property
     *
     * @return \Pulsar\Proto\CommandAddSubscriptionToTxnResponse
     */
    public function getAddSubscriptionToTxnResponse()
    {
        return $this->get(self::ADDSUBSCRIPTIONTOTXNRESPONSE);
    }

    /**
     * Returns true if 'addSubscriptionToTxnResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAddSubscriptionToTxnResponse()
    {
        return $this->get(self::ADDSUBSCRIPTIONTOTXNRESPONSE) !== null;
    }

    /**
     * Sets value of 'endTxn' property
     *
     * @param \Pulsar\Proto\CommandEndTxn $value Property value
     *
     * @return null
     */
    public function setEndTxn(\Pulsar\Proto\CommandEndTxn $value=null)
    {
        return $this->set(self::ENDTXN, $value);
    }

    /**
     * Returns value of 'endTxn' property
     *
     * @return \Pulsar\Proto\CommandEndTxn
     */
    public function getEndTxn()
    {
        return $this->get(self::ENDTXN);
    }

    /**
     * Returns true if 'endTxn' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEndTxn()
    {
        return $this->get(self::ENDTXN) !== null;
    }

    /**
     * Sets value of 'endTxnResponse' property
     *
     * @param \Pulsar\Proto\CommandEndTxnResponse $value Property value
     *
     * @return null
     */
    public function setEndTxnResponse(\Pulsar\Proto\CommandEndTxnResponse $value=null)
    {
        return $this->set(self::ENDTXNRESPONSE, $value);
    }

    /**
     * Returns value of 'endTxnResponse' property
     *
     * @return \Pulsar\Proto\CommandEndTxnResponse
     */
    public function getEndTxnResponse()
    {
        return $this->get(self::ENDTXNRESPONSE);
    }

    /**
     * Returns true if 'endTxnResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEndTxnResponse()
    {
        return $this->get(self::ENDTXNRESPONSE) !== null;
    }

    /**
     * Sets value of 'endTxnOnPartition' property
     *
     * @param \Pulsar\Proto\CommandEndTxnOnPartition $value Property value
     *
     * @return null
     */
    public function setEndTxnOnPartition(\Pulsar\Proto\CommandEndTxnOnPartition $value=null)
    {
        return $this->set(self::ENDTXNONPARTITION, $value);
    }

    /**
     * Returns value of 'endTxnOnPartition' property
     *
     * @return \Pulsar\Proto\CommandEndTxnOnPartition
     */
    public function getEndTxnOnPartition()
    {
        return $this->get(self::ENDTXNONPARTITION);
    }

    /**
     * Returns true if 'endTxnOnPartition' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEndTxnOnPartition()
    {
        return $this->get(self::ENDTXNONPARTITION) !== null;
    }

    /**
     * Sets value of 'endTxnOnPartitionResponse' property
     *
     * @param \Pulsar\Proto\CommandEndTxnOnPartitionResponse $value Property value
     *
     * @return null
     */
    public function setEndTxnOnPartitionResponse(\Pulsar\Proto\CommandEndTxnOnPartitionResponse $value=null)
    {
        return $this->set(self::ENDTXNONPARTITIONRESPONSE, $value);
    }

    /**
     * Returns value of 'endTxnOnPartitionResponse' property
     *
     * @return \Pulsar\Proto\CommandEndTxnOnPartitionResponse
     */
    public function getEndTxnOnPartitionResponse()
    {
        return $this->get(self::ENDTXNONPARTITIONRESPONSE);
    }

    /**
     * Returns true if 'endTxnOnPartitionResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEndTxnOnPartitionResponse()
    {
        return $this->get(self::ENDTXNONPARTITIONRESPONSE) !== null;
    }

    /**
     * Sets value of 'endTxnOnSubscription' property
     *
     * @param \Pulsar\Proto\CommandEndTxnOnSubscription $value Property value
     *
     * @return null
     */
    public function setEndTxnOnSubscription(\Pulsar\Proto\CommandEndTxnOnSubscription $value=null)
    {
        return $this->set(self::ENDTXNONSUBSCRIPTION, $value);
    }

    /**
     * Returns value of 'endTxnOnSubscription' property
     *
     * @return \Pulsar\Proto\CommandEndTxnOnSubscription
     */
    public function getEndTxnOnSubscription()
    {
        return $this->get(self::ENDTXNONSUBSCRIPTION);
    }

    /**
     * Returns true if 'endTxnOnSubscription' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEndTxnOnSubscription()
    {
        return $this->get(self::ENDTXNONSUBSCRIPTION) !== null;
    }

    /**
     * Sets value of 'endTxnOnSubscriptionResponse' property
     *
     * @param \Pulsar\Proto\CommandEndTxnOnSubscriptionResponse $value Property value
     *
     * @return null
     */
    public function setEndTxnOnSubscriptionResponse(\Pulsar\Proto\CommandEndTxnOnSubscriptionResponse $value=null)
    {
        return $this->set(self::ENDTXNONSUBSCRIPTIONRESPONSE, $value);
    }

    /**
     * Returns value of 'endTxnOnSubscriptionResponse' property
     *
     * @return \Pulsar\Proto\CommandEndTxnOnSubscriptionResponse
     */
    public function getEndTxnOnSubscriptionResponse()
    {
        return $this->get(self::ENDTXNONSUBSCRIPTIONRESPONSE);
    }

    /**
     * Returns true if 'endTxnOnSubscriptionResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEndTxnOnSubscriptionResponse()
    {
        return $this->get(self::ENDTXNONSUBSCRIPTIONRESPONSE) !== null;
    }

    /**
     * Sets value of 'tcClientConnectRequest' property
     *
     * @param \Pulsar\Proto\CommandTcClientConnectRequest $value Property value
     *
     * @return null
     */
    public function setTcClientConnectRequest(\Pulsar\Proto\CommandTcClientConnectRequest $value=null)
    {
        return $this->set(self::TCCLIENTCONNECTREQUEST, $value);
    }

    /**
     * Returns value of 'tcClientConnectRequest' property
     *
     * @return \Pulsar\Proto\CommandTcClientConnectRequest
     */
    public function getTcClientConnectRequest()
    {
        return $this->get(self::TCCLIENTCONNECTREQUEST);
    }

    /**
     * Returns true if 'tcClientConnectRequest' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTcClientConnectRequest()
    {
        return $this->get(self::TCCLIENTCONNECTREQUEST) !== null;
    }

    /**
     * Sets value of 'tcClientConnectResponse' property
     *
     * @param \Pulsar\Proto\CommandTcClientConnectResponse $value Property value
     *
     * @return null
     */
    public function setTcClientConnectResponse(\Pulsar\Proto\CommandTcClientConnectResponse $value=null)
    {
        return $this->set(self::TCCLIENTCONNECTRESPONSE, $value);
    }

    /**
     * Returns value of 'tcClientConnectResponse' property
     *
     * @return \Pulsar\Proto\CommandTcClientConnectResponse
     */
    public function getTcClientConnectResponse()
    {
        return $this->get(self::TCCLIENTCONNECTRESPONSE);
    }

    /**
     * Returns true if 'tcClientConnectResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTcClientConnectResponse()
    {
        return $this->get(self::TCCLIENTCONNECTRESPONSE) !== null;
    }
}
}