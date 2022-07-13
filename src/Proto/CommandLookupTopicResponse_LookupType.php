<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * LookupType enum embedded in CommandLookupTopicResponse message
 */
final class CommandLookupTopicResponse_LookupType
{
    const Redirect = 0;
    const Connect = 1;
    const Failed = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'Redirect' => self::Redirect,
            'Connect' => self::Connect,
            'Failed' => self::Failed,
        );
    }
}
}