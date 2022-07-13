<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/7/8
 * Time: 5:39 PM
 */
declare( strict_types = 1 );


namespace Pulsar\Lookup;


/**
 * Class Result
 *
 * @package Pulsar\Lookup
 */
class Result
{
    /**
     * @var string
     */
    protected $host;

    /**
     * @var int
     */
    protected $port;

    /**
     * @var string
     */
    protected $brokerServiceUrl = '';


    /**
     * @param string $host
     * @param int $port
     * @param string $brokerServiceUrl
     */
    public function __construct(string $host, int $port, string $brokerServiceUrl = '')
    {
        $this->host = $host;
        $this->port = $port;
        $parse = parse_url($brokerServiceUrl);
        if (isset($parse['host'])) {
            $this->brokerServiceUrl = sprintf('%s:%d', $parse['host'], $parse['port']);
        }
    }


    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }


    /**
     * @return string
     */
    public function getBrokerServiceUrl(): string
    {
        return $this->brokerServiceUrl;
    }


    /**
     * @return string
     */
    public function format(): string
    {
        return sprintf('%s:%d-%s', $this->host, $this->port, $this->brokerServiceUrl);
    }
}