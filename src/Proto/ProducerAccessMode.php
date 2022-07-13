<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * ProducerAccessMode enum
 */
final class ProducerAccessMode
{
    const Shared = 0;
    const Exclusive = 1;
    const WaitForExclusive = 2;
    const ExclusiveWithFencing = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'Shared' => self::Shared,
            'Exclusive' => self::Exclusive,
            'WaitForExclusive' => self::WaitForExclusive,
            'ExclusiveWithFencing' => self::ExclusiveWithFencing,
        );
    }
}
}