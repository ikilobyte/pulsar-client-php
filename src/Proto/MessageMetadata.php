<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 * pulsar.proto package
 */

namespace Pulsar\Proto {
    /**
     * MessageMetadata message
     */
    class MessageMetadata extends \ProtobufMessage
    {
        /* Field index constants */
        const PRODUCER_NAME = 1;
        const SEQUENCE_ID = 2;
        const PUBLISH_TIME = 3;
        const PROPERTIES = 4;
        const REPLICATED_FROM = 5;
        const PARTITION_KEY = 6;
        const REPLICATE_TO = 7;
        const COMPRESSION = 8;
        const UNCOMPRESSED_SIZE = 9;
        const NUM_MESSAGES_IN_BATCH = 11;
        const EVENT_TIME = 12;
        const ENCRYPTION_KEYS = 13;
        const ENCRYPTION_ALGO = 14;
        const ENCRYPTION_PARAM = 15;
        const SCHEMA_VERSION = 16;
        const PARTITION_KEY_B64_ENCODED = 17;
        const ORDERING_KEY = 18;
        const DELIVER_AT_TIME = 19;
        const MARKER_TYPE = 20;
        const TXNID_LEAST_BITS = 22;
        const TXNID_MOST_BITS = 23;
        const HIGHEST_SEQUENCE_ID = 24;
        const NULL_VALUE = 25;
        const UUID = 26;
        const NUM_CHUNKS_FROM_MSG = 27;
        const TOTAL_CHUNK_MSG_SIZE = 28;
        const CHUNK_ID = 29;
        const NULL_PARTITION_KEY = 30;

