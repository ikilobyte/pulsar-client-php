<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * SubType enum embedded in CommandSubscribe message
 */
final class CommandSubscribe_SubType
{
    const Exclusive = 0;
    const Shared = 1;
    const Failover = 2;
    const Key_Shared = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'Exclusive' => self::Exclusive,
            'Shared' => self::Shared,
            'Failover' => self::Failover,
            'Key_Shared' => self::Key_Shared,
        );
    }
}
}