<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/8/15
 * Time: 3:11 PM
 */
declare( strict_types = 1 );

namespace Pulsar\Compression;

use Pulsar\Exception\RuntimeException;
use Pulsar\Proto\CompressionType;



/**
 * Class ZstdCompression
 *
 * @package Pulsar\Compression
 */
class ZstdCompression implements Compression
{

    /**
     * @throws RuntimeException
     */
    public function __construct()
    {
        if (!extension_loaded('zstd')) {
            throw new RuntimeException('extension zstd not install');
        }
    }

    /**
     * @param string $data
     * @return string
     */
    public function encode(string $data): string
    {
        return zstd_compress($data);
    }


    /**
     * @param string $data
     * @param int $originSize
     * @return string
     */
    public function decode(string $data, int $originSize): string
    {
        return zstd_uncompress($data);
    }


    /**
     * @return CompressionType
     */
    public function getType(): CompressionType
    {
        return CompressionType::ZSTD();
    }
}