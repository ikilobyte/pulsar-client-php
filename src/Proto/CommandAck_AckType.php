<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * AckType enum embedded in CommandAck message
 */
final class CommandAck_AckType
{
    const Individual = 0;
    const Cumulative = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'Individual' => self::Individual,
            'Cumulative' => self::Cumulative,
        );
    }
}
}