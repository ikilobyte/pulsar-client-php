<?php
/**
 * Generated by Protobuf protoc plugin.
 * File descriptor : PulsarApi.proto
 */


namespace Pulsar\Proto;

/**
 * Protobuf message : pulsar.proto.CommandAckResponse
 */
class CommandAckResponse extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * consumer_id required uint64 = 1
     *
     * @var int
     */
    protected $consumer_id = null;

    /**
     * txnid_least_bits optional uint64 = 2
     *
     * @var int
     */
    protected $txnid_least_bits = null;

    /**
     * txnid_most_bits optional uint64 = 3
     *
     * @var int
     */
    protected $txnid_most_bits = null;

    /**
     * error optional enum = 4
     *
     * @var \Pulsar\Proto\ServerError
     */
    protected $error = null;

    /**
     * message optional string = 5
     *
     * @var string
     */
    protected $message = null;

    /**
     * request_id optional uint64 = 6
     *
     * @var int
     */
    protected $request_id = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, ?\Protobuf\Configuration $configuration = null)
    {
        $this->txnid_least_bits = '0';
        $this->txnid_most_bits = '0';

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'consumer_id' has a value
     *
     * @return bool
     */
    public function hasConsumerId()
    {
        return $this->consumer_id !== null;
    }

    /**
     * Get 'consumer_id' value
     *
     * @return int
     */
    public function getConsumerId()
    {
        return $this->consumer_id;
    }

    /**
     * Set 'consumer_id' value
     *
     * @param int $value
     */
    public function setConsumerId($value)
    {
        $this->consumer_id = $value;
    }

    /**
     * Check if 'txnid_least_bits' has a value
     *
     * @return bool
     */
    public function hasTxnidLeastBits()
    {
        return $this->txnid_least_bits !== null;
    }

    /**
     * Get 'txnid_least_bits' value
     *
     * @return int
     */
    public function getTxnidLeastBits()
    {
        return $this->txnid_least_bits;
    }

    /**
     * Set 'txnid_least_bits' value
     *
     * @param int $value
     */
    public function setTxnidLeastBits($value = null)
    {
        $this->txnid_least_bits = $value;
    }

    /**
     * Check if 'txnid_most_bits' has a value
     *
     * @return bool
     */
    public function hasTxnidMostBits()
    {
        return $this->txnid_most_bits !== null;
    }

    /**
     * Get 'txnid_most_bits' value
     *
     * @return int
     */
    public function getTxnidMostBits()
    {
        return $this->txnid_most_bits;
    }

    /**
     * Set 'txnid_most_bits' value
     *
     * @param int $value
     */
    public function setTxnidMostBits($value = null)
    {
        $this->txnid_most_bits = $value;
    }

    /**
     * Check if 'error' has a value
     *
     * @return bool
     */
    public function hasError()
    {
        return $this->error !== null;
    }

    /**
     * Get 'error' value
     *
     * @return \Pulsar\Proto\ServerError
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Set 'error' value
     *
     * @param \Pulsar\Proto\ServerError $value
     */
    public function setError(?\Pulsar\Proto\ServerError $value = null)
    {
        $this->error = $value;
    }

    /**
     * Check if 'message' has a value
     *
     * @return bool
     */
    public function hasMessage()
    {
        return $this->message !== null;
    }

    /**
     * Get 'message' value
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set 'message' value
     *
     * @param string $value
     */
    public function setMessage($value = null)
    {
        $this->message = $value;
    }

    /**
     * Check if 'request_id' has a value
     *
     * @return bool
     */
    public function hasRequestId()
    {
        return $this->request_id !== null;
    }

    /**
     * Get 'request_id' value
     *
     * @return int
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Set 'request_id' value
     *
     * @param int $value
     */
    public function setRequestId($value = null)
    {
        $this->request_id = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ($this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, ?\Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        if (!isset($values['consumer_id'])) {
            throw new \InvalidArgumentException('Field "consumer_id" (tag 1) is required but has no value.');
        }

        $message = new self();
        $values = array_merge([
            'txnid_least_bits' => '0',
            'txnid_most_bits'  => '0',
            'error'            => null,
            'message'          => null,
            'request_id'       => null,
        ], $values);

        $message->setConsumerId($values['consumer_id']);
        $message->setTxnidLeastBits($values['txnid_least_bits']);
        $message->setTxnidMostBits($values['txnid_most_bits']);
        $message->setError($values['error']);
        $message->setMessage($values['message']);
        $message->setRequestId($values['request_id']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'  => 'CommandAckResponse',
            'field' => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name'   => 'consumer_id',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'        => 2,
                    'name'          => 'txnid_least_bits',
                    'type'          => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label'         => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '0',
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'        => 3,
                    'name'          => 'txnid_most_bits',
                    'type'          => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label'         => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '0',
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'    => 4,
                    'name'      => 'error',
                    'type'      => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label'     => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.pulsar.proto.ServerError',
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name'   => 'message',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name'   => 'request_id',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(?\Protobuf\Configuration $configuration = null)
    {
        $config = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream = $context->getStream();
        $writer = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->consumer_id === null) {
            throw new \UnexpectedValueException('Field "\\pulsar\\proto\\CommandAckResponse#consumer_id" (tag 1) is required but has no value.');
        }

        if ($this->consumer_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->consumer_id);
        }

        if ($this->txnid_least_bits !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->txnid_least_bits);
        }

        if ($this->txnid_most_bits !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->txnid_most_bits);
        }

        if ($this->error !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->error->value());
        }

        if ($this->message !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->message);
        }

        if ($this->request_id !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->request_id);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ( $length !== null )
            ? ( $stream->tell() + $length )
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->consumer_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->txnid_least_bits = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->txnid_most_bits = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->error = \Pulsar\Proto\ServerError::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->message = $reader->readString($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->request_id = $reader->readVarint($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size = 0;

        if ($this->consumer_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->consumer_id);
        }

        if ($this->txnid_least_bits !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->txnid_least_bits);
        }

        if ($this->txnid_most_bits !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->txnid_most_bits);
        }

        if ($this->error !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->error->value());
        }

        if ($this->message !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->message);
        }

        if ($this->request_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->request_id);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->consumer_id = null;
        $this->txnid_least_bits = '0';
        $this->txnid_most_bits = '0';
        $this->error = null;
        $this->message = null;
        $this->request_id = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if (!$message instanceof \Pulsar\Proto\CommandAckResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->consumer_id = ( $message->consumer_id !== null ) ? $message->consumer_id : $this->consumer_id;
        $this->txnid_least_bits = ( $message->txnid_least_bits !== null ) ? $message->txnid_least_bits : $this->txnid_least_bits;
        $this->txnid_most_bits = ( $message->txnid_most_bits !== null ) ? $message->txnid_most_bits : $this->txnid_most_bits;
        $this->error = ( $message->error !== null ) ? $message->error : $this->error;
        $this->message = ( $message->message !== null ) ? $message->message : $this->message;
        $this->request_id = ( $message->request_id !== null ) ? $message->request_id : $this->request_id;
    }


}

