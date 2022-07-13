<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * Type enum embedded in BaseCommand message
 */
final class BaseCommand_Type
{
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
    const REDELIVER_UNACKNOWLEDGED_MESSAGES = 20;
    const PARTITIONED_METADATA = 21;
    const PARTITIONED_METADATA_RESPONSE = 22;
    const LOOKUP = 23;
    const LOOKUP_RESPONSE = 24;
    const CONSUMER_STATS = 25;
    const CONSUMER_STATS_RESPONSE = 26;
    const REACHED_END_OF_TOPIC = 27;
    const SEEK = 28;
    const GET_LAST_MESSAGE_ID = 29;
    const GET_LAST_MESSAGE_ID_RESPONSE = 30;
    const ACTIVE_CONSUMER_CHANGE = 31;
    const GET_TOPICS_OF_NAMESPACE = 32;
    const GET_TOPICS_OF_NAMESPACE_RESPONSE = 33;
    const GET_SCHEMA = 34;
    const GET_SCHEMA_RESPONSE = 35;
    const AUTH_CHALLENGE = 36;
    const AUTH_RESPONSE = 37;
    const ACK_RESPONSE = 38;
    const GET_OR_CREATE_SCHEMA = 39;
    const GET_OR_CREATE_SCHEMA_RESPONSE = 40;
    const NEW_TXN = 50;
    const NEW_TXN_RESPONSE = 51;
    const ADD_PARTITION_TO_TXN = 52;
    const ADD_PARTITION_TO_TXN_RESPONSE = 53;
    const ADD_SUBSCRIPTION_TO_TXN = 54;
    const ADD_SUBSCRIPTION_TO_TXN_RESPONSE = 55;
    const END_TXN = 56;
    const END_TXN_RESPONSE = 57;
    const END_TXN_ON_PARTITION = 58;
    const END_TXN_ON_PARTITION_RESPONSE = 59;
    const END_TXN_ON_SUBSCRIPTION = 60;
    const END_TXN_ON_SUBSCRIPTION_RESPONSE = 61;
    const TC_CLIENT_CONNECT_REQUEST = 62;
    const TC_CLIENT_CONNECT_RESPONSE = 63;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'CONNECT' => self::CONNECT,
            'CONNECTED' => self::CONNECTED,
            'SUBSCRIBE' => self::SUBSCRIBE,
            'PRODUCER' => self::PRODUCER,
            'SEND' => self::SEND,
            'SEND_RECEIPT' => self::SEND_RECEIPT,
            'SEND_ERROR' => self::SEND_ERROR,
            'MESSAGE' => self::MESSAGE,
            'ACK' => self::ACK,
            'FLOW' => self::FLOW,
            'UNSUBSCRIBE' => self::UNSUBSCRIBE,
            'SUCCESS' => self::SUCCESS,
            'ERROR' => self::ERROR,
            'CLOSE_PRODUCER' => self::CLOSE_PRODUCER,
            'CLOSE_CONSUMER' => self::CLOSE_CONSUMER,
            'PRODUCER_SUCCESS' => self::PRODUCER_SUCCESS,
            'PING' => self::PING,
            'PONG' => self::PONG,
            'REDELIVER_UNACKNOWLEDGED_MESSAGES' => self::REDELIVER_UNACKNOWLEDGED_MESSAGES,
            'PARTITIONED_METADATA' => self::PARTITIONED_METADATA,
            'PARTITIONED_METADATA_RESPONSE' => self::PARTITIONED_METADATA_RESPONSE,
            'LOOKUP' => self::LOOKUP,
            'LOOKUP_RESPONSE' => self::LOOKUP_RESPONSE,
            'CONSUMER_STATS' => self::CONSUMER_STATS,
            'CONSUMER_STATS_RESPONSE' => self::CONSUMER_STATS_RESPONSE,
            'REACHED_END_OF_TOPIC' => self::REACHED_END_OF_TOPIC,
            'SEEK' => self::SEEK,
            'GET_LAST_MESSAGE_ID' => self::GET_LAST_MESSAGE_ID,
            'GET_LAST_MESSAGE_ID_RESPONSE' => self::GET_LAST_MESSAGE_ID_RESPONSE,
            'ACTIVE_CONSUMER_CHANGE' => self::ACTIVE_CONSUMER_CHANGE,
            'GET_TOPICS_OF_NAMESPACE' => self::GET_TOPICS_OF_NAMESPACE,
            'GET_TOPICS_OF_NAMESPACE_RESPONSE' => self::GET_TOPICS_OF_NAMESPACE_RESPONSE,
            'GET_SCHEMA' => self::GET_SCHEMA,
            'GET_SCHEMA_RESPONSE' => self::GET_SCHEMA_RESPONSE,
            'AUTH_CHALLENGE' => self::AUTH_CHALLENGE,
            'AUTH_RESPONSE' => self::AUTH_RESPONSE,
            'ACK_RESPONSE' => self::ACK_RESPONSE,
            'GET_OR_CREATE_SCHEMA' => self::GET_OR_CREATE_SCHEMA,
            'GET_OR_CREATE_SCHEMA_RESPONSE' => self::GET_OR_CREATE_SCHEMA_RESPONSE,
            'NEW_TXN' => self::NEW_TXN,
            'NEW_TXN_RESPONSE' => self::NEW_TXN_RESPONSE,
            'ADD_PARTITION_TO_TXN' => self::ADD_PARTITION_TO_TXN,
            'ADD_PARTITION_TO_TXN_RESPONSE' => self::ADD_PARTITION_TO_TXN_RESPONSE,
            'ADD_SUBSCRIPTION_TO_TXN' => self::ADD_SUBSCRIPTION_TO_TXN,
            'ADD_SUBSCRIPTION_TO_TXN_RESPONSE' => self::ADD_SUBSCRIPTION_TO_TXN_RESPONSE,
            'END_TXN' => self::END_TXN,
            'END_TXN_RESPONSE' => self::END_TXN_RESPONSE,
            'END_TXN_ON_PARTITION' => self::END_TXN_ON_PARTITION,
            'END_TXN_ON_PARTITION_RESPONSE' => self::END_TXN_ON_PARTITION_RESPONSE,
            'END_TXN_ON_SUBSCRIPTION' => self::END_TXN_ON_SUBSCRIPTION,
            'END_TXN_ON_SUBSCRIPTION_RESPONSE' => self::END_TXN_ON_SUBSCRIPTION_RESPONSE,
            'TC_CLIENT_CONNECT_REQUEST' => self::TC_CLIENT_CONNECT_REQUEST,
            'TC_CLIENT_CONNECT_RESPONSE' => self::TC_CLIENT_CONNECT_RESPONSE,
        );
    }
}
}