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
final class ProducerOptions extends Options
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
     * @var string
     */
    const INITIAL_SUBSCRIPTION_NAME = 'initial_subscription_name';


    /**
     * @var string
     */
    const KEEPALIVE = 'keepalive';


    /**
     * @param string $name
     * @return void
     */
    public function setProducerName(string $name)
    {
        $this->data[ self::NAME ] = $name;
    }


    /**
     * Name of the initial subscription of the topic.
     *
     * @param string $name
     * @return void
     */
    public function setInitialSubscriptionName(string $name)
    {
        $this->data[ self::INITIAL_SUBSCRIPTION_NAME ] = $name;
    }

    /**
     * Whether to enable keep-alive
     *
     * @param bool $status
     * @return void
     */
    public function setKeepalive(bool $status)
    {
        $this->data[ self::KEEPALIVE ] = $status;
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


    /**
     * @return int|mixed|string
     */
    public function getInitialSubscriptionName()
    {
        return $this->data[ self::INITIAL_SUBSCRIPTION_NAME ] ?? '';
    }


    /**
     * @return bool
     */
    public function getKeepalive(): bool
    {
        return $this->data[ self::KEEPALIVE ] ?? false;
    }
}