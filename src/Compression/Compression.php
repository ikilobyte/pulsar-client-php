<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/26
 * Time: 9:21 PM
 */

namespace Pulsar\Compression;


/**
 *
 */
interface Compression
{
    /**
     * None
     */
    const NONE = 0;

    /**
     * Zlib
     */
    const ZLIB = 2;


    /**
     * @return int
     */
    public function getType(): int;

    /**
     * @param string $data
     * @return string
     */
    public function encode(string $data): string;


    /**
     * @param string $data
     * @param int $originSize
     * @return string
     */
    public function decode(string $data, int $originSize): string;
}