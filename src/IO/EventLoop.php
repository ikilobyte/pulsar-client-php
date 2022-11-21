<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/7/8
 * Time: 6:51 PM
 */
declare( strict_types = 1 );


namespace Pulsar\IO;


use Pulsar\Exception\IOException;
use Pulsar\Exception\RuntimeException;
use Pulsar\Response;

interface EventLoop
{

    /**
     * @param $seconds
     * @return Response|null
     * @throws IOException
     * @throws RuntimeException
     */
    public function wait($seconds = null);


    /**
     * @param AbstractIO $io
     * @return mixed
     */
    public function addRead(AbstractIO $io);
}
