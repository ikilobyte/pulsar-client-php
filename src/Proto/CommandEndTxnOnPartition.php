<?php
/**
 * Generated by Protobuf protoc plugin.
 * File descriptor : PulsarApi.proto
 */


namespace Pulsar\Proto;

/**
 * Protobuf message : pulsar.proto.CommandEndTxnOnPartition
 */
class CommandEndTxnOnPartition extends \Protobuf\AbstractMessage
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
     * topic optional string = 4
     *
     * @var string
     */
    protected $topic = null;

    /**
     * txn_action optional enum = 5
     *
     * @var \Pulsar\Proto\TxnAction
     */
    protected $txn_action = null;

    /**
     * txnid_least_bits_of_low_watermark optional uint64 = 6
     *
     * @var int
     */
    protected $txnid_least_bits_of_low_watermark = null;

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
    public function setTopic($value = null)
    {
        $this->topic = $value;
    }

    /**
     * Check if 'txn_action' has a value
     *
     * @return bool
     */
    public function hasTxnAction()
    {
        return $this->txn_action !== null;
    }

    /**
     * Get 'txn_action' value
     *
     * @return \Pulsar\Proto\TxnAction
     */
    public function getTxnAction()
    {
        return $this->txn_action;
    }

    /**
     * Set 'txn_action' value
     *
     * @param \Pulsar\Proto\TxnAction $value
     */
    public function setTxnAction(?\Pulsar\Proto\TxnAction $value = null)
    {
        $this->txn_action = $value;
    }

    /**
     * Check if 'txnid_least_bits_of_low_watermark' has a value
     *
     * @return bool
     */
    public function hasTxnidLeastBitsOfLowWatermark()
    {
        return $this->txnid_least_bits_of_low_watermark !== null;
    }

    /**
     * Get 'txnid_least_bits_of_low_watermark' value
     *
     * @return int
     */
    public function getTxnidLeastBitsOfLowWatermark()
    {
        return $this->txnid_least_bits_of_low_watermark;
    }

    /**
     * Set 'txnid_least_bits_of_low_watermark' value
     *
     * @param int $value
     */
    public function setTxnidLeastBitsOfLowWatermark($value = null)
    {
        $this->txnid_least_bits_of_low_watermark = $value;
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
            'txnid_least_bits'                  => '0',
            'txnid_most_bits'                   => '0',
            'topic'                             => null,
            'txn_action'                        => null,
            'txnid_least_bits_of_low_watermark' => null,
        ], $values);

        $message->setRequestId($values['request_id']);
        $message->setTxnidLeastBits($values['txnid_least_bits']);
        $message->setTxnidMostBits($values['txnid_most_bits']);
        $message->setTopic($values['topic']);
        $message->setTxnAction($values['txn_action']);
        $message->setTxnidLeastBitsOfLowWatermark($values['txnid_least_bits_of_low_watermark']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'  => 'CommandEndTxnOnPartition',
            'field' => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name'   => 'request_id',
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
                    'number' => 4,
                    'name'   => 'topic',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'    => 5,
                    'name'      => 'txn_action',
                    'type'      => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label'     => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.pulsar.proto.TxnAction',
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name'   => 'txnid_least_bits_of_low_watermark',
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

        if ($this->request_id === null) {
            throw new \UnexpectedValueException('Field "\\pulsar\\proto\\CommandEndTxnOnPartition#request_id" (tag 1) is required but has no value.');
        }

        if ($this->request_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->request_id);
        }

        if ($this->txnid_least_bits !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->txnid_least_bits);
        }

        if ($this->txnid_most_bits !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->txnid_most_bits);
        }

        if ($this->topic !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->topic);
        }

        if ($this->txn_action !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->txn_action->value());
        }

        if ($this->txnid_least_bits_of_low_watermark !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->txnid_least_bits_of_low_watermark);
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
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->topic = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->txn_action = \Pulsar\Proto\TxnAction::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->txnid_least_bits_of_low_watermark = $reader->readVarint($stream);

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

        if ($this->txnid_least_bits !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->txnid_least_bits);
        }

        if ($this->txnid_most_bits !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->txnid_most_bits);
        }

        if ($this->topic !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->topic);
        }

        if ($this->txn_action !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->txn_action->value());
        }

        if ($this->txnid_least_bits_of_low_watermark !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->txnid_least_bits_of_low_watermark);
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
        $this->txnid_least_bits = '0';
        $this->txnid_most_bits = '0';
        $this->topic = null;
        $this->txn_action = null;
        $this->txnid_least_bits_of_low_watermark = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if (!$message instanceof \Pulsar\Proto\CommandEndTxnOnPartition) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->request_id = ( $message->request_id !== null ) ? $message->request_id : $this->request_id;
        $this->txnid_least_bits = ( $message->txnid_least_bits !== null ) ? $message->txnid_least_bits : $this->txnid_least_bits;
        $this->txnid_most_bits = ( $message->txnid_most_bits !== null ) ? $message->txnid_most_bits : $this->txnid_most_bits;
        $this->topic = ( $message->topic !== null ) ? $message->topic : $this->topic;
        $this->txn_action = ( $message->txn_action !== null ) ? $message->txn_action : $this->txn_action;
        $this->txnid_least_bits_of_low_watermark = ( $message->txnid_least_bits_of_low_watermark !== null ) ? $message->txnid_least_bits_of_low_watermark : $this->txnid_least_bits_of_low_watermark;
    }


}

