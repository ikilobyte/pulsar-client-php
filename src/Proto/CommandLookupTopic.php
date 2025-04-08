<?php
/**
 * Generated by Protobuf protoc plugin.
 * File descriptor : PulsarApi.proto
 */


namespace Pulsar\Proto;

/**
 * Protobuf message : pulsar.proto.CommandLookupTopic
 */
class CommandLookupTopic extends \Protobuf\AbstractMessage
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
     * topic required string = 1
     *
     * @var string
     */
    protected $topic = null;

    /**
     * request_id required uint64 = 2
     *
     * @var int
     */
    protected $request_id = null;

    /**
     * authoritative optional bool = 3
     *
     * @var bool
     */
    protected $authoritative = null;

    /**
     * original_principal optional string = 4
     *
     * @var string
     */
    protected $original_principal = null;

    /**
     * original_auth_data optional string = 5
     *
     * @var string
     */
    protected $original_auth_data = null;

    /**
     * original_auth_method optional string = 6
     *
     * @var string
     */
    protected $original_auth_method = null;

    /**
     * advertised_listener_name optional string = 7
     *
     * @var string
     */
    protected $advertised_listener_name = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, ?\Protobuf\Configuration $configuration = null)
    {
        $this->authoritative = false;

        parent::__construct($stream, $configuration);
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
     * Check if 'authoritative' has a value
     *
     * @return bool
     */
    public function hasAuthoritative()
    {
        return $this->authoritative !== null;
    }

    /**
     * Get 'authoritative' value
     *
     * @return bool
     */
    public function getAuthoritative()
    {
        return $this->authoritative;
    }

    /**
     * Set 'authoritative' value
     *
     * @param bool $value
     */
    public function setAuthoritative($value = null)
    {
        $this->authoritative = $value;
    }

    /**
     * Check if 'original_principal' has a value
     *
     * @return bool
     */
    public function hasOriginalPrincipal()
    {
        return $this->original_principal !== null;
    }

    /**
     * Get 'original_principal' value
     *
     * @return string
     */
    public function getOriginalPrincipal()
    {
        return $this->original_principal;
    }

    /**
     * Set 'original_principal' value
     *
     * @param string $value
     */
    public function setOriginalPrincipal($value = null)
    {
        $this->original_principal = $value;
    }

    /**
     * Check if 'original_auth_data' has a value
     *
     * @return bool
     */
    public function hasOriginalAuthData()
    {
        return $this->original_auth_data !== null;
    }

    /**
     * Get 'original_auth_data' value
     *
     * @return string
     */
    public function getOriginalAuthData()
    {
        return $this->original_auth_data;
    }

    /**
     * Set 'original_auth_data' value
     *
     * @param string $value
     */
    public function setOriginalAuthData($value = null)
    {
        $this->original_auth_data = $value;
    }

    /**
     * Check if 'original_auth_method' has a value
     *
     * @return bool
     */
    public function hasOriginalAuthMethod()
    {
        return $this->original_auth_method !== null;
    }

    /**
     * Get 'original_auth_method' value
     *
     * @return string
     */
    public function getOriginalAuthMethod()
    {
        return $this->original_auth_method;
    }

    /**
     * Set 'original_auth_method' value
     *
     * @param string $value
     */
    public function setOriginalAuthMethod($value = null)
    {
        $this->original_auth_method = $value;
    }

    /**
     * Check if 'advertised_listener_name' has a value
     *
     * @return bool
     */
    public function hasAdvertisedListenerName()
    {
        return $this->advertised_listener_name !== null;
    }

    /**
     * Get 'advertised_listener_name' value
     *
     * @return string
     */
    public function getAdvertisedListenerName()
    {
        return $this->advertised_listener_name;
    }

    /**
     * Set 'advertised_listener_name' value
     *
     * @param string $value
     */
    public function setAdvertisedListenerName($value = null)
    {
        $this->advertised_listener_name = $value;
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
        if (!isset($values['topic'])) {
            throw new \InvalidArgumentException('Field "topic" (tag 1) is required but has no value.');
        }

        if (!isset($values['request_id'])) {
            throw new \InvalidArgumentException('Field "request_id" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values = array_merge([
            'authoritative'            => false,
            'original_principal'       => null,
            'original_auth_data'       => null,
            'original_auth_method'     => null,
            'advertised_listener_name' => null,
        ], $values);

        $message->setTopic($values['topic']);
        $message->setRequestId($values['request_id']);
        $message->setAuthoritative($values['authoritative']);
        $message->setOriginalPrincipal($values['original_principal']);
        $message->setOriginalAuthData($values['original_auth_data']);
        $message->setOriginalAuthMethod($values['original_auth_method']);
        $message->setAdvertisedListenerName($values['advertised_listener_name']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'  => 'CommandLookupTopic',
            'field' => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name'   => 'topic',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name'   => 'request_id',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'        => 3,
                    'name'          => 'authoritative',
                    'type'          => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label'         => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => false,
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name'   => 'original_principal',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name'   => 'original_auth_data',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name'   => 'original_auth_method',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name'   => 'advertised_listener_name',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
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

        if ($this->topic === null) {
            throw new \UnexpectedValueException('Field "\\pulsar\\proto\\CommandLookupTopic#topic" (tag 1) is required but has no value.');
        }

        if ($this->request_id === null) {
            throw new \UnexpectedValueException('Field "\\pulsar\\proto\\CommandLookupTopic#request_id" (tag 2) is required but has no value.');
        }

        if ($this->topic !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->topic);
        }

        if ($this->request_id !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->request_id);
        }

        if ($this->authoritative !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeBool($stream, $this->authoritative);
        }

        if ($this->original_principal !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->original_principal);
        }

        if ($this->original_auth_data !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->original_auth_data);
        }

        if ($this->original_auth_method !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->original_auth_method);
        }

        if ($this->advertised_listener_name !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeString($stream, $this->advertised_listener_name);
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

                $this->topic = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->request_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->authoritative = $reader->readBool($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->original_principal = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->original_auth_data = $reader->readString($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->original_auth_method = $reader->readString($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->advertised_listener_name = $reader->readString($stream);

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

        if ($this->topic !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->topic);
        }

        if ($this->request_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->request_id);
        }

        if ($this->authoritative !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->original_principal !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->original_principal);
        }

        if ($this->original_auth_data !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->original_auth_data);
        }

        if ($this->original_auth_method !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->original_auth_method);
        }

        if ($this->advertised_listener_name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->advertised_listener_name);
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
        $this->topic = null;
        $this->request_id = null;
        $this->authoritative = false;
        $this->original_principal = null;
        $this->original_auth_data = null;
        $this->original_auth_method = null;
        $this->advertised_listener_name = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if (!$message instanceof \Pulsar\Proto\CommandLookupTopic) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->topic = ( $message->topic !== null ) ? $message->topic : $this->topic;
        $this->request_id = ( $message->request_id !== null ) ? $message->request_id : $this->request_id;
        $this->authoritative = ( $message->authoritative !== null ) ? $message->authoritative : $this->authoritative;
        $this->original_principal = ( $message->original_principal !== null ) ? $message->original_principal : $this->original_principal;
        $this->original_auth_data = ( $message->original_auth_data !== null ) ? $message->original_auth_data : $this->original_auth_data;
        $this->original_auth_method = ( $message->original_auth_method !== null ) ? $message->original_auth_method : $this->original_auth_method;
        $this->advertised_listener_name = ( $message->advertised_listener_name !== null ) ? $message->advertised_listener_name : $this->advertised_listener_name;
    }


}

