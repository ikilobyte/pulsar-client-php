<?php
/**
 * Generated by Protobuf protoc plugin.
 * File descriptor : PulsarApi.proto
 */


namespace Pulsar\Proto;

/**
 * Protobuf message : pulsar.proto.CommandGetTopicsOfNamespaceResponse
 */
class CommandGetTopicsOfNamespaceResponse extends \Protobuf\AbstractMessage
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
     * topics repeated string = 2
     *
     * @var \Protobuf\Collection
     */
    protected $topics = null;

    /**
     * filtered optional bool = 3
     *
     * @var bool
     */
    protected $filtered = null;

    /**
     * topics_hash optional string = 4
     *
     * @var string
     */
    protected $topics_hash = null;

    /**
     * changed optional bool = 5
     *
     * @var bool
     */
    protected $changed = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, ?\Protobuf\Configuration $configuration = null)
    {
        $this->filtered = false;
        $this->changed = true;

        parent::__construct($stream, $configuration);
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
    public function setRequestId($value)
    {
        $this->request_id = $value;
    }

    /**
     * Check if 'topics' has a value
     *
     * @return bool
     */
    public function hasTopicsList()
    {
        return $this->topics !== null;
    }

    /**
     * Get 'topics' value
     *
     * @return \Protobuf\Collection
     */
    public function getTopicsList()
    {
        return $this->topics;
    }

    /**
     * Set 'topics' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setTopicsList(?\Protobuf\Collection $value = null)
    {
        $this->topics = $value;
    }

    /**
     * Add a new element to 'topics'
     *
     * @param string $value
     */
    public function addTopics($value)
    {
        if ($this->topics === null) {
            $this->topics = new \Protobuf\ScalarCollection();
        }

        $this->topics->add($value);
    }

    /**
     * Check if 'filtered' has a value
     *
     * @return bool
     */
    public function hasFiltered()
    {
        return $this->filtered !== null;
    }

    /**
     * Get 'filtered' value
     *
     * @return bool
     */
    public function getFiltered()
    {
        return $this->filtered;
    }

    /**
     * Set 'filtered' value
     *
     * @param bool $value
     */
    public function setFiltered($value = null)
    {
        $this->filtered = $value;
    }

    /**
     * Check if 'topics_hash' has a value
     *
     * @return bool
     */
    public function hasTopicsHash()
    {
        return $this->topics_hash !== null;
    }

    /**
     * Get 'topics_hash' value
     *
     * @return string
     */
    public function getTopicsHash()
    {
        return $this->topics_hash;
    }

    /**
     * Set 'topics_hash' value
     *
     * @param string $value
     */
    public function setTopicsHash($value = null)
    {
        $this->topics_hash = $value;
    }

    /**
     * Check if 'changed' has a value
     *
     * @return bool
     */
    public function hasChanged()
    {
        return $this->changed !== null;
    }

    /**
     * Get 'changed' value
     *
     * @return bool
     */
    public function getChanged()
    {
        return $this->changed;
    }

    /**
     * Set 'changed' value
     *
     * @param bool $value
     */
    public function setChanged($value = null)
    {
        $this->changed = $value;
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

        $message = new self();
        $values = array_merge([
            'topics'      => [],
            'filtered'    => false,
            'topics_hash' => null,
            'changed'     => true,
        ], $values);

        $message->setRequestId($values['request_id']);
        $message->setFiltered($values['filtered']);
        $message->setTopicsHash($values['topics_hash']);
        $message->setChanged($values['changed']);

        foreach ($values['topics'] as $item) {
            $message->addTopics($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'  => 'CommandGetTopicsOfNamespaceResponse',
            'field' => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name'   => 'request_id',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name'   => 'topics',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'        => 3,
                    'name'          => 'filtered',
                    'type'          => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label'         => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => false,
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name'   => 'topics_hash',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'        => 5,
                    'name'          => 'changed',
                    'type'          => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label'         => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => true,
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
            throw new \UnexpectedValueException('Field "\\pulsar\\proto\\CommandGetTopicsOfNamespaceResponse#request_id" (tag 1) is required but has no value.');
        }

        if ($this->request_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->request_id);
        }

        if ($this->topics !== null) {
            foreach ($this->topics as $val) {
                $writer->writeVarint($stream, 18);
                $writer->writeString($stream, $val);
            }
        }

        if ($this->filtered !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeBool($stream, $this->filtered);
        }

        if ($this->topics_hash !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->topics_hash);
        }

        if ($this->changed !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeBool($stream, $this->changed);
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

                if ($this->topics === null) {
                    $this->topics = new \Protobuf\ScalarCollection();
                }

                $this->topics->add($reader->readString($stream));

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->filtered = $reader->readBool($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->topics_hash = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->changed = $reader->readBool($stream);

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

        if ($this->topics !== null) {
            foreach ($this->topics as $val) {
                $size += 1;
                $size += $calculator->computeStringSize($val);
            }
        }

        if ($this->filtered !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->topics_hash !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->topics_hash);
        }

        if ($this->changed !== null) {
            $size += 1;
            $size += 1;
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
        $this->topics = null;
        $this->filtered = false;
        $this->topics_hash = null;
        $this->changed = true;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if (!$message instanceof \Pulsar\Proto\CommandGetTopicsOfNamespaceResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->request_id = ( $message->request_id !== null ) ? $message->request_id : $this->request_id;
        $this->topics = ( $message->topics !== null ) ? $message->topics : $this->topics;
        $this->filtered = ( $message->filtered !== null ) ? $message->filtered : $this->filtered;
        $this->topics_hash = ( $message->topics_hash !== null ) ? $message->topics_hash : $this->topics_hash;
        $this->changed = ( $message->changed !== null ) ? $message->changed : $this->changed;
    }


}

