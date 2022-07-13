<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/29
 * Time: 3:47 PM
 */
declare( strict_types = 1 );


namespace Pulsar\Util;

use Pulsar\Proto\MessageIdData;


/**
 * Class Tracking
 *
 * @package Pulsar\Util
 */
class Tracking
{

    /**
     * @var array
     */
    protected static $inner = [];


    /**
     * @param MessageIdData $idData
     * @param int $value
     * @return void
     */
    public static function add(MessageIdData $idData, int $value)
    {
        self::$inner[ Helper::serializeID($idData) ] = $value;
    }


    /**
     * @param MessageIdData $idData
     * @param int $batchIdx
     * @return bool
     */
    public static function tryAck(MessageIdData $idData, int $batchIdx): bool
    {
        $key = Helper::serializeID($idData);
        self::$inner[ $key ] -= $batchIdx;
        return self::$inner[ $key ] == 0;
    }
}