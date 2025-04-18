<?php
/**
 * Generated by Protobuf protoc plugin.
 * File descriptor : PulsarApi.proto
 */


namespace Pulsar\Proto;

/**
 * Protobuf message : pulsar.proto.CommandRedeliverUnacknowledgedMessages
 */
class CommandRedeliverUnacknowledgedMessages extends \Protobuf\AbstractMessage
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
     * message_ids repeated message = 2
     *
     * @var \Protobuf\Collection<\Pulsar\Proto\MessageIdData>
     */
    protected $message_ids = null;

    /**
     * consumer_epoch optional uint64 = 3
     *
     * @var int
     */
    protected $consumer_epoch = null;

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
     * Check if 'message_ids' has a value
     *
     * @return bool
     */
    public function hasMessageIdsList()
    {
        return $this->message_ids !== null;
    }

    /**
     * Get 'message_ids' value
     *
     * @return \Protobuf\Collection<\Pulsar\Proto\MessageIdData>
     */
    public function getMessageIdsList()
    {
        return $this->message_ids;
    }

    /**
     * Set 'message_ids' value
     *
     * @param \Protobuf\Collection<\Pulsar\Proto\MessageIdData> $value
     */
    public function setMessageIdsList(?\Protobuf\Collection $value = null)
    {
        $this->message_ids = $value;
    }

    /**
     * Add a new element to 'message_ids'
     *
     * @param \Pulsar\Proto\MessageIdData $value
     */
    public function addMessageIds(\Pulsar\Proto\MessageIdData $value)
    {
        if ($this->message_ids === null) {
            $this->message_ids = new \Protobuf\MessageCollection();
        }

        $this->message_ids->add($value);
    }

    /**
     * Check if 'consumer_epoch' has a value
     *
     * @return bool
     */
    public function hasConsumerEpoch()
    {
        return $this->consumer_epoch !== null;
    }

    /**
     * Get 'consumer_epoch' value
     *
     * @return int
     */
    public function getConsumerEpoch()
    {
        return $this->consumer_epoch;
    }

    /**
     * Set 'consumer_epoch' value
     *
     * @param int $value
     */
    public function setConsumerEpoch($value = null)
    {
        $this->consumer_epoch = $value;
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
            'message_ids'    => [],
            'consumer_epoch' => null,
        ], $values);

        $message->setConsumerId($values['consumer_id']);
        $message->setConsumerEpoch($values['consumer_epoch']);

        foreach ($values['message_ids'] as $item) {
            $message->addMessageIds($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'  => 'CommandRedeliverUnacknowledgedMessages',
            'field' => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name'   => 'consumer_id',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'    => 2,
                    'name'      => 'message_ids',
                    'type'      => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label'     => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.pulsar.proto.MessageIdData',
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name'   => 'consumer_epoch',
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
            throw new \UnexpectedValueException('Field "\\pulsar\\proto\\CommandRedeliverUnacknowledgedMessages#consumer_id" (tag 1) is required but has no value.');
        }

        if ($this->consumer_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->consumer_id);
        }

        if ($this->message_ids !== null) {
            foreach ($this->message_ids as $val) {
                $writer->writeVarint($stream, 18);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->consumer_epoch !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->consumer_epoch);
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
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize = $reader->readVarint($stream);
                $innerMessage = new \Pulsar\Proto\MessageIdData();

                if ($this->message_ids === null) {
                    $this->message_ids = new \Protobuf\MessageCollection();
                }

                $this->message_ids->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->consumer_epoch = $reader->readVarint($stream);

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

        if ($this->message_ids !== null) {
            foreach ($this->message_ids as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->consumer_epoch !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->consumer_epoch);
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
        $this->message_ids = null;
        $this->consumer_epoch = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if (!$message instanceof \Pulsar\Proto\CommandRedeliverUnacknowledgedMessages) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->consumer_id = ( $message->consumer_id !== null ) ? $message->consumer_id : $this->consumer_id;
        $this->message_ids = ( $message->message_ids !== null ) ? $message->message_ids : $this->message_ids;
        $this->consumer_epoch = ( $message->consumer_epoch !== null ) ? $message->consumer_epoch : $this->consumer_epoch;
    }


}

