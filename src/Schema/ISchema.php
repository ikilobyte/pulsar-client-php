<?php
/**
 * Created by PhpStorm
 * User: Sunny、
 * Date: 2023/2/10
 * Time: 17:05
 */

namespace Pulsar\Schema;

use Pulsar\Proto\Schema;

/**
 * Interface Schema
 *
 * @package Pulsar\Schema
 */
interface ISchema
{
    /**
     * @param $data
     * @return mixed
     */
    public function encode($data);


    /**
     * @param $payload
     * @return mixed
     */
    public function decode($payload);


    /**
     * @return Schema
     */
    public function getProtoSchema(): Schema;
}