        /* @var array Field descriptors */
        protected static $fields = [
            self::PRODUCER_NAME             => [
                'name'     => 'producer_name',
                'required' => true,
                'type'     => \ProtobufMessage::PB_TYPE_STRING,
            ],
            self::SEQUENCE_ID               => [
                'name'     => 'sequence_id',
                'required' => true,
                'type'     => \ProtobufMessage::PB_TYPE_INT,
            ],
            self::PUBLISH_TIME              => [
                'name'     => 'publish_time',
                'required' => true,
                'type'     => \ProtobufMessage::PB_TYPE_INT,
            ],
            self::PROPERTIES                => [
                'name'     => 'properties',
                'repeated' => true,
                'type'     => '\Pulsar\Proto\KeyValue',
            ],
            self::REPLICATED_FROM           => [
                'name'     => 'replicated_from',
                'required' => false,
                'type'     => \ProtobufMessage::PB_TYPE_STRING,
            ],
            self::PARTITION_KEY             => [
                'name'     => 'partition_key',
                'required' => false,
                'type'     => \ProtobufMessage::PB_TYPE_STRING,
            ],
            self::REPLICATE_TO              => [
                'name'     => 'replicate_to',
                'repeated' => true,
                'type'     => \ProtobufMessage::PB_TYPE_STRING,
            ],
            self::COMPRESSION               => [
                'default'  => \Pulsar\Proto\CompressionType::NONE,
                'name'     => 'compression',
                'required' => false,
                'type'     => \ProtobufMessage::PB_TYPE_INT,
            ],
            self::UNCOMPRESSED_SIZE         => [
                'default'  => 0,
                'name'     => 'uncompressed_size',
                'required' => false,
                'type'     => \ProtobufMessage::PB_TYPE_INT,
            ],
            self::NUM_MESSAGES_IN_BATCH     => [
                // 'default' => 1,
                'name'     => 'num_messages_in_batch',
                'required' => false,
                'type'     => \ProtobufMessage::PB_TYPE_INT,
            ],
            self::EVENT_TIME                => [
                'default'  => 0,
                'name'     => 'event_time',
                'required' => false,
                'type'     => \ProtobufMessage::PB_TYPE_INT,
            ],
            self::ENCRYPTION_KEYS           => [
                'name'     => 'encryption_keys',
                'repeated' => true,
                'type'     => '\Pulsar\Proto\EncryptionKeys',
            ],
            self::ENCRYPTION_ALGO           => [
                'name'     => 'encryption_algo',
                'required' => false,
                'type'     => \ProtobufMessage::PB_TYPE_STRING,
            ],
            self::ENCRYPTION_PARAM          => [
                'name'     => 'encryption_param',
                'required' => false,
                'type'     => \ProtobufMessage::PB_TYPE_STRING,
            ],
            self::SCHEMA_VERSION            => [
                'name'     => 'schema_version',
                'required' => false,
                'type'     => \ProtobufMessage::PB_TYPE_STRING,
            ],
            self::PARTITION_KEY_B64_ENCODED => [
                'default'  => false,
                'name'     => 'partition_key_b64_encoded',
                'required' => false,
                'type'     => \ProtobufMessage::PB_TYPE_BOOL,
            ],
            self::ORDERING_KEY              => [
                'name'     => 'ordering_key',
                'required' => false,
                'type'     => \ProtobufMessage::PB_TYPE_STRING,
            ],
            self::DELIVER_AT_TIME           => [
                'name'     => 'deliver_at_time',
                'required' => false,
                'type'     => \ProtobufMessage::PB_TYPE_INT,
            ],
            self::MARKER_TYPE               => [
                'name'     => 'marker_type',
                'required' => false,
                'type'     => \ProtobufMessage::PB_TYPE_INT,
            ],
            self::TXNID_LEAST_BITS          => [
                'name'     => 'txnid_least_bits',
                'required' => false,
                'type'     => \ProtobufMessage::PB_TYPE_INT,
            ],
            self::TXNID_MOST_BITS           => [
                'name'     => 'txnid_most_bits',
                'required' => false,
                'type'     => \ProtobufMessage::PB_TYPE_INT,
            ],
            self::HIGHEST_SEQUENCE_ID       => [
                'default'  => 0,
                'name'     => 'highest_sequence_id',
                'required' => false,
                'type'     => \ProtobufMessage::PB_TYPE_INT,
            ],
            self::NULL_VALUE                => [
                'default'  => false,
                'name'     => 'null_value',
                'required' => false,
                'type'     => \ProtobufMessage::PB_TYPE_BOOL,
            ],
            self::UUID                      => [
                'name'     => 'uuid',
                'required' => false,
                'type'     => \ProtobufMessage::PB_TYPE_STRING,
            ],
            self::NUM_CHUNKS_FROM_MSG       => [
                'name'     => 'num_chunks_from_msg',
                'required' => false,
                'type'     => \ProtobufMessage::PB_TYPE_INT,
            ],
            self::TOTAL_CHUNK_MSG_SIZE      => [
                'name'     => 'total_chunk_msg_size',
                'required' => false,
                'type'     => \ProtobufMessage::PB_TYPE_INT,
            ],
            self::CHUNK_ID                  => [
                'name'     => 'chunk_id',
                'required' => false,
                'type'     => \ProtobufMessage::PB_TYPE_INT,
            ],
            self::NULL_PARTITION_KEY        => [
                'default'  => false,
                'name'     => 'null_partition_key',
                'required' => false,
                'type'     => \ProtobufMessage::PB_TYPE_BOOL,
            ],
        ];

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
            $this->values[ self::PRODUCER_NAME ] = null;
            $this->values[ self::SEQUENCE_ID ] = null;
            $this->values[ self::PUBLISH_TIME ] = null;
            $this->values[ self::PROPERTIES ] = [];
            $this->values[ self::REPLICATED_FROM ] = null;
            $this->values[ self::PARTITION_KEY ] = null;
            $this->values[ self::REPLICATE_TO ] = [];
            $this->values[ self::COMPRESSION ] = self::$fields[ self::COMPRESSION ]['default'];
            $this->values[ self::UNCOMPRESSED_SIZE ] = self::$fields[ self::UNCOMPRESSED_SIZE ]['default'];
            // $this->values[ self::NUM_MESSAGES_IN_BATCH ] = self::$fields[ self::NUM_MESSAGES_IN_BATCH ]['default'];
            $this->values[ self::NUM_MESSAGES_IN_BATCH ] = null;
            $this->values[ self::EVENT_TIME ] = self::$fields[ self::EVENT_TIME ]['default'];
            $this->values[ self::ENCRYPTION_KEYS ] = [];
            $this->values[ self::ENCRYPTION_ALGO ] = null;
            $this->values[ self::ENCRYPTION_PARAM ] = null;
            $this->values[ self::SCHEMA_VERSION ] = null;
            $this->values[ self::PARTITION_KEY_B64_ENCODED ] = self::$fields[ self::PARTITION_KEY_B64_ENCODED ]['default'];
            $this->values[ self::ORDERING_KEY ] = null;
            $this->values[ self::DELIVER_AT_TIME ] = null;
            $this->values[ self::MARKER_TYPE ] = null;
            $this->values[ self::TXNID_LEAST_BITS ] = null;
            $this->values[ self::TXNID_MOST_BITS ] = null;
            $this->values[ self::HIGHEST_SEQUENCE_ID ] = self::$fields[ self::HIGHEST_SEQUENCE_ID ]['default'];
            $this->values[ self::NULL_VALUE ] = self::$fields[ self::NULL_VALUE ]['default'];
            $this->values[ self::UUID ] = null;
            $this->values[ self::NUM_CHUNKS_FROM_MSG ] = null;
            $this->values[ self::TOTAL_CHUNK_MSG_SIZE ] = null;
            $this->values[ self::CHUNK_ID ] = null;
            $this->values[ self::NULL_PARTITION_KEY ] = self::$fields[ self::NULL_PARTITION_KEY ]['default'];
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
         * Sets value of 'producer_name' property
         *
         * @param string $value Property value
         * @return null
         */
        public function setProducerName($value)
        {
            return $this->set(self::PRODUCER_NAME, $value);
        }

