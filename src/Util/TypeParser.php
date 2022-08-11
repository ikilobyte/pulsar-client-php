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
        foreach (explode('_', $type->name()) as $part) {
            $method .= ucfirst(strtolower($part));
        }

        return $method;
    }
}