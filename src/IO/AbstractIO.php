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
     * Because of the protobuf extension library, it is not possible to generate data with empty structures
     *
     * @var string
     */
    private $pingBytes = '';


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
     * Time when the last ping command was sent
     *
     * @var int
     */
    protected $lastSendPingCommandTime = 0;


    /**
     * @var int
     */
    protected $fd = 0;

    /**
     * @var bool
     */
    protected $keepalive = false;

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
     * @return void
     */
    public function ping()
    {
        if (empty($this->pingBytes)) {
            $this->pingBytes = file_get_contents(__DIR__ . '/../Util/ping.bytes');
        }

        // 30 seconds interval
        if (time() - $this->lastSendPingCommandTime < 30) {
            return;
        }

        // send PING command
        // Used to stay active
        $this->write($this->pingBytes);
        $this->lastSendPingCommandTime = time();
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
     * @param bool $status
     * @return void
     */
    public function setKeepalive(bool $status)
    {
        $this->keepalive = $status;
    }


    /**
     * @return int
     */
    public function fd(): int
    {
        return $this->fd;
    }

    /**
     * Handling readable events
     *
     * @return mixed
     */
    abstract public function handleRead();

    
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
    abstract public function handshake(?Authentication $authentication = null, string $brokerServiceUrl = '');
}