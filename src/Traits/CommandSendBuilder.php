<?php
/**
 * Created by PhpStorm
 * User: Sunny、
 * Date: 2023/1/3
 * Time: 17:34
 */

namespace Pulsar\Traits;


use Pulsar\MessageOptions;
use Pulsar\PartitionProducer;
use Pulsar\Proto\BaseCommand;
use Pulsar\Proto\BaseCommand\Type;
use Pulsar\Proto\CommandSend;
use Pulsar\Proto\MessageMetadata;
use Pulsar\Proto\SingleMessageMetadata;
use Pulsar\Util\Buffer;
use Pulsar\Util\Helper;

/**
 * Class MessageBuilder
 *
 * @package Pulsar\Traits
 */
trait CommandSendBuilder
{

    /**
     * @param PartitionProducer $producer
     * @param string $payload
     * @param MessageOptions $messageOptions
     * @param int $sequenceID
     * @return Buffer
     * @throws \Exception
     */
    protected function buildSendBuffer(
        PartitionProducer $producer,
        string            $payload,
        MessageOptions    $messageOptions,
        int               $sequenceID
    ): Buffer
    {
        // [totalSize] [commandSize] [command] [magicNumber] [checksum] [metadataSize] [metadata] [payload]

        $buffer = new Buffer();

        // BaseCommand
        $baseCommand = new BaseCommand();
        $baseCommand->setType(Type::SEND());

        // CommandSend
        $commandSend = new CommandSend();
        $commandSend->setProducerId($producer->getID());
        $commandSend->setSequenceId($sequenceID);
        $commandSend->setNumMessages(1);
        $commandSend->setTxnidLeastBits(null);
        $commandSend->setTxnidMostBits(null);

        $baseCommand->setSend($commandSend);

        // serialize BaseCommand
        $baseCommandBytes = $baseCommand->toStream()->getContents();

        // [commandSize]
        $buffer->writeUint32(strlen($baseCommandBytes));

        // [command]
        $buffer->write($baseCommandBytes);

        // [magicNumber]
        $buffer->writeUint16(0x0e01);

        // only support zlib、none
        $compressionProvider = $this->options->getCompression();

        // metadata
        $msgMetadata = new MessageMetadata();
        $msgMetadata->setProducerName($producer->getName());
        $msgMetadata->setSequenceId(0);
        $msgMetadata->setPublishTime(time() * 1000);
        $msgMetadata->setNumMessagesInBatch(1);
        $msgMetadata->setCompression($compressionProvider->getType());
        $msgMetadata->setPartitionKey($messageOptions->getKey());
        $msgMetadata->setDeliverAtTime($messageOptions->getDeliverAtTime());

        // singleMessageMetadata
        $singleMsgMetadata = new SingleMessageMetadata();
        $singleMsgMetadata->setPayloadSize(strlen($payload));
        $singleMsgMetadata->setEventTime(time() * 1000);
        $singleMsgMetadata->setPartitionKey($messageOptions->getKey());
        $this->appendProperties($singleMsgMetadata, $messageOptions);
        $singleMsgMetadataBytes = $singleMsgMetadata->toStream()->getContents();

        // [metadataSize] [metadata] [payload]
        $packet = '';
        $packet .= Helper::writeUint32(strlen($singleMsgMetadataBytes));    // [metadataSize]
        $packet .= $singleMsgMetadataBytes;                                 // [metadata]
        $packet .= $payload;                                                // [payload]

        $msgMetadata->setUncompressedSize(strlen($packet));
        $msgMetadataBytes = $msgMetadata->toStream()->getContents();

        $msgMetadataSize = strlen($msgMetadataBytes);


        // make checksum bytes
        $compressionPacket = $compressionProvider->encode($packet);
        $checksumBuffer = new Buffer();
        $checksumBuffer->writeUint32($msgMetadataSize);                                           // [metadataSize]
        $checksumBuffer->write($msgMetadataBytes);                                                // [metadata]
        $checksumBuffer->write($compressionPacket);                                               // [payload]

        // [checksum] === [metadataSize] [metadata] [payload]
        $buffer->writeUint32($this->getChecksum($checksumBuffer));

        // [metadataSize]
        $buffer->writeUint32($msgMetadataSize);

        // [metadata]
        $buffer->write($msgMetadataBytes);

        // [payload]
        $buffer->write($compressionPacket);

        // [totalSize]
        $buffer->put(Helper::writeUint32($buffer->length()), 0);

        return $buffer;
    }
}