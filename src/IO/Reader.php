<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/27
 * Time: 10:39 PM
 */

namespace Pulsar\IO;

/**
 *
 */
interface Reader
{
    /**
     * @param int $size
     * @return string
     */
    public function read(int $size): string;
}