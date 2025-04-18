<?php
/**
 * Generated by Protobuf protoc plugin.
 * File descriptor : PulsarApi.proto
 */


namespace Pulsar\Proto;

/**
 * Protobuf message : pulsar.proto.CommandGetOrCreateSchema
 */
class CommandGetOrCreateSchema extends \Protobuf\AbstractMessage
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
     * request_id required uint64 = 1
     *
     * @var int
     */
    protected $request_id = null;

    /**
     * topic required string = 2
     *
     * @var string
     */
    protected $topic = null;

    /**
     * schema required message = 3
     *
     * @var \Pulsar\Proto\Schema
     */
    protected $schema = null;

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
    public function setRequestId($value)
    {
        $this->request_id = $value;
    }

    /**
     * Check if 'topic' has a value
     *
     * @return bool
     */
    public function hasTopic()
    {
        return $this->topic !== null;
    }

    /**
     * Get 'topic' value
     *
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Set 'topic' value
     *
     * @param string $value
     */
    public function setTopic($value)
    {
        $this->topic = $value;
    }

    /**
     * Check if 'schema' has a value
     *
     * @return bool
     */
    public function hasSchema()
    {
        return $this->schema !== null;
    }

    /**
     * Get 'schema' value
     *
     * @return \Pulsar\Proto\Schema
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * Set 'schema' value
     *
     * @param \Pulsar\Proto\Schema $value
     */
    public function setSchema(\Pulsar\Proto\Schema $value)
    {
        $this->schema = $value;
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
        if (!isset($values['request_id'])) {
            throw new \InvalidArgumentException('Field "request_id" (tag 1) is required but has no value.');
        }

        if (!isset($values['topic'])) {
            throw new \InvalidArgumentException('Field "topic" (tag 2) is required but has no value.');
        }

        if (!isset($values['schema'])) {
            throw new \InvalidArgumentException('Field "schema" (tag 3) is required but has no value.');
        }

        $message = new self();
        $values = array_merge([
        ], $values);

        $message->setRequestId($values['request_id']);
        $message->setTopic($values['topic']);
        $message->setSchema($values['schema']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'  => 'CommandGetOrCreateSchema',
            'field' => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name'   => 'request_id',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name'   => 'topic',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'    => 3,
                    'name'      => 'schema',
                    'type'      => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label'     => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.pulsar.proto.Schema',
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

        if ($this->request_id === null) {
            throw new \UnexpectedValueException('Field "\\pulsar\\proto\\CommandGetOrCreateSchema#request_id" (tag 1) is required but has no value.');
        }

        if ($this->topic === null) {
            throw new \UnexpectedValueException('Field "\\pulsar\\proto\\CommandGetOrCreateSchema#topic" (tag 2) is required but has no value.');
        }

        if ($this->schema === null) {
            throw new \UnexpectedValueException('Field "\\pulsar\\proto\\CommandGetOrCreateSchema#schema" (tag 3) is required but has no value.');
        }

        if ($this->request_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->request_id);
        }

        if ($this->topic !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->topic);
        }

        if ($this->schema !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->schema->serializedSize($sizeContext));
            $this->schema->writeTo($context);
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

                $this->request_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->topic = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize = $reader->readVarint($stream);
                $innerMessage = new \Pulsar\Proto\Schema();

                $this->schema = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

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

        if ($this->request_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->request_id);
        }

        if ($this->topic !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->topic);
        }

        if ($this->schema !== null) {
            $innerSize = $this->schema->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
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
        $this->request_id = null;
        $this->topic = null;
        $this->schema = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if (!$message instanceof \Pulsar\Proto\CommandGetOrCreateSchema) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->request_id = ( $message->request_id !== null ) ? $message->request_id : $this->request_id;
        $this->topic = ( $message->topic !== null ) ? $message->topic : $this->topic;
        $this->schema = ( $message->schema !== null ) ? $message->schema : $this->schema;
    }


}

