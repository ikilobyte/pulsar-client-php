<?php
/**
 * Created by PhpStorm
 * User: Sunny、
 * Date: 2023/2/13
 * Time: 16:11
 */

namespace Pulsar\Schema;


use Pulsar\Proto\KeyValue;

/**
 * Class AbstractSchema
 *
 * @package Pulsar\Schema
 */
abstract class AbstractSchema
{
    /**
     * @var array
     */
    protected $properties = [];


    protected $define = '';


    /**
     * @param array $properties
     */
    public function __construct(array $properties = [])
    {
        $this->properties = $properties;
    }



    /**
     * @param string $format
     * @param string $value
     * @return string
     * @throws \Exception
     */
    protected function pack(string $format, string $value): string
    {
        $data = pack($format, $value);
        if ($data === false) {
            throw new \Exception(sprintf('%s Encode Exception', static::class));
        }

        return $data;
    }




    /**
     * @param string $format
     * @param string $value
     * @return mixed
     * @throws \Exception
     */
    protected function unpack(string $format, string $value)
    {
        $data = unpack($format, $value);
        if (!isset($data[1])) {
            throw new \Exception(sprintf('Schema %s Error', static::class));
        }

        return $data[1];
    }

    /**
     * @return KeyValue|null
     */
    protected function getProperties()
    {
        if (empty($this->properties)) {
            return null;
        }

        $kv = new KeyValue();
        foreach ($this->properties as $key => $val) {
            $kv->setKey($key);
            $kv->setValue($val);
        }

        return $kv;
    }
}