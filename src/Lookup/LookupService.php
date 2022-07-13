<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/7/8
 * Time: 4:07 PM
 */
declare( strict_types = 1 );


namespace Pulsar\Lookup;

use Pulsar\TopicManage;


interface LookupService
{

    /**
     * @param string $topic
     * @return Result
     */
    public function lookup(string $topic): Result;


    /**
     * @param string $topic
     * @return TopicManage
     */
    public function getPartitionedTopicMetadata(string $topic): TopicManage;


    /**
     * @return mixed
     */
    public function close();

}