<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/26
 * Time: 10:47 AM
 */

namespace Pulsar\IO;

use Pulsar\Options;

/**
 * Class IOFactory
 *
 * @package Pulsar\IO
 */
class Factory
{
    /**
     * @param Options|null $options
     * @return AbstractIO
     */
    public static function create(?Options $options = null): AbstractIO
    {
        return new StreamIO($options);
    }
}