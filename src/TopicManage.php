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
     * @var string
     */
    protected $base;


    /**
     * @param string $topic
     * @param int $partitions
     */
    public function __construct(string $topic, int $partitions)
    {
        for ($i = 0; $i < $partitions; $i++) {
            $this->data[] = sprintf('%s-partition-%d', $topic, $i);
        }

        $this->base = $topic;
        $this->partitions = $partitions;
    }



    /**
     * @return int
     */
    public function count(): int
    {
        return $this->partitions;
    }


    /**
     * @return string
     * for producer
     */
    public function one(): string
    {
        if ($this->partitions <= 0) {
            return $this->base;
        }

        return $this->data[ mt_rand(0, $this->partitions - 1) ];
    }


    /**
     * @return array
     * for consumer
     */
    public function all(): array
    {
        return $this->partitions <= 0 ? [$this->base] : $this->data;
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