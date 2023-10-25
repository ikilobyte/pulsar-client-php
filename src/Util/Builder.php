<?php
/**
 * Created by PhpStorm
 * User: Sunny、
 * Date: 2023/10/25
 * Time: 11:24
 */

namespace Pulsar\Util;


use Google\CRC32\CRC32;
use Protobuf\AbstractMessage;
use Pulsar\Exception\OptionsException;
use Pulsar\Exception\RuntimeException;
use Pulsar\MessageOptions;
use Pulsar\PartitionProducer;
use Pulsar\ProducerOptions;
use Pulsar\Proto\BaseCommand;
use Pulsar\Proto\BaseCommand\Type;
use Pulsar\Proto\CommandSend;
use Pulsar\Proto\KeyValue;
use Pulsar\Proto\MessageMetadata;
use Pulsar\Proto\SingleMessageMetadata;
use Pulsar\Schema\ISchema;

/**
 * Class AbstractBuilder
 *
 * @package Pulsar\Builder
 */
class Builder
{
    /**
     * @var PartitionProducer
     */
    protected $producer;

    /**
     * @var MessageOptions
     */
    protected $messageOptions;


    /**
     * @var ProducerOptions
     */
    protected $producerOptions;


    /**
     * @var Buffer
     */
    protected $buffer;


    /**
     * @var array<string>
     */
    protected $messages;

    /**
     * @var int
     */
    protected $sequenceID;


    /**
     * @var ISchema|null
     */
    protected $schema;

    /**
     * @var string
     */
    protected $uncompressedPacket = '';


    /**
     * @param PartitionProducer $producer
     * @param ProducerOptions $producerOptions
     * @param MessageOptions $messageOptions
     * @param array $messages
     * @param int $sequenceID
     */
    public function __construct(
        PartitionProducer $producer,
        ProducerOptions   $producerOptions,
        MessageOptions    $messageOptions,
        array             $messages,
        int               $sequenceID)
    {
        $this->producer = $producer;
        $this->producerOptions = $producerOptions;
        $this->messageOptions = $messageOptions;
        $this->messages = $messages;
        $this->sequenceID = $sequenceID;

        // schema
        $this->schema = $this->producerOptions->getSchema();

        // buffer
        $this->buffer = new Buffer();
    }


    /**
     * @throws OptionsException
     * @throws RuntimeException
     * @throws \Exception
     * @see https://pulsar.apache.org/docs/3.1.x/developing-binary-protocol/
     */
    public function resolve(): Buffer
    {
        // BaseCommand
        $baseCommand = new BaseCommand();
        $baseCommand->setType(Type::SEND());

        // CommandSend
        $commandSend = new CommandSend();
        $commandSend->setProducerId($this->producer->getID());
        $commandSend->setSequenceId($this->sequenceID);
        $commandSend->setNumMessages(1);
        $commandSend->setTxnidLeastBits(null);
        $commandSend->setTxnidMostBits(null);

        // set Send Command To BaseCommand
        $baseCommand->setSend($commandSend);

        // serialize BaseCommand
        $baseCommandBytes = $baseCommand->toStream()->getContents();

        // [commandSize]
        $this->buffer->writeUint32(strlen($baseCommandBytes));

        // [command]
        $this->buffer->write($baseCommandBytes);

        // [magicNumber]
        $this->buffer->writeUint16(0x0e01);

        // support zlib、zstd、none
        $compressionProvider = $this->producerOptions->getCompression();

        // metadata
        $metadata = new MessageMetadata();
        $metadata->setProducerName($this->producer->getName());
        $metadata->setSequenceId(0);
        $metadata->setPublishTime(time() * 1000);
        $metadata->setNumMessagesInBatch(count($this->messages));
        $metadata->setCompression($compressionProvider->getType());
        $metadata->setPartitionKey($this->messageOptions->getKey());
        $metadata->setDeliverAtTime($this->messageOptions->getDeliverAtTime());

        // schema payload encode
        foreach ($this->messages as $payload) {
            if ($this->schema) {
                $payload = $this->schema->encode($payload);
            }
            $this->uncompressedPacket .= $this->singleMessage($payload);
        }

        $metadata->setUncompressedSize(strlen($this->uncompressedPacket));
        $msgMetadataBytes = $metadata->toStream()->getContents();
        $msgMetadataSize = strlen($msgMetadataBytes);

        // make checksum bytes
        $compressionPacket = $compressionProvider->encode($this->uncompressedPacket);
        $checksumBuffer = new Buffer();
        $checksumBuffer->writeUint32($msgMetadataSize);                                              // [metadataSize]
        $checksumBuffer->write($msgMetadataBytes);                                                   // [metadata]
        $checksumBuffer->write($compressionPacket);                                                  // [payload]

        // [checksum] === [metadataSize] [metadata] [payload]
        $this->buffer->writeUint32($this->getChecksum($checksumBuffer));

        // [metadataSize]
        $this->buffer->writeUint32($msgMetadataSize);

        // [metadata]
        $this->buffer->write($msgMetadataBytes);

        // [payload]
        $this->buffer->write($compressionPacket);

        // [totalSize]
        $this->buffer->put(Helper::writeUint32($this->buffer->length()), 0);

        return $this->buffer;
    }


    /**
     * @param AbstractMessage $message
     * @param MessageOptions $options
     * @return void
     * @throws OptionsException
     */
    protected function appendProperties(AbstractMessage &$message, MessageOptions $options)
    {
        foreach ($options->getProperties() as $key => $val) {
            $kv = new KeyValue();
            $kv->setKey($key);
            if (is_array($val)) {
                $val = json_encode($val, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
            }
            $kv->setValue($val);

            /**
             * @var $message MessageMetadata|SingleMessageMetadata
             */
            $message->addProperties($kv);
        }
    }


    /**
     * @param $payload
     * @return string
     * @throws OptionsException
     * SingleMessageMetadata
     */
    protected function singleMessage($payload): string
    {
        // singleMessageMetadata
        $singleMsgMetadata = new SingleMessageMetadata();
        $singleMsgMetadata->setPayloadSize(strlen($payload));
        $singleMsgMetadata->setEventTime(time() * 1000);
        $singleMsgMetadata->setPartitionKey($this->messageOptions->getKey());
        $this->appendProperties($singleMsgMetadata, $this->messageOptions);
        $singleMsgMetadataBytes = $singleMsgMetadata->toStream()->getContents();

        // [metadataSize] [metadata] [payload]
        $packet = '';
        $packet .= Helper::writeUint32(strlen($singleMsgMetadataBytes));    // [metadataSize]
        $packet .= $singleMsgMetadataBytes;                                 // [metadata]
        $packet .= $payload;

        return $packet;
    }



    /**
     * @param Buffer $buffer
     * @return float|int
     */
    protected function getChecksum(Buffer $buffer)
    {
        $crc = CRC32::create(CRC32::CASTAGNOLI);
        $crc->update($buffer->bytes());
        return hexdec($crc->hash());
    }
}