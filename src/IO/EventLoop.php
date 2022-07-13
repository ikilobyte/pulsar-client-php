<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/7/8
 * Time: 6:51 PM
 */
declare( strict_types = 1 );


namespace Pulsar\IO;


interface EventLoop
{

    /**
     * @param $seconds
     * @return mixed
     */
    public function wait($seconds = null);


    /**
     * @param AbstractIO $io
     * @return mixed
     */
    public function addRead(AbstractIO $io);
}
