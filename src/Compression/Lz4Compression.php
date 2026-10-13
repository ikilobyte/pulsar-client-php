<?php
declare( strict_types = 1 );

namespace Pulsar\Compression;

use Pulsar\Exception\RuntimeException;
use Pulsar\Proto\CompressionType;

/**
 * LZ4 Compression
 *
 * Pulsar uses the raw LZ4 block format and stores the uncompressed size in MessageMetadata,
 * while php-ext-lz4 prepends / expects a 4-byte length header, so the header is stripped on
 * encode and padded on decode.
 *
 * @see https://github.com/kjdev/php-ext-lz4
 */
class Lz4Compression implements Compression
{

    /**
     * @throws RuntimeException
     */
    public function __construct()
    {
        if (!extension_loaded('lz4')) {
            throw new RuntimeException('extension lz4 not install');
        }
    }

    /**
     * @param string $data
     * @return string
     * @throws RuntimeException
     */
    public function encode(string $data): string
    {
        $compressed = lz4_compress($data);
        if ($compressed === false) {
            throw new RuntimeException('lz4 compress failed');
        }

        // remove the 4-byte length header added by php-ext-lz4
        return substr($compressed, 4);
    }


    /**
     * @param string $data
     * @param int $originSize
     * @return string
     * @throws RuntimeException
     */
    public function decode(string $data, int $originSize): string
    {
        // php-ext-lz4 treats an empty output as an error
        if ($originSize === 0) {
            return '';
        }

        // php-ext-lz4 always skips the first 4 bytes (offset 0 is treated as 4), so pad them
        $decompressed = lz4_uncompress("\0\0\0\0" . $data, $originSize);
        if ($decompressed === false) {
            throw new RuntimeException('lz4 decompress failed');
        }

        return $decompressed;
    }


    /**
     * @return CompressionType
     */
    public function getType(): CompressionType
    {
        return CompressionType::LZ4();
    }
}
