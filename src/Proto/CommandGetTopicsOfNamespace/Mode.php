<?php
/**
 * Generated by Protobuf protoc plugin.
 * File descriptor : PulsarApi.proto
 */


namespace Pulsar\Proto\CommandGetTopicsOfNamespace;

/**
 * Protobuf enum : pulsar.proto.CommandGetTopicsOfNamespace.Mode
 */
class Mode extends \Protobuf\Enum
{

    /**
     * PERSISTENT = 0
     */
    const PERSISTENT_VALUE = 0;

    /**
     * NON_PERSISTENT = 1
     */
    const NON_PERSISTENT_VALUE = 1;

    /**
     * ALL = 2
     */
    const ALL_VALUE = 2;

    /**
     * @var \Pulsar\Proto\CommandGetTopicsOfNamespace\Mode
     */
    protected static $PERSISTENT = null;

    /**
     * @var \Pulsar\Proto\CommandGetTopicsOfNamespace\Mode
     */
    protected static $NON_PERSISTENT = null;

    /**
     * @var \Pulsar\Proto\CommandGetTopicsOfNamespace\Mode
     */
    protected static $ALL = null;

    /**
     * @return \Pulsar\Proto\CommandGetTopicsOfNamespace\Mode
     */
    public static function PERSISTENT()
    {
        if (self::$PERSISTENT !== null) {
            return self::$PERSISTENT;
        }

        return self::$PERSISTENT = new self('PERSISTENT', self::PERSISTENT_VALUE);
    }

    /**
     * @return \Pulsar\Proto\CommandGetTopicsOfNamespace\Mode
     */
    public static function NON_PERSISTENT()
    {
        if (self::$NON_PERSISTENT !== null) {
            return self::$NON_PERSISTENT;
        }

        return self::$NON_PERSISTENT = new self('NON_PERSISTENT', self::NON_PERSISTENT_VALUE);
    }

    /**
     * @return \Pulsar\Proto\CommandGetTopicsOfNamespace\Mode
     */
    public static function ALL()
    {
        if (self::$ALL !== null) {
            return self::$ALL;
        }

        return self::$ALL = new self('ALL', self::ALL_VALUE);
    }

    /**
     * @param int $value
     * @return \Pulsar\Proto\CommandGetTopicsOfNamespace\Mode
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0:
                return self::PERSISTENT();
            case 1:
                return self::NON_PERSISTENT();
            case 2:
                return self::ALL();
            default:
                return null;
        }
    }


}
