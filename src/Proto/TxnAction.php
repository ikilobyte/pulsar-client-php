<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * TxnAction enum
 */
final class TxnAction
{
    const COMMIT = 0;
    const ABORT = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'COMMIT' => self::COMMIT,
            'ABORT' => self::ABORT,
        );
    }
}
}