<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/26
 * Time: 11:26 AM
 */

namespace Pulsar\Util;

use Exception;
use Google\CRC32\CRC32;
use Protobuf\AbstractMessage;
use Pulsar\Compression\Factory;
use Pulsar\Exception\RuntimeException;
use Pulsar\Message;
use Pulsar\Proto\BaseCommand;
use Pulsar\Proto\BaseCommand\Type;
use Pulsar\Proto\CommandMessage;
use Pulsar\Proto\MessageMetadata;
use Pulsar\Proto\SingleMessageMetadata;

/**
 * Class Packer
 *
 * @package Pulsar\Util
 */
class Packer
{

    /**
     * @param Type $type
     * @param AbstractMessage $message
     * @param bool $simpleFrame
     * @return Buffer
     */
    public static function encode(Type $type, AbstractMessage $message, bool $simpleFrame = true): Buffer
    {
        $baseCommand = new BaseCommand();
        $baseCommand->setType($type);
        call_user_func([$baseCommand, TypeParser::parseMethodName($type)], $message);

        // [totalSize] [commandSize] [command]
        $cmdBytes = $baseCommand->toStream()->getContents();
        $cmdSize = strlen($cmdBytes);
        $buffer = new Buffer();
        $buffer->writeUint32($cmdSize + 4);
        $buffer->writeUint32($cmdSize);
        $buffer->write($cmdBytes);

        return $buffer;
    }


    /**
     * @param CommandMessage $commandMessage
     * @param Buffer $buffer
     * @param string $topic
     * @return array
     * @throws RuntimeException
     * @throws Exception
     */
    public static function decode(CommandMessage $commandMessage, Buffer $buffer, string $topic): array
    {
        // [metadataSize] [metadata] [payload]
        $checksumBytes = '';

        // [magicNumber]
        $magicNumber = $buffer->readUint16();

        // [checksum]
        $checksum = $buffer->readUint32();

        // [metadataSize]
        $metadataSizeBytes = $buffer->read(4);
        $checksumBytes .= $metadataSizeBytes;
        $metadataSize = unpack('Nsize', $metadataSizeBytes)['size'];

        // [metadata]
        $metadataBytes = $buffer->read($metadataSize);
        $checksumBytes .= $metadataBytes;

        // unSerialize
        $metadata = new MessageMetadata($metadataBytes);

        // [payloads]
        $payloadBytes = $buffer->read($buffer->readableLength());
        $checksumBytes .= $payloadBytes;

        // checksum verify fail
        if ($checksum != self::calculateChecksum($checksumBytes)) {
            throw new RuntimeException('checksum verify failed');
        }

        $compressionProvider = Factory::create($metadata->getCompression()->value());
        $decodePayload = $compressionProvider->decode($payloadBytes, $metadata->getUncompressedSize());
        $buffer = new Buffer($decodePayload);

        $messages = [];
        $batchNums = $metadata->getNumMessagesInBatch();
        // The default value is 1
        if ($batchNums <= 0) {
            $batchNums = 1;
        }
        $batchIdx = 0;
        $messageIDData = $commandMessage->getMessageId();
        $trackingValue = 0;
        while ($buffer->readableLength()) {
            if ($metadata->hasNumMessagesInBatch()) {
                list($properties, $payload) = self::readSingleMessage($buffer);
            } else {
                $payload = self::readMessage($buffer);
                $properties = $metadata->getPropertiesList();
            }

            $messages[] = new Message(
                $messageIDData,
                $commandMessage->getConsumerId(),
                (string)$metadata->getPublishTime(),
                $topic,
                $payload,
                $batchNums,
                $batchIdx,
                $properties
            );
            $trackingValue += $batchIdx;
            $batchIdx += 1;
        }

        Tracking::add($messageIDData, $trackingValue);
        return $messages;
    }


    /**
     * @param string $bytes
     * @return float|int
     */
    protected static function calculateChecksum(string $bytes)
    {
        $hc = CRC32::create(CRC32::CASTAGNOLI);
        $hc->update($bytes);
        return hexdec($hc->hash());
    }



    /**
     * @param Buffer $buffer
     * @return false|string
     */
    protected static function readMessage(Buffer $buffer)
    {
        // Format [payload]
        return $buffer->read($buffer->readableLength());
    }



    /**
     * @param Buffer $buffer
     * @return array
     */
    protected static function readSingleMessage(Buffer $buffer): array
    {
        // Format [metadataSize] [metadata] [payload]

        // [metadataSize]
        $size = $buffer->readUint32();

        // [metadata]
        $singleMetadataBuffer = $buffer->read($size);
        $singleMetadata = new SingleMessageMetadata($singleMetadataBuffer);

        // [payload]
        $payload = $buffer->read($singleMetadata->getPayloadSize());
        return [$singleMetadata->getPropertiesList(), $payload];
    }
}