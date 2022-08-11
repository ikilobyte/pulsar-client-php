<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/26
 * Time: 1:59 PM
 */

namespace Pulsar\Util;

use Pulsar\Proto\BaseCommand\Type;

class TypeParser
{

    /**
     * @var array
     */
    public static $data = [];


    /**
     * @param Type $type
     * @param string $prefix
     * @return string
     */
    public static function parseMethodName(Type $type, string $prefix = 'set'): string
    {
        $method = $prefix;

        $value = $type->value();
        if ($value == Type::LOOKUP_VALUE) {
            return 'setLookupTopic';
        }

        if ($value == Type::REDELIVER_UNACKNOWLEDGED_MESSAGES_VALUE) {
            return 'setRedeliverUnacknowledgedMessages';
        }

        // lookupTopicResponse
        if ($value == Type::LOOKUP_RESPONSE_VALUE) {
            return 'getLookupTopicResponse';
        }

        if ($value == Type::PARTITIONED_METADATA_VALUE) {
            return 'setPartitionMetadata';
        }

        if ($value == Type::PARTITIONED_METADATA_RESPONSE_VALUE) {
            return 'getPartitionMetadataResponse';
        }

        foreach (explode('_', $type->name()) as $part) {
            $method .= ucfirst(strtolower($part));
        }

        return $method;
    }
}