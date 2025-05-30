<?php
/**
 * Generated by Protobuf protoc plugin.
 * File descriptor : PulsarApi.proto
 */


namespace Pulsar\Proto;

/**
 * Protobuf message : pulsar.proto.CommandAuthResponse
 */
class CommandAuthResponse extends \Protobuf\AbstractMessage
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
     * client_version optional string = 1
     *
     * @var string
     */
    protected $client_version = null;

    /**
     * response optional message = 2
     *
     * @var \Pulsar\Proto\AuthData
     */
    protected $response = null;

    /**
     * protocol_version optional int32 = 3
     *
     * @var int
     */
    protected $protocol_version = null;

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
    public function setClientVersion($value = null)
    {
        $this->client_version = $value;
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
     * @return \Pulsar\Proto\AuthData
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Set 'response' value
     *
     * @param \Pulsar\Proto\AuthData $value
     */
    public function setResponse(?\Pulsar\Proto\AuthData $value = null)
    {
        $this->response = $value;
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
        $message = new self();
        $values = array_merge([
            'client_version'   => null,
            'response'         => null,
            'protocol_version' => '0',
        ], $values);

        $message->setClientVersion($values['client_version']);
        $message->setResponse($values['response']);
        $message->setProtocolVersion($values['protocol_version']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'  => 'CommandAuthResponse',
            'field' => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name'   => 'client_version',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'    => 2,
                    'name'      => 'response',
                    'type'      => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label'     => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.pulsar.proto.AuthData',
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'        => 3,
                    'name'          => 'protocol_version',
                    'type'          => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label'         => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '0',
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

        if ($this->client_version !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->client_version);
        }

        if ($this->response !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->response->serializedSize($sizeContext));
            $this->response->writeTo($context);
        }

        if ($this->protocol_version !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->protocol_version);
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
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize = $reader->readVarint($stream);
                $innerMessage = new \Pulsar\Proto\AuthData();

                $this->response = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->protocol_version = $reader->readVarint($stream);

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

        if ($this->response !== null) {
            $innerSize = $this->response->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->protocol_version !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->protocol_version);
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
        $this->response = null;
        $this->protocol_version = '0';
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if (!$message instanceof \Pulsar\Proto\CommandAuthResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->client_version = ( $message->client_version !== null ) ? $message->client_version : $this->client_version;
        $this->response = ( $message->response !== null ) ? $message->response : $this->response;
        $this->protocol_version = ( $message->protocol_version !== null ) ? $message->protocol_version : $this->protocol_version;
    }


}

