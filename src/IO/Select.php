<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/7/8
 * Time: 6:52 PM
 */
declare( strict_types = 1 );


namespace Pulsar\IO;

use Pulsar\Exception\IOException;
use Pulsar\Exception\RuntimeException;
use Pulsar\Response;


/**
 * Class Select
 *
 * @package Pulsar\IO
 */
class Select implements EventLoop
{
    /**
     * @var array<AbstractIO>
     */
    protected $sockets = [];


    /**
     * @var array
     */
    protected $reads = [];


    /**
     * @param $seconds
     * @return mixed|Response|null
     * @throws IOException
     * @throws RuntimeException
     */
    public function wait($seconds = null)
    {
        $reads = array_values($this->reads);
        $n = stream_select($reads, $writes, $excepts, $seconds);
        if ($n <= 0) {
            return null;
        }

        $response = null;
        foreach ($reads as $socket) {

            $io = $this->sockets[ (int)$socket ];
            $response = $io->handleRead();

            // TODO There should be a better way to handle this here
            if (!is_null($response)) {
                break;
            }
        }

        return $response;
    }



    /**
     * @param AbstractIO $io
     * @return void
     */
    public function addRead(AbstractIO $io)
    {
        $socket = $io->getSocket();
        $this->sockets[ (int)$socket ] = $io;
        $this->reads[ (int)$socket ] = $socket;
    }

}