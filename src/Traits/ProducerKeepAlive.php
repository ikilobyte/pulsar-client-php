<?php
/**
 * Created by PhpStorm
 * User: Sunny、
 * Date: 2023/1/3
 * Time: 16:18
 */

namespace Pulsar\Traits;


use Pulsar\Exception\IOException;
use Pulsar\Exception\RuntimeException;

/**
 * Trait ProducerKeepAlive
 *
 * @package Pulsar\Traits
 */
trait ProducerKeepAlive
{

    /**
     * @var bool
     */
    protected $keepalive = true;


    /**
     * @param bool $loop
     * @return void
     * @throws IOException
     * @throws RuntimeException
     */
    public function keepalive(bool $loop = true)
    {
        if (!$loop) {
            $this->eventloop->wait();
            return;
        }

        while ($this->keepalive) {
            $this->eventloop->wait();
        }
    }
}