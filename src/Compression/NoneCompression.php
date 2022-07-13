<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/26
 * Time: 9:24 PM
 */

namespace Pulsar\Compression;

/**
 * Class None
 *
 * @package Pulsar\Compression
 */
class NoneCompression implements Compression
{
    /**
     * @inheritDoc
     */
    public function encode(string $data): string
    {
        return $data;
    }

    /**
     * @inheritDoc
     */
    public function decode(string $data, int $originSize): string
    {
        return $data;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return self::NONE;
    }
}