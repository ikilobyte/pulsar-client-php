<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/26
 * Time: 1:34 PM
 */

namespace Pulsar\IO;

use Pulsar\Authentication\Authentication;
use Pulsar\Options;

/**
 * Class AbstractIO
 *
 * @package Pulsar\IO
 */
abstract class AbstractIO
{
    /**
     * @var resource
     */
    protected $socket;


    /**
     * Because of the protobuf extension library, it is not possible to generate data with empty structures
     *
     * @var string
     */
    private $pongBytes = '';


    /**
     * @var float|int
     */
    protected $maxMessageSize = 1024 * 1024 * 5;


    /**
     * @var Options
     */
    protected $options;


    /**
     * @var string
     */
    protected $host;


    /**
     * @var int
     */
    protected $port;


    /**
     * @return void
     */
    protected function pong()
    {
        if (empty($this->pongBytes)) {
            $this->pongBytes = file_get_contents(__DIR__ . '/../Util/pong.bytes');
        }
        // reply PONG
        $this->write($this->pongBytes);
    }

    /**
     * @return resource
     */
    public function getSocket()
    {
        return $this->socket;
    }


    /**
     * @return float|int
     */
    public function getMaxMessageSize()
    {
        return $this->maxMessageSize;
    }


    /**
     * @param string $host
     * @param int $port
     * @param $timeout
     * @return mixed
     */
    abstract public function connect(string $host, int $port, $timeout = null);


    /**
     * @param string $buffer
     * @return mixed
     */
    abstract public function write(string $buffer);


    /**
     * @param int $size
     * @return string
     */
    abstract public function read(int $size): string;


    /**
     * @return mixed
     */
    abstract public function handshake(Authentication $authentication = null, string $brokerServiceUrl = '');
}