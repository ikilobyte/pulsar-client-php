<?php
/**
 * Generated by Protobuf protoc plugin.
 * File descriptor : PulsarApi.proto
 */


namespace Pulsar\Proto;

/**
 * Protobuf message : pulsar.proto.CommandConnect
 */
class CommandConnect extends \Protobuf\AbstractMessage
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
     * client_version required string = 1
     *
     * @var string
     */
    protected $client_version = null;

    /**
     * auth_method optional enum = 2
     *
     * @var \Pulsar\Proto\AuthMethod
     */
    protected $auth_method = null;

    /**
     * auth_method_name optional string = 5
     *
     * @var string
     */
    protected $auth_method_name = null;

    /**
     * auth_data optional bytes = 3
     *
     * @var \Protobuf\Stream
     */
    protected $auth_data = null;

    /**
     * protocol_version optional int32 = 4
     *
     * @var int
     */
    protected $protocol_version = null;

    /**
     * proxy_to_broker_url optional string = 6
     *
     * @var string
     */
    protected $proxy_to_broker_url = null;

    /**
     * original_principal optional string = 7
     *
     * @var string
     */
    protected $original_principal = null;

    /**
     * original_auth_data optional string = 8
     *
     * @var string
     */
    protected $original_auth_data = null;

    /**
     * original_auth_method optional string = 9
     *
     * @var string
     */
    protected $original_auth_method = null;

    /**
     * feature_flags optional message = 10
     *
     * @var \Pulsar\Proto\FeatureFlags
     */
    protected $feature_flags = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, ?\Protobuf\Configuration $configuration = null)
    {
        $this->protocol_version = '0';

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'client_version' has a value
     *
     * @return bool
     */
    public function hasClientVersion()
    {
        return $this->client_version !== null;
    }

    /**
     * Get 'client_version' value
     *
     * @return string
     */
    public function getClientVersion()
    {
        return $this->client_version;
    }

    /**
     * Set 'client_version' value
     *
     * @param string $value
     */
    public function setClientVersion($value)
    {
        $this->client_version = $value;
    }

    /**
     * Check if 'auth_method' has a value
     *
     * @return bool
     */
    public function hasAuthMethod()
    {
        return $this->auth_method !== null;
    }

    /**
     * Get 'auth_method' value
     *
     * @return \Pulsar\Proto\AuthMethod
     */
    public function getAuthMethod()
    {
        return $this->auth_method;
    }

    /**
     * Set 'auth_method' value
     *
     * @param \Pulsar\Proto\AuthMethod $value
     */
    public function setAuthMethod(?\Pulsar\Proto\AuthMethod $value = null)
    {
        $this->auth_method = $value;
    }

    /**
     * Check if 'auth_method_name' has a value
     *
     * @return bool
     */
    public function hasAuthMethodName()
    {
        return $this->auth_method_name !== null;
    }

    /**
     * Get 'auth_method_name' value
     *
     * @return string
     */
    public function getAuthMethodName()
    {
        return $this->auth_method_name;
    }

    /**
     * Set 'auth_method_name' value
     *
     * @param string $value
     */
    public function setAuthMethodName($value = null)
    {
        $this->auth_method_name = $value;
    }

    /**
     * Check if 'auth_data' has a value
     *
     * @return bool
     */
    public function hasAuthData()
    {
        return $this->auth_data !== null;
    }

    /**
     * Get 'auth_data' value
     *
     * @return \Protobuf\Stream
     */
    public function getAuthData()
    {
        return $this->auth_data;
    }

    /**
     * Set 'auth_data' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setAuthData($value = null)
    {
        if ($value !== null && !$value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->auth_data = $value;
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
     * Check if 'proxy_to_broker_url' has a value
     *
     * @return bool
     */
    public function hasProxyToBrokerUrl()
    {
        return $this->proxy_to_broker_url !== null;
    }

    /**
     * Get 'proxy_to_broker_url' value
     *
     * @return string
     */
    public function getProxyToBrokerUrl()
    {
        return $this->proxy_to_broker_url;
    }

    /**
     * Set 'proxy_to_broker_url' value
     *
     * @param string $value
     */
    public function setProxyToBrokerUrl($value = null)
    {
        $this->proxy_to_broker_url = $value;
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
     * Check if 'feature_flags' has a value
     *
     * @return bool
     */
    public function hasFeatureFlags()
    {
        return $this->feature_flags !== null;
    }

    /**
     * Get 'feature_flags' value
     *
     * @return \Pulsar\Proto\FeatureFlags
     */
    public function getFeatureFlags()
    {
        return $this->feature_flags;
    }

    /**
     * Set 'feature_flags' value
     *
     * @param \Pulsar\Proto\FeatureFlags $value
     */
    public function setFeatureFlags(?\Pulsar\Proto\FeatureFlags $value = null)
    {
        $this->feature_flags = $value;
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
        if (!isset($values['client_version'])) {
            throw new \InvalidArgumentException('Field "client_version" (tag 1) is required but has no value.');
        }

        $message = new self();
        $values = array_merge([
            'auth_method'          => null,
            'auth_method_name'     => null,
            'auth_data'            => null,
            'protocol_version'     => '0',
            'proxy_to_broker_url'  => null,
            'original_principal'   => null,
            'original_auth_data'   => null,
            'original_auth_method' => null,
            'feature_flags'        => null,
        ], $values);

        $message->setClientVersion($values['client_version']);
        $message->setAuthMethod($values['auth_method']);
        $message->setAuthMethodName($values['auth_method_name']);
        $message->setAuthData($values['auth_data']);
        $message->setProtocolVersion($values['protocol_version']);
        $message->setProxyToBrokerUrl($values['proxy_to_broker_url']);
        $message->setOriginalPrincipal($values['original_principal']);
        $message->setOriginalAuthData($values['original_auth_data']);
        $message->setOriginalAuthMethod($values['original_auth_method']);
        $message->setFeatureFlags($values['feature_flags']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'  => 'CommandConnect',
            'field' => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name'   => 'client_version',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'    => 2,
                    'name'      => 'auth_method',
                    'type'      => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label'     => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.pulsar.proto.AuthMethod',
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name'   => 'auth_method_name',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name'   => 'auth_data',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'        => 4,
                    'name'          => 'protocol_version',
                    'type'          => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label'         => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '0',
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name'   => 'proxy_to_broker_url',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name'   => 'original_principal',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name'   => 'original_auth_data',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name'   => 'original_auth_method',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'    => 10,
                    'name'      => 'feature_flags',
                    'type'      => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label'     => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.pulsar.proto.FeatureFlags',
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

        if ($this->client_version === null) {
            throw new \UnexpectedValueException('Field "\\pulsar\\proto\\CommandConnect#client_version" (tag 1) is required but has no value.');
        }

        if ($this->client_version !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->client_version);
        }

        if ($this->auth_method !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->auth_method->value());
        }

        if ($this->auth_method_name !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->auth_method_name);
        }

        if ($this->auth_data !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeByteStream($stream, $this->auth_data);
        }

        if ($this->protocol_version !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->protocol_version);
        }

        if ($this->proxy_to_broker_url !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->proxy_to_broker_url);
        }

        if ($this->original_principal !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeString($stream, $this->original_principal);
        }

        if ($this->original_auth_data !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeString($stream, $this->original_auth_data);
        }

        if ($this->original_auth_method !== null) {
            $writer->writeVarint($stream, 74);
            $writer->writeString($stream, $this->original_auth_method);
        }

        if ($this->feature_flags !== null) {
            $writer->writeVarint($stream, 82);
            $writer->writeVarint($stream, $this->feature_flags->serializedSize($sizeContext));
            $this->feature_flags->writeTo($context);
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

                $this->client_version = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->auth_method = \Pulsar\Proto\AuthMethod::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->auth_method_name = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->auth_data = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->protocol_version = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->proxy_to_broker_url = $reader->readString($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->original_principal = $reader->readString($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->original_auth_data = $reader->readString($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->original_auth_method = $reader->readString($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize = $reader->readVarint($stream);
                $innerMessage = new \Pulsar\Proto\FeatureFlags();

                $this->feature_flags = $innerMessage;

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

        if ($this->client_version !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->client_version);
        }

        if ($this->auth_method !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->auth_method->value());
        }

        if ($this->auth_method_name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->auth_method_name);
        }

        if ($this->auth_data !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->auth_data);
        }

        if ($this->protocol_version !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->protocol_version);
        }

        if ($this->proxy_to_broker_url !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->proxy_to_broker_url);
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

        if ($this->feature_flags !== null) {
            $innerSize = $this->feature_flags->serializedSize($context);

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
        $this->client_version = null;
        $this->auth_method = null;
        $this->auth_method_name = null;
        $this->auth_data = null;
        $this->protocol_version = '0';
        $this->proxy_to_broker_url = null;
        $this->original_principal = null;
        $this->original_auth_data = null;
        $this->original_auth_method = null;
        $this->feature_flags = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if (!$message instanceof \Pulsar\Proto\CommandConnect) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->client_version = ( $message->client_version !== null ) ? $message->client_version : $this->client_version;
        $this->auth_method = ( $message->auth_method !== null ) ? $message->auth_method : $this->auth_method;
        $this->auth_method_name = ( $message->auth_method_name !== null ) ? $message->auth_method_name : $this->auth_method_name;
        $this->auth_data = ( $message->auth_data !== null ) ? $message->auth_data : $this->auth_data;
        $this->protocol_version = ( $message->protocol_version !== null ) ? $message->protocol_version : $this->protocol_version;
        $this->proxy_to_broker_url = ( $message->proxy_to_broker_url !== null ) ? $message->proxy_to_broker_url : $this->proxy_to_broker_url;
        $this->original_principal = ( $message->original_principal !== null ) ? $message->original_principal : $this->original_principal;
        $this->original_auth_data = ( $message->original_auth_data !== null ) ? $message->original_auth_data : $this->original_auth_data;
        $this->original_auth_method = ( $message->original_auth_method !== null ) ? $message->original_auth_method : $this->original_auth_method;
        $this->feature_flags = ( $message->feature_flags !== null ) ? $message->feature_flags : $this->feature_flags;
    }


}

