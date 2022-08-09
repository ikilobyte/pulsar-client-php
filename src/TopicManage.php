<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/7/5
 * Time: 2:34 PM
 */
declare( strict_types = 1 );


namespace Pulsar;

use Pulsar\IO\AbstractIO;


/**
 * Class TopicManage
 *
 * @package Pulsar
 */
class TopicManage
{

    /**
     * @var int
     */
    protected $partitions = 0;


    /**
     * @var array
     */
    protected $data = [];


    /**
     * @var array<string,AbstractIO>
     */
    protected $connections = [];


    /**
     * @param string $topic
     * @param int $partition
     * @return void
     */
    public function setPartitions(string $topic, int $partition)
    {

        // count partitions
        $this->partitions += $partition;

        // Not a partition topic
        if ($partition <= 0) {
            $this->data[] = $topic;
            return;
        }

        // partition topic
        for ($i = 0; $i < $partition; $i++) {
            $this->data[] = sprintf('%s-partition-%d', $topic, $i);
        }
    }


    /**
     * @return int
     */
    public function countPartitions(): int
    {
        return $this->partitions;
    }


    /**
     * @return int
     */
    public function countTopics(): int
    {
        return count($this->data);
    }


    /**
     * @return array
     * for consumer
     */
    public function all(): array
    {
        return $this->data;
    }


    /**
     * @param string $topic
     * @return AbstractIO
     */
    public function getConnection(string $topic): AbstractIO
    {
        return $this->connections[ $topic ];
    }


    /**
     * @param string $topic
     * @param AbstractIO $connection
     * @return void
     */
    public function setConnection(string $topic, AbstractIO $connection)
    {
        $this->connections[ $topic ] = $connection;
    }
}