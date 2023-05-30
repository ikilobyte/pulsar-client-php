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
 * @deprecated
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
     * @deprecated 1.3.0
     */
    public function keepalive(bool $loop = true)
    {
        // This method doesn't make any sense
        return;

        if (!$loop) {
            $this->eventloop->wait();
            return;
        }

        while ($this->keepalive) {
            $this->eventloop->wait();
        }
    }
}