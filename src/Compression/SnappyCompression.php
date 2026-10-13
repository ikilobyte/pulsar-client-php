<?php
declare( strict_types = 1 );

namespace Pulsar\Compression;

use Pulsar\Exception\RuntimeException;
use Pulsar\Proto\CompressionType;

/**
 * Snappy Compression
 *
 * Pulsar uses the raw Snappy format (no framing), which matches php-ext-snappy.
 *
 * @see https://github.com/kjdev/php-ext-snappy
 */
class SnappyCompression implements Compression
{

    /**
     * @throws RuntimeException
     */
    public function __construct()
    {
        if (!extension_loaded('snappy')) {
            throw new RuntimeException('extension snappy not install');
        }
    }

    /**
     * @param string $data
     * @return string
     * @throws RuntimeException
     */
    public function encode(string $data): string
    {
        $compressed = snappy_compress($data);
        if ($compressed === false) {
            throw new RuntimeException('snappy compress failed');
        }

        return $compressed;
    }


    /**
     * @param string $data
     * @param int $originSize
     * @return string
     * @throws RuntimeException
     */
    public function decode(string $data, int $originSize): string
    {
        $decompressed = snappy_uncompress($data);
        if ($decompressed === false) {
            throw new RuntimeException('snappy decompress failed');
        }

        return $decompressed;
    }


    /**
     * @return CompressionType
     */
    public function getType(): CompressionType
    {
        return CompressionType::SNAPPY();
    }
}
