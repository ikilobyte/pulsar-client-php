<?php
/**
 * Generated by Protobuf protoc plugin.
 * File descriptor : PulsarApi.proto
 */


namespace Pulsar\Proto\CommandAck;

/**
 * Protobuf enum : pulsar.proto.CommandAck.AckType
 */
class AckType extends \Protobuf\Enum
{

    /**
     * Individual = 0
     */
    const Individual_VALUE = 0;

    /**
     * Cumulative = 1
     */
    const Cumulative_VALUE = 1;

    /**
     * @var \Pulsar\Proto\CommandAck\AckType
     */
    protected static $Individual = null;

    /**
     * @var \Pulsar\Proto\CommandAck\AckType
     */
    protected static $Cumulative = null;

    /**
     * @return \Pulsar\Proto\CommandAck\AckType
     */
    public static function Individual()
    {
        if (self::$Individual !== null) {
            return self::$Individual;
        }

        return self::$Individual = new self('Individual', self::Individual_VALUE);
    }

    /**
     * @return \Pulsar\Proto\CommandAck\AckType
     */
    public static function Cumulative()
    {
        if (self::$Cumulative !== null) {
            return self::$Cumulative;
        }

        return self::$Cumulative = new self('Cumulative', self::Cumulative_VALUE);
    }

    /**
     * @param int $value
     * @return \Pulsar\Proto\CommandAck\AckType
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0:
                return self::Individual();
            case 1:
                return self::Cumulative();
            default:
                return null;
        }
    }


}
