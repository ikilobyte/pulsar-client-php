<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * Mode enum embedded in CommandGetTopicsOfNamespace message
 */
final class CommandGetTopicsOfNamespace_Mode
{
    const PERSISTENT = 0;
    const NON_PERSISTENT = 1;
    const ALL = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'PERSISTENT' => self::PERSISTENT,
            'NON_PERSISTENT' => self::NON_PERSISTENT,
            'ALL' => self::ALL,
        );
    }
}
}