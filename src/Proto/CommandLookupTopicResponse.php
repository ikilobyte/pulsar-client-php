<?php
/**
 * Generated by Protobuf protoc plugin.
 * File descriptor : PulsarApi.proto
 */


namespace Pulsar\Proto;

/**
 * Protobuf message : pulsar.proto.CommandLookupTopicResponse
 */
class CommandLookupTopicResponse extends \Protobuf\AbstractMessage
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
     * brokerServiceUrl optional string = 1
     *
     * @var string
     */
    protected $brokerServiceUrl = null;

    /**
     * brokerServiceUrlTls optional string = 2
     *
     * @var string
     */
    protected $brokerServiceUrlTls = null;

    /**
     * response optional enum = 3
     *
     * @var \Pulsar\Proto\CommandLookupTopicResponse\LookupType
     */
    protected $response = null;

    /**
     * request_id required uint64 = 4
     *
     * @var int
     */
    protected $request_id = null;

    /**
     * authoritative optional bool = 5
     *
     * @var bool
     */
    protected $authoritative = null;

    /**
     * error optional enum = 6
     *
     * @var \Pulsar\Proto\ServerError
     */
    protected $error = null;

    /**
     * message optional string = 7
     *
     * @var string
     */
    protected $message = null;

    /**
     * proxy_through_service_url optional bool = 8
     *
     * @var bool
     */
    protected $proxy_through_service_url = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, ?\Protobuf\Configuration $configuration = null)
    {
        $this->authoritative = false;
        $this->proxy_through_service_url = false;

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'brokerServiceUrl' has a value
     *
     * @return bool
     */
    public function hasBrokerServiceUrl()
    {
        return $this->brokerServiceUrl !== null;
    }

    /**
     * Get 'brokerServiceUrl' value
     *
     * @return string
     */
    public function getBrokerServiceUrl()
    {
        return $this->brokerServiceUrl;
    }

    /**
     * Set 'brokerServiceUrl' value
     *
     * @param string $value
     */
    public function setBrokerServiceUrl($value = null)
    {
        $this->brokerServiceUrl = $value;
    }

    /**
     * Check if 'brokerServiceUrlTls' has a value
     *
     * @return bool
     */
    public function hasBrokerServiceUrlTls()
    {
        return $this->brokerServiceUrlTls !== null;
    }

    /**
     * Get 'brokerServiceUrlTls' value
     *
     * @return string
     */
    public function getBrokerServiceUrlTls()
    {
        return $this->brokerServiceUrlTls;
    }

    /**
     * Set 'brokerServiceUrlTls' value
     *
     * @param string $value
     */
    public function setBrokerServiceUrlTls($value = null)
    {
        $this->brokerServiceUrlTls = $value;
    }

    /**
     * Check if 'response' has a value
     *
     * @return bool
     */
    public function hasResponse()
    {
        return $this->response !== null;
    }

    /**
     * Get 'response' value
     *
     * @return \Pulsar\Proto\CommandLookupTopicResponse\LookupType
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Set 'response' value
     *
     * @param \Pulsar\Proto\CommandLookupTopicResponse\LookupType $value
     */
    public function setResponse(?\Pulsar\Proto\CommandLookupTopicResponse\LookupType $value = null)
    {
        $this->response = $value;
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
     * Check if 'proxy_through_service_url' has a value
     *
     * @return bool
     */
    public function hasProxyThroughServiceUrl()
    {
        return $this->proxy_through_service_url !== null;
    }

    /**
     * Get 'proxy_through_service_url' value
     *
     * @return bool
     */
    public function getProxyThroughServiceUrl()
    {
        return $this->proxy_through_service_url;
    }

    /**
     * Set 'proxy_through_service_url' value
     *
     * @param bool $value
     */
    public function setProxyThroughServiceUrl($value = null)
    {
        $this->proxy_through_service_url = $value;
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
            throw new \InvalidArgumentException('Field "request_id" (tag 4) is required but has no value.');
        }

        $message = new self();
        $values = array_merge([
            'brokerServiceUrl'          => null,
            'brokerServiceUrlTls'       => null,
            'response'                  => null,
            'authoritative'             => false,
            'error'                     => null,
            'message'                   => null,
            'proxy_through_service_url' => false,
        ], $values);

        $message->setBrokerServiceUrl($values['brokerServiceUrl']);
        $message->setBrokerServiceUrlTls($values['brokerServiceUrlTls']);
        $message->setResponse($values['response']);
        $message->setRequestId($values['request_id']);
        $message->setAuthoritative($values['authoritative']);
        $message->setError($values['error']);
        $message->setMessage($values['message']);
        $message->setProxyThroughServiceUrl($values['proxy_through_service_url']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'  => 'CommandLookupTopicResponse',
            'field' => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name'   => 'brokerServiceUrl',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name'   => 'brokerServiceUrlTls',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'    => 3,
                    'name'      => 'response',
                    'type'      => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label'     => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.pulsar.proto.CommandLookupTopicResponse.LookupType',
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name'   => 'request_id',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'        => 5,
                    'name'          => 'authoritative',
                    'type'          => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label'         => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => false,
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'    => 6,
                    'name'      => 'error',
                    'type'      => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label'     => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.pulsar.proto.ServerError',
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name'   => 'message',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'        => 8,
                    'name'          => 'proxy_through_service_url',
                    'type'          => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label'         => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => false,
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
            throw new \UnexpectedValueException('Field "\\pulsar\\proto\\CommandLookupTopicResponse#request_id" (tag 4) is required but has no value.');
        }

        if ($this->brokerServiceUrl !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->brokerServiceUrl);
        }

        if ($this->brokerServiceUrlTls !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->brokerServiceUrlTls);
        }

        if ($this->response !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->response->value());
        }

        if ($this->request_id !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->request_id);
        }

        if ($this->authoritative !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeBool($stream, $this->authoritative);
        }

        if ($this->error !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->error->value());
        }

        if ($this->message !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeString($stream, $this->message);
        }

        if ($this->proxy_through_service_url !== null) {
            $writer->writeVarint($stream, 64);
            $writer->writeBool($stream, $this->proxy_through_service_url);
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

                $this->brokerServiceUrl = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->brokerServiceUrlTls = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->response = \Pulsar\Proto\CommandLookupTopicResponse\LookupType::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->request_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->authoritative = $reader->readBool($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->error = \Pulsar\Proto\ServerError::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->message = $reader->readString($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->proxy_through_service_url = $reader->readBool($stream);

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

        if ($this->brokerServiceUrl !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->brokerServiceUrl);
        }

        if ($this->brokerServiceUrlTls !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->brokerServiceUrlTls);
        }

        if ($this->response !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->response->value());
        }

        if ($this->request_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->request_id);
        }

        if ($this->authoritative !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->error !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->error->value());
        }

        if ($this->message !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->message);
        }

        if ($this->proxy_through_service_url !== null) {
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
        $this->brokerServiceUrl = null;
        $this->brokerServiceUrlTls = null;
        $this->response = null;
        $this->request_id = null;
        $this->authoritative = false;
        $this->error = null;
        $this->message = null;
        $this->proxy_through_service_url = false;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if (!$message instanceof \Pulsar\Proto\CommandLookupTopicResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->brokerServiceUrl = ( $message->brokerServiceUrl !== null ) ? $message->brokerServiceUrl : $this->brokerServiceUrl;
        $this->brokerServiceUrlTls = ( $message->brokerServiceUrlTls !== null ) ? $message->brokerServiceUrlTls : $this->brokerServiceUrlTls;
        $this->response = ( $message->response !== null ) ? $message->response : $this->response;
        $this->request_id = ( $message->request_id !== null ) ? $message->request_id : $this->request_id;
        $this->authoritative = ( $message->authoritative !== null ) ? $message->authoritative : $this->authoritative;
        $this->error = ( $message->error !== null ) ? $message->error : $this->error;
        $this->message = ( $message->message !== null ) ? $message->message : $this->message;
        $this->proxy_through_service_url = ( $message->proxy_through_service_url !== null ) ? $message->proxy_through_service_url : $this->proxy_through_service_url;
    }


}

