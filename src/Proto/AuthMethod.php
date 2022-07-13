<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * AuthMethod enum
 */
final class AuthMethod
{
    const AuthMethodNone = 0;
    const AuthMethodYcaV1 = 1;
    const AuthMethodAthens = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'AuthMethodNone' => self::AuthMethodNone,
            'AuthMethodYcaV1' => self::AuthMethodYcaV1,
            'AuthMethodAthens' => self::AuthMethodAthens,
        );
    }
}
}