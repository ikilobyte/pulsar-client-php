<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/7/8
 * Time: 4:07 PM
 */
declare( strict_types = 1 );


namespace Pulsar\Lookup;


interface LookupService
{

    /**
     * @param string $topic
     * @return Result
     */
    public function lookup(string $topic): Result;


    /**
     * @param string $topic
     * @return int
     */
    public function getPartitionedTopicMetadata(string $topic): int;


    /**
     * @return mixed
     */
    public function close();

}