<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/26
 * Time: 1:59 PM
 */

namespace Pulsar\Util;

use Pulsar\Proto\BaseCommand_Type;

class TypeParser
{

    /**
     * @var array
     */
    public static $data = [];


    /**
     * @return void
     */
    public static function initial()
    {
        if (empty(self::$data)) {
            self::$data = array_flip(( new BaseCommand_Type() )->getEnumValues());
        }
    }


    /**
     * @param int $type
     * @param string $prefix
     * @return string
     */
    public static function parseMethodName(int $type, string $prefix = 'set'): string
    {
        self::initial();

        if ($type == BaseCommand_Type::LOOKUP) {
            return 'setLookupTopic';
        }

        if ($type == BaseCommand_Type::REDELIVER_UNACKNOWLEDGED_MESSAGES) {
            return 'setRedeliverUnacknowledgedMessages';
        }

        // lookupTopicResponse
        if ($type == BaseCommand_Type::LOOKUP_RESPONSE) {
            return 'getLookupTopicResponse';
        }


        if ($type == BaseCommand_Type::PARTITIONED_METADATA) {
            return 'setPartitionMetadata';
        }

        if ($type == BaseCommand_Type::PARTITIONED_METADATA_RESPONSE) {
            return 'getPartitionMetadataResponse';
        }

        $method = $prefix;
        foreach (explode('_', self::$data[ $type ]) as $part) {
            $method .= ucfirst(strtolower($part));
        }

        return $method;
    }
}