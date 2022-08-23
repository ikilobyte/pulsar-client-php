<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/27
 * Time: 10:56 PM
 */

namespace Pulsar\Util;

use Pulsar\Exception\RuntimeException;
use Pulsar\Proto\MessageIdData;

/**
 * Class Helper
 *
 * @package Pulsar\Util
 */
class Helper
{

    /**
     * @var int
     */
    protected static $requestID = 0;


    /**
     * @var int
     */
    protected static $seqID = 0;


    /**
     * @param string $bytes
     * @return mixed
     */
    public static function readUint32(string $bytes)
    {
        return unpack('Nsize', $bytes)['size'];
    }

    /**
     * @param string $bytes
     * @return mixed
     */
    public static function readUint16(string $bytes)
    {
        return unpack('nsize', $bytes)['size'];
    }


    /**
     * @param int $number
     * @return false|string
     */
    public static function writeUint32(int $number)
    {
        return pack('N', $number);
    }


    /**
     * @param int $number
     * @return false|string
     */
    public static function writeUint16(int $number)
    {
        return pack('n', $number);
    }


    /**
     * @param MessageIdData $idData
     * @return string
     */
    public static function serializeID(MessageIdData $idData): string
    {
        return sprintf('%s:%s:%s', $idData->getLedgerId(), $idData->getEntryId(), max($idData->getPartition(), 0));
    }


    /**
     * @param string $id
     * @return MessageIdData
     * @throws RuntimeException
     */
    public static function unserializeID(string $id): MessageIdData
    {
        if (substr_count($id, ':') != 2) {
            throw new RuntimeException('Wrong message ID format');
        }
        
        list($ledgerID, $entryID, $partition) = explode(':', $id);
        $id = new MessageIdData();
        $id->setLedgerId($ledgerID);
        $id->setEntryId($entryID);
        $id->setPartition($partition);
        return $id;
    }


    /**
     * @return int
     */
    public static function getRequestID(): int
    {
        return ++self::$requestID;
    }


    /**
     * @return int
     */
    public static function getSequenceId(): int
    {
        return (int)( microtime(true) * 1000 ) + ++self::$seqID;
    }
}