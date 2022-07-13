<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/26
 * Time: 9:22 PM
 */

namespace Pulsar\Compression;

use Pulsar\Exception\RuntimeException;

/**
 * Class ZlibCompression
 *
 * @package Pulsar\Compression
 */
class ZlibCompression implements Compression
{

    /**
     * @throws RuntimeException
     */
    public function __construct()
    {
        if (!extension_loaded('zlib')) {
            throw new RuntimeException('extension zlib not install');
        }
    }

    /**
     * @param string $data
     * @return string
     */
    public function encode(string $data): string
    {
        return zlib_encode($data, ZLIB_ENCODING_DEFLATE);
    }


    /**
     * @param string $data
     * @param int $originSize
     * @return string
     */
    public function decode(string $data, int $originSize): string
    {
        return zlib_decode($data, $originSize);
    }

    
    /**
     * @return int
     */
    public function getType(): int
    {
        return self::ZLIB;
    }
}