        /**
         * Returns value of 'producer_name' property
         *
         * @return string
         */
        public function getProducerName()
        {
            $value = $this->get(self::PRODUCER_NAME);
            return $value === null ? (string)$value : $value;
        }

        /**
         * Returns true if 'producer_name' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasProducerName()
        {
            return $this->get(self::PRODUCER_NAME) !== null;
        }

        /**
         * Sets value of 'sequence_id' property
         *
         * @param integer $value Property value
         * @return null
         */
        public function setSequenceId($value)
        {
            return $this->set(self::SEQUENCE_ID, $value);
        }

        /**
         * Returns value of 'sequence_id' property
         *
         * @return integer
         */
        public function getSequenceId()
        {
            $value = $this->get(self::SEQUENCE_ID);
            return $value === null ? (integer)$value : $value;
        }

        /**
         * Returns true if 'sequence_id' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasSequenceId()
        {
            return $this->get(self::SEQUENCE_ID) !== null;
        }

        /**
         * Sets value of 'publish_time' property
         *
         * @param integer $value Property value
         * @return null
         */
        public function setPublishTime($value)
        {
            return $this->set(self::PUBLISH_TIME, $value);
        }

        /**
         * Returns value of 'publish_time' property
         *
         * @return integer
         */
        public function getPublishTime()
        {
            $value = $this->get(self::PUBLISH_TIME);
            return $value === null ? (integer)$value : $value;
        }

        /**
         * Returns true if 'publish_time' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasPublishTime()
        {
            return $this->get(self::PUBLISH_TIME) !== null;
        }

        /**
         * Appends value to 'properties' list
         *
         * @param \Pulsar\Proto\KeyValue $value Value to append
         * @return null
         */
        public function appendProperties(\Pulsar\Proto\KeyValue $value)
        {
            return $this->append(self::PROPERTIES, $value);
        }

        /**
         * Clears 'properties' list
         *
         * @return null
         */
        public function clearProperties()
        {
            return $this->clear(self::PROPERTIES);
        }

        /**
         * Returns 'properties' list
         *
         * @return \Pulsar\Proto\KeyValue[]
         */
        public function getProperties()
        {
            return $this->get(self::PROPERTIES);
        }

        /**
         * Returns true if 'properties' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasProperties()
        {
            return count($this->get(self::PROPERTIES)) !== 0;
        }

        /**
         * Returns 'properties' iterator
         *
         * @return \ArrayIterator
         */
        public function getPropertiesIterator()
        {
            return new \ArrayIterator($this->get(self::PROPERTIES));
        }

        /**
         * Returns element from 'properties' list at given offset
         *
         * @param int $offset Position in list
         * @return \Pulsar\Proto\KeyValue
         */
        public function getPropertiesAt($offset)
        {
            return $this->get(self::PROPERTIES, $offset);
        }

        /**
         * Returns count of 'properties' list
         *
         * @return int
         */
        public function getPropertiesCount()
        {
            return $this->count(self::PROPERTIES);
        }

