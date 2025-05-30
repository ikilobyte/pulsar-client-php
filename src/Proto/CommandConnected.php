<?php
/**
 * Generated by Protobuf protoc plugin.
 * File descriptor : PulsarApi.proto
 */


namespace Pulsar\Proto;

/**
 * Protobuf message : pulsar.proto.CommandConnected
 */
class CommandConnected extends \Protobuf\AbstractMessage
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
     * server_version required string = 1
     *
     * @var string
     */
    protected $server_version = null;

    /**
     * protocol_version optional int32 = 2
     *
     * @var int
     */
    protected $protocol_version = null;

    /**
     * max_message_size optional int32 = 3
     *
     * @var int
     */
    protected $max_message_size = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, ?\Protobuf\Configuration $configuration = null)
    {
        $this->protocol_version = '0';

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'server_version' has a value
     *
     * @return bool
     */
    public function hasServerVersion()
    {
        return $this->server_version !== null;
    }

    /**
     * Get 'server_version' value
     *
     * @return string
     */
    public function getServerVersion()
    {
        return $this->server_version;
    }

    /**
     * Set 'server_version' value
     *
     * @param string $value
     */
    public function setServerVersion($value)
    {
        $this->server_version = $value;
    }

    /**
     * Check if 'protocol_version' has a value
     *
     * @return bool
     */
    public function hasProtocolVersion()
    {
        return $this->protocol_version !== null;
    }

    /**
     * Get 'protocol_version' value
     *
     * @return int
     */
    public function getProtocolVersion()
    {
        return $this->protocol_version;
    }

    /**
     * Set 'protocol_version' value
     *
     * @param int $value
     */
    public function setProtocolVersion($value = null)
    {
        $this->protocol_version = $value;
    }

    /**
     * Check if 'max_message_size' has a value
     *
     * @return bool
     */
    public function hasMaxMessageSize()
    {
        return $this->max_message_size !== null;
    }

    /**
     * Get 'max_message_size' value
     *
     * @return int
     */
    public function getMaxMessageSize()
    {
        return $this->max_message_size;
    }

    /**
     * Set 'max_message_size' value
     *
     * @param int $value
     */
    public function setMaxMessageSize($value = null)
    {
        $this->max_message_size = $value;
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
        if (!isset($values['server_version'])) {
            throw new \InvalidArgumentException('Field "server_version" (tag 1) is required but has no value.');
        }

        $message = new self();
        $values = array_merge([
            'protocol_version' => '0',
            'max_message_size' => null,
        ], $values);

        $message->setServerVersion($values['server_version']);
        $message->setProtocolVersion($values['protocol_version']);
        $message->setMaxMessageSize($values['max_message_size']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'  => 'CommandConnected',
            'field' => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name'   => 'server_version',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'        => 2,
                    'name'          => 'protocol_version',
                    'type'          => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label'         => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '0',
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name'   => 'max_message_size',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
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

        if ($this->server_version === null) {
            throw new \UnexpectedValueException('Field "\\pulsar\\proto\\CommandConnected#server_version" (tag 1) is required but has no value.');
        }

        if ($this->server_version !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->server_version);
        }

        if ($this->protocol_version !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->protocol_version);
        }

        if ($this->max_message_size !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->max_message_size);
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
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->server_version = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->protocol_version = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->max_message_size = $reader->readVarint($stream);

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

        if ($this->server_version !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->server_version);
        }

        if ($this->protocol_version !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->protocol_version);
        }

        if ($this->max_message_size !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->max_message_size);
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
        $this->server_version = null;
        $this->protocol_version = '0';
        $this->max_message_size = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if (!$message instanceof \Pulsar\Proto\CommandConnected) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->server_version = ( $message->server_version !== null ) ? $message->server_version : $this->server_version;
        $this->protocol_version = ( $message->protocol_version !== null ) ? $message->protocol_version : $this->protocol_version;
        $this->max_message_size = ( $message->max_message_size !== null ) ? $message->max_message_size : $this->max_message_size;
    }


}

