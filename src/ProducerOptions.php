<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/29
 * Time: 9:50 PM
 */

namespace Pulsar;


use Pulsar\Compression\Compression;
use Pulsar\Compression\Factory;

/**
 * Class ProducerOptions
 *
 * @package Pulsar
 */
class ProducerOptions extends Options
{
    /**
     * @var string
     */
    const NAME = 'name';

    /**
     * @var Compression
     */
    const CompressionType = 'compression_type';


    /**
     * @param string $name
     * @return void
     */
    public function setProducerName(string $name)
    {
        $this->data[ self::NAME ] = $name;
    }


    /**
     * @param int $type
     * @return void
     * @throws Exception\RuntimeException
     */
    public function setCompression(int $type)
    {
        $this->data[ self::CompressionType ] = Factory::create($type);
    }


    /**
     * @return Compression
     * @throws Exception\RuntimeException
     */
    public function getCompression(): Compression
    {
        return $this->data[ self::CompressionType ] ?? Factory::create(Compression::NONE);
    }


    /**
     * @return string
     * @throws \Exception
     */
    public function getProducerName(): string
    {
        if (!isset($this->data[ self::NAME ])) {
            $this->data[ self::NAME ] = base64_encode(random_bytes(6));
        }
        
        return $this->data[ self::NAME ];
    }
}