        /**
         * Sets value of 'replicated_from' property
         *
         * @param string $value Property value
         * @return null
         */
        public function setReplicatedFrom($value)
        {
            return $this->set(self::REPLICATED_FROM, $value);
        }

        /**
         * Returns value of 'replicated_from' property
         *
         * @return string
         */
        public function getReplicatedFrom()
        {
            $value = $this->get(self::REPLICATED_FROM);
            return $value === null ? (string)$value : $value;
        }

        /**
         * Returns true if 'replicated_from' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasReplicatedFrom()
        {
            return $this->get(self::REPLICATED_FROM) !== null;
        }

        /**
         * Sets value of 'partition_key' property
         *
         * @param string $value Property value
         * @return null
         */
        public function setPartitionKey($value)
        {
            return $this->set(self::PARTITION_KEY, $value);
        }

        /**
         * Returns value of 'partition_key' property
         *
         * @return string
         */
        public function getPartitionKey()
        {
            $value = $this->get(self::PARTITION_KEY);
            return $value === null ? (string)$value : $value;
        }

        /**
         * Returns true if 'partition_key' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasPartitionKey()
        {
            return $this->get(self::PARTITION_KEY) !== null;
        }

        /**
         * Appends value to 'replicate_to' list
         *
         * @param string $value Value to append
         * @return null
         */
        public function appendReplicateTo($value)
        {
            return $this->append(self::REPLICATE_TO, $value);
        }

        /**
         * Clears 'replicate_to' list
         *
         * @return null
         */
        public function clearReplicateTo()
        {
            return $this->clear(self::REPLICATE_TO);
        }

        /**
         * Returns 'replicate_to' list
         *
         * @return string[]
         */
        public function getReplicateTo()
        {
            return $this->get(self::REPLICATE_TO);
        }

        /**
         * Returns true if 'replicate_to' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasReplicateTo()
        {
            return count($this->get(self::REPLICATE_TO)) !== 0;
        }

        /**
         * Returns 'replicate_to' iterator
         *
         * @return \ArrayIterator
         */
        public function getReplicateToIterator()
        {
            return new \ArrayIterator($this->get(self::REPLICATE_TO));
        }

        /**
         * Returns element from 'replicate_to' list at given offset
         *
         * @param int $offset Position in list
         * @return string
         */
        public function getReplicateToAt($offset)
        {
            return $this->get(self::REPLICATE_TO, $offset);
        }

        /**
         * Returns count of 'replicate_to' list
         *
         * @return int
         */
        public function getReplicateToCount()
        {
            return $this->count(self::REPLICATE_TO);
        }

        /**
         * Sets value of 'compression' property
         *
         * @param integer $value Property value
         * @return null
         */
        public function setCompression($value)
        {
            return $this->set(self::COMPRESSION, $value);
        }

        /**
         * Returns value of 'compression' property
         *
         * @return integer
         */
        public function getCompression()
        {
            $value = $this->get(self::COMPRESSION);
            return $value === null ? (integer)$value : $value;
        }

        /**
         * Returns true if 'compression' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasCompression()
        {
            return $this->get(self::COMPRESSION) !== null;
        }

        /**
         * Sets value of 'uncompressed_size' property
         *
         * @param integer $value Property value
         * @return null
         */
        public function setUncompressedSize($value)
        {
            return $this->set(self::UNCOMPRESSED_SIZE, $value);
        }

        /**
         * Returns value of 'uncompressed_size' property
         *
         * @return integer
         */
        public function getUncompressedSize()
        {
            $value = $this->get(self::UNCOMPRESSED_SIZE);
            return $value === null ? (integer)$value : $value;
        }

        /**
         * Returns true if 'uncompressed_size' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasUncompressedSize()
        {
            return $this->get(self::UNCOMPRESSED_SIZE) !== null;
        }

        /**
         * Sets value of 'num_messages_in_batch' property
         *
         * @param integer $value Property value
         * @return null
         */
        public function setNumMessagesInBatch($value)
        {
            return $this->set(self::NUM_MESSAGES_IN_BATCH, $value);
        }

        /**
         * Returns value of 'num_messages_in_batch' property
         *
         * @return integer
         */
        public function getNumMessagesInBatch()
        {
            $value = $this->get(self::NUM_MESSAGES_IN_BATCH);
            return $value === null ? (integer)$value : $value;
        }

        /**
         * Returns true if 'num_messages_in_batch' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasNumMessagesInBatch()
        {
            return $this->get(self::NUM_MESSAGES_IN_BATCH) !== null;
        }

        /**
         * Sets value of 'event_time' property
         *
         * @param integer $value Property value
         * @return null
         */
        public function setEventTime($value)
        {
            return $this->set(self::EVENT_TIME, $value);
        }

        /**
         * Returns value of 'event_time' property
         *
         * @return integer
         */
        public function getEventTime()
        {
            $value = $this->get(self::EVENT_TIME);
            return $value === null ? (integer)$value : $value;
        }

        /**
         * Returns true if 'event_time' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasEventTime()
        {
            return $this->get(self::EVENT_TIME) !== null;
        }

        /**
         * Appends value to 'encryption_keys' list
         *
         * @param \Pulsar\Proto\EncryptionKeys $value Value to append
         * @return null
         */
        public function appendEncryptionKeys(\Pulsar\Proto\EncryptionKeys $value)
        {
            return $this->append(self::ENCRYPTION_KEYS, $value);
        }

        /**
         * Clears 'encryption_keys' list
         *
         * @return null
         */
        public function clearEncryptionKeys()
        {
            return $this->clear(self::ENCRYPTION_KEYS);
        }

        /**
         * Returns 'encryption_keys' list
         *
         * @return \Pulsar\Proto\EncryptionKeys[]
         */
        public function getEncryptionKeys()
        {
            return $this->get(self::ENCRYPTION_KEYS);
        }

        /**
         * Returns true if 'encryption_keys' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasEncryptionKeys()
        {
            return count($this->get(self::ENCRYPTION_KEYS)) !== 0;
        }

        /**
         * Returns 'encryption_keys' iterator
         *
         * @return \ArrayIterator
         */
        public function getEncryptionKeysIterator()
        {
            return new \ArrayIterator($this->get(self::ENCRYPTION_KEYS));
        }

        /**
         * Returns element from 'encryption_keys' list at given offset
         *
         * @param int $offset Position in list
         * @return \Pulsar\Proto\EncryptionKeys
         */
        public function getEncryptionKeysAt($offset)
        {
            return $this->get(self::ENCRYPTION_KEYS, $offset);
        }

        /**
         * Returns count of 'encryption_keys' list
         *
         * @return int
         */
        public function getEncryptionKeysCount()
        {
            return $this->count(self::ENCRYPTION_KEYS);
        }

        /**
         * Sets value of 'encryption_algo' property
         *
         * @param string $value Property value
         * @return null
         */
        public function setEncryptionAlgo($value)
        {
            return $this->set(self::ENCRYPTION_ALGO, $value);
        }

        /**
         * Returns value of 'encryption_algo' property
         *
         * @return string
         */
        public function getEncryptionAlgo()
        {
            $value = $this->get(self::ENCRYPTION_ALGO);
            return $value === null ? (string)$value : $value;
        }

        /**
         * Returns true if 'encryption_algo' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasEncryptionAlgo()
        {
            return $this->get(self::ENCRYPTION_ALGO) !== null;
        }

        /**
         * Sets value of 'encryption_param' property
         *
         * @param string $value Property value
         * @return null
         */
        public function setEncryptionParam($value)
        {
            return $this->set(self::ENCRYPTION_PARAM, $value);
        }

        /**
         * Returns value of 'encryption_param' property
         *
         * @return string
         */
        public function getEncryptionParam()
        {
            $value = $this->get(self::ENCRYPTION_PARAM);
            return $value === null ? (string)$value : $value;
        }

        /**
         * Returns true if 'encryption_param' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasEncryptionParam()
        {
            return $this->get(self::ENCRYPTION_PARAM) !== null;
        }

        /**
         * Sets value of 'schema_version' property
         *
         * @param string $value Property value
         * @return null
         */
        public function setSchemaVersion($value)
        {
            return $this->set(self::SCHEMA_VERSION, $value);
        }

        /**
         * Returns value of 'schema_version' property
         *
         * @return string
         */
        public function getSchemaVersion()
        {
            $value = $this->get(self::SCHEMA_VERSION);
            return $value === null ? (string)$value : $value;
        }

        /**
         * Returns true if 'schema_version' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasSchemaVersion()
        {
            return $this->get(self::SCHEMA_VERSION) !== null;
        }

        /**
         * Sets value of 'partition_key_b64_encoded' property
         *
         * @param boolean $value Property value
         * @return null
         */
        public function setPartitionKeyB64Encoded($value)
        {
            return $this->set(self::PARTITION_KEY_B64_ENCODED, $value);
        }

        /**
         * Returns value of 'partition_key_b64_encoded' property
         *
         * @return boolean
         */
        public function getPartitionKeyB64Encoded()
        {
            $value = $this->get(self::PARTITION_KEY_B64_ENCODED);
            return $value === null ? (boolean)$value : $value;
        }

        /**
         * Returns true if 'partition_key_b64_encoded' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasPartitionKeyB64Encoded()
        {
            return $this->get(self::PARTITION_KEY_B64_ENCODED) !== null;
        }

        /**
         * Sets value of 'ordering_key' property
         *
         * @param string $value Property value
         * @return null
         */
        public function setOrderingKey($value)
        {
            return $this->set(self::ORDERING_KEY, $value);
        }

        /**
         * Returns value of 'ordering_key' property
         *
         * @return string
         */
        public function getOrderingKey()
        {
            $value = $this->get(self::ORDERING_KEY);
            return $value === null ? (string)$value : $value;
        }

        /**
         * Returns true if 'ordering_key' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasOrderingKey()
        {
            return $this->get(self::ORDERING_KEY) !== null;
        }

        /**
         * Sets value of 'deliver_at_time' property
         *
         * @param integer $value Property value
         * @return null
         */
        public function setDeliverAtTime($value)
        {
            return $this->set(self::DELIVER_AT_TIME, $value);
        }

        /**
         * Returns value of 'deliver_at_time' property
         *
         * @return integer
         */
        public function getDeliverAtTime()
        {
            $value = $this->get(self::DELIVER_AT_TIME);
            return $value === null ? (integer)$value : $value;
        }

        /**
         * Returns true if 'deliver_at_time' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasDeliverAtTime()
        {
            return $this->get(self::DELIVER_AT_TIME) !== null;
        }

        /**
         * Sets value of 'marker_type' property
         *
         * @param integer $value Property value
         * @return null
         */
        public function setMarkerType($value)
        {
            return $this->set(self::MARKER_TYPE, $value);
        }

        /**
         * Returns value of 'marker_type' property
         *
         * @return integer
         */
        public function getMarkerType()
        {
            $value = $this->get(self::MARKER_TYPE);
            return $value === null ? (integer)$value : $value;
        }

        /**
         * Returns true if 'marker_type' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasMarkerType()
        {
            return $this->get(self::MARKER_TYPE) !== null;
        }

        /**
         * Sets value of 'txnid_least_bits' property
         *
         * @param integer $value Property value
         * @return null
         */
        public function setTxnidLeastBits($value)
        {
            return $this->set(self::TXNID_LEAST_BITS, $value);
        }

        /**
         * Returns value of 'txnid_least_bits' property
         *
         * @return integer
         */
        public function getTxnidLeastBits()
        {
            $value = $this->get(self::TXNID_LEAST_BITS);
            return $value === null ? (integer)$value : $value;
        }

        /**
         * Returns true if 'txnid_least_bits' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasTxnidLeastBits()
        {
            return $this->get(self::TXNID_LEAST_BITS) !== null;
        }

        /**
         * Sets value of 'txnid_most_bits' property
         *
         * @param integer $value Property value
         * @return null
         */
        public function setTxnidMostBits($value)
        {
            return $this->set(self::TXNID_MOST_BITS, $value);
        }

        /**
         * Returns value of 'txnid_most_bits' property
         *
         * @return integer
         */
        public function getTxnidMostBits()
        {
            $value = $this->get(self::TXNID_MOST_BITS);
            return $value === null ? (integer)$value : $value;
        }

        /**
         * Returns true if 'txnid_most_bits' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasTxnidMostBits()
        {
            return $this->get(self::TXNID_MOST_BITS) !== null;
        }

        /**
         * Sets value of 'highest_sequence_id' property
         *
         * @param integer $value Property value
         * @return null
         */
        public function setHighestSequenceId($value)
        {
            return $this->set(self::HIGHEST_SEQUENCE_ID, $value);
        }

        /**
         * Returns value of 'highest_sequence_id' property
         *
         * @return integer
         */
        public function getHighestSequenceId()
        {
            $value = $this->get(self::HIGHEST_SEQUENCE_ID);
            return $value === null ? (integer)$value : $value;
        }

        /**
         * Returns true if 'highest_sequence_id' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasHighestSequenceId()
        {
            return $this->get(self::HIGHEST_SEQUENCE_ID) !== null;
        }

        /**
         * Sets value of 'null_value' property
         *
         * @param boolean $value Property value
         * @return null
         */
        public function setNullValue($value)
        {
            return $this->set(self::NULL_VALUE, $value);
        }

        /**
         * Returns value of 'null_value' property
         *
         * @return boolean
         */
        public function getNullValue()
        {
            $value = $this->get(self::NULL_VALUE);
            return $value === null ? (boolean)$value : $value;
        }

        /**
         * Returns true if 'null_value' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasNullValue()
        {
            return $this->get(self::NULL_VALUE) !== null;
        }

        /**
         * Sets value of 'uuid' property
         *
         * @param string $value Property value
         * @return null
         */
        public function setUuid($value)
        {
            return $this->set(self::UUID, $value);
        }

        /**
         * Returns value of 'uuid' property
         *
         * @return string
         */
        public function getUuid()
        {
            $value = $this->get(self::UUID);
            return $value === null ? (string)$value : $value;
        }

        /**
         * Returns true if 'uuid' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasUuid()
        {
            return $this->get(self::UUID) !== null;
        }

        /**
         * Sets value of 'num_chunks_from_msg' property
         *
         * @param integer $value Property value
         * @return null
         */
        public function setNumChunksFromMsg($value)
        {
            return $this->set(self::NUM_CHUNKS_FROM_MSG, $value);
        }

        /**
         * Returns value of 'num_chunks_from_msg' property
         *
         * @return integer
         */
        public function getNumChunksFromMsg()
        {
            $value = $this->get(self::NUM_CHUNKS_FROM_MSG);
            return $value === null ? (integer)$value : $value;
        }

        /**
         * Returns true if 'num_chunks_from_msg' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasNumChunksFromMsg()
        {
            return $this->get(self::NUM_CHUNKS_FROM_MSG) !== null;
        }

        /**
         * Sets value of 'total_chunk_msg_size' property
         *
         * @param integer $value Property value
         * @return null
         */
        public function setTotalChunkMsgSize($value)
        {
            return $this->set(self::TOTAL_CHUNK_MSG_SIZE, $value);
        }

        /**
         * Returns value of 'total_chunk_msg_size' property
         *
         * @return integer
         */
        public function getTotalChunkMsgSize()
        {
            $value = $this->get(self::TOTAL_CHUNK_MSG_SIZE);
            return $value === null ? (integer)$value : $value;
        }

        /**
         * Returns true if 'total_chunk_msg_size' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasTotalChunkMsgSize()
        {
            return $this->get(self::TOTAL_CHUNK_MSG_SIZE) !== null;
        }

        /**
         * Sets value of 'chunk_id' property
         *
         * @param integer $value Property value
         * @return null
         */
        public function setChunkId($value)
        {
            return $this->set(self::CHUNK_ID, $value);
        }

        /**
         * Returns value of 'chunk_id' property
         *
         * @return integer
         */
        public function getChunkId()
        {
            $value = $this->get(self::CHUNK_ID);
            return $value === null ? (integer)$value : $value;
        }

        /**
         * Returns true if 'chunk_id' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasChunkId()
        {
            return $this->get(self::CHUNK_ID) !== null;
        }

        /**
         * Sets value of 'null_partition_key' property
         *
         * @param boolean $value Property value
         * @return null
         */
        public function setNullPartitionKey($value)
        {
            return $this->set(self::NULL_PARTITION_KEY, $value);
        }

        /**
         * Returns value of 'null_partition_key' property
         *
         * @return boolean
         */
        public function getNullPartitionKey()
        {
            $value = $this->get(self::NULL_PARTITION_KEY);
            return $value === null ? (boolean)$value : $value;
        }

        /**
         * Returns true if 'null_partition_key' property is set, false otherwise
         *
         * @return boolean
         */
        public function hasNullPartitionKey()
        {
            return $this->get(self::NULL_PARTITION_KEY) !== null;
        }
    }
}