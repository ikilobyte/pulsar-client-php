<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CompressionType enum
 */
final class CompressionType
{
    const NONE = 0;
    const LZ4 = 1;
    const ZLIB = 2;
    const ZSTD = 3;
    const SNAPPY = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'NONE' => self::NONE,
            'LZ4' => self::LZ4,
            'ZLIB' => self::ZLIB,
            'ZSTD' => self::ZSTD,
            'SNAPPY' => self::SNAPPY,
        );
    }
}
}