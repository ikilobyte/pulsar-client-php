<?php
/**
 * Created by PhpStorm
 * User: Sunny、
 * Date: 2023/5/30
 * Time: 16:54
 */

namespace Pulsar\IO;


use Swoole\Coroutine\Channel;

/**
 * Class ChannelManager
 *
 * @package Pulsar\IO
 */
final class ChannelManager
{

    /**
     * @var array
     */
    private static $inner = [];


    /**
     * @param int $fd
     * @param int $size
     * @return void
     */
    public static function init(int $fd, int $size = 10)
    {
        self::$inner[ $fd ] = new Channel($size);
    }


    /**
     * @param int $fd
     * @return Channel
     */
    public static function get(int $fd): Channel
    {
        return self::$inner[ $fd ];
    }
}