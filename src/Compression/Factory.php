<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/26
 * Time: 9:23 PM
 */

namespace Pulsar\Compression;

use Pulsar\Exception\RuntimeException;
use Pulsar\Proto\CompressionType;

/**
 * Class Factory
 *
 * @package Pulsar\Compression
 */
class Factory
{

    /**
     * @param int $type
     * @return Compression
     * @throws RuntimeException
     */
    public static function create(int $type): Compression
    {
        switch ($type) {
            case CompressionType::NONE_VALUE:
                return new NoneCompression();
            case CompressionType::ZLIB_VALUE:
                return new ZlibCompression();
            default:
                throw new RuntimeException('only supported zlib compression');
        }
    }
}