<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * ServerError enum
 */
final class ServerError
{
    const UnknownError = 0;
    const MetadataError = 1;
    const PersistenceError = 2;
    const AuthenticationError = 3;
    const AuthorizationError = 4;
    const ConsumerBusy = 5;
    const ServiceNotReady = 6;
    const ProducerBlockedQuotaExceededError = 7;
    const ProducerBlockedQuotaExceededException = 8;
    const ChecksumError = 9;
    const UnsupportedVersionError = 10;
    const TopicNotFound = 11;
    const SubscriptionNotFound = 12;
    const ConsumerNotFound = 13;
    const TooManyRequests = 14;
    const TopicTerminatedError = 15;
    const ProducerBusy = 16;
    const InvalidTopicName = 17;
    const IncompatibleSchema = 18;
    const ConsumerAssignError = 19;
    const TransactionCoordinatorNotFound = 20;
    const InvalidTxnStatus = 21;
    const NotAllowedError = 22;
    const TransactionConflict = 23;
    const TransactionNotFound = 24;
    const ProducerFenced = 25;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownError' => self::UnknownError,
            'MetadataError' => self::MetadataError,
            'PersistenceError' => self::PersistenceError,
            'AuthenticationError' => self::AuthenticationError,
            'AuthorizationError' => self::AuthorizationError,
            'ConsumerBusy' => self::ConsumerBusy,
            'ServiceNotReady' => self::ServiceNotReady,
            'ProducerBlockedQuotaExceededError' => self::ProducerBlockedQuotaExceededError,
            'ProducerBlockedQuotaExceededException' => self::ProducerBlockedQuotaExceededException,
            'ChecksumError' => self::ChecksumError,
            'UnsupportedVersionError' => self::UnsupportedVersionError,
            'TopicNotFound' => self::TopicNotFound,
            'SubscriptionNotFound' => self::SubscriptionNotFound,
            'ConsumerNotFound' => self::ConsumerNotFound,
            'TooManyRequests' => self::TooManyRequests,
            'TopicTerminatedError' => self::TopicTerminatedError,
            'ProducerBusy' => self::ProducerBusy,
            'InvalidTopicName' => self::InvalidTopicName,
            'IncompatibleSchema' => self::IncompatibleSchema,
            'ConsumerAssignError' => self::ConsumerAssignError,
            'TransactionCoordinatorNotFound' => self::TransactionCoordinatorNotFound,
            'InvalidTxnStatus' => self::InvalidTxnStatus,
            'NotAllowedError' => self::NotAllowedError,
            'TransactionConflict' => self::TransactionConflict,
            'TransactionNotFound' => self::TransactionNotFound,
            'ProducerFenced' => self::ProducerFenced,
        );
    }
}
}