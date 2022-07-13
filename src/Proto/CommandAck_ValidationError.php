<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * ValidationError enum embedded in CommandAck message
 */
final class CommandAck_ValidationError
{
    const UncompressedSizeCorruption = 0;
    const DecompressionError = 1;
    const ChecksumMismatch = 2;
    const BatchDeSerializeError = 3;
    const DecryptionError = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UncompressedSizeCorruption' => self::UncompressedSizeCorruption,
            'DecompressionError' => self::DecompressionError,
            'ChecksumMismatch' => self::ChecksumMismatch,
            'BatchDeSerializeError' => self::BatchDeSerializeError,
            'DecryptionError' => self::DecryptionError,
        );
    }
}
}