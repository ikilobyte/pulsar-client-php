<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * Type enum embedded in Schema message
 */
final class Schema_Type
{
    const None = 0;
    const String = 1;
    const Json = 2;
    const Protobuf = 3;
    const Avro = 4;
    const Bool = 5;
    const Int8 = 6;
    const Int16 = 7;
    const Int32 = 8;
    const Int64 = 9;
    const Float = 10;
    const Double = 11;
    const Date = 12;
    const Time = 13;
    const Timestamp = 14;
    const KeyValue = 15;
    const Instant = 16;
    const LocalDate = 17;
    const LocalTime = 18;
    const LocalDateTime = 19;
    const ProtobufNative = 20;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'None' => self::None,
            'String' => self::String,
            'Json' => self::Json,
            'Protobuf' => self::Protobuf,
            'Avro' => self::Avro,
            'Bool' => self::Bool,
            'Int8' => self::Int8,
            'Int16' => self::Int16,
            'Int32' => self::Int32,
            'Int64' => self::Int64,
            'Float' => self::Float,
            'Double' => self::Double,
            'Date' => self::Date,
            'Time' => self::Time,
            'Timestamp' => self::Timestamp,
            'KeyValue' => self::KeyValue,
            'Instant' => self::Instant,
            'LocalDate' => self::LocalDate,
            'LocalTime' => self::LocalTime,
            'LocalDateTime' => self::LocalDateTime,
            'ProtobufNative' => self::ProtobufNative,
        );
    }
}
}