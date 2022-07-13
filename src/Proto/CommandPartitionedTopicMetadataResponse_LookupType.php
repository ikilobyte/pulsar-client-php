<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * LookupType enum embedded in CommandPartitionedTopicMetadataResponse message
 */
final class CommandPartitionedTopicMetadataResponse_LookupType
{
    const Success = 0;
    const Failed = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'Success' => self::Success,
            'Failed' => self::Failed,
        );
    }
}
}