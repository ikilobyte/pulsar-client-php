<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * InitialPosition enum embedded in CommandSubscribe message
 */
final class CommandSubscribe_InitialPosition
{
    const Latest = 0;
    const Earliest = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'Latest' => self::Latest,
            'Earliest' => self::Earliest,
        );
    }
}
}