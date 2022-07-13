<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * KeySharedMode enum
 */
final class KeySharedMode
{
    const AUTO_SPLIT = 0;
    const STICKY = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'AUTO_SPLIT' => self::AUTO_SPLIT,
            'STICKY' => self::STICKY,
        );
    }
}
}