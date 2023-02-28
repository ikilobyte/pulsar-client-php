<?php
/**
 * Created by PhpStorm
 * User: Sunny、
 * Date: 2023/2/10
 * Time: 17:40
 */

namespace Pulsar;


use Pulsar\Exception\RuntimeException;
use Pulsar\Proto\Schema\Type;

/**
 * Trait MessageSchema
 *
 * @package Pulsar
 */
trait MessageSchema
{


    /**
     * @param Options $options
     * @return void
     */
    public function setOptions(Options $options)
    {
        if (!$this->options) {
            $this->options = $options;
        }
    }


    /**
     * @param $data
     * @return void
     * @throws RuntimeException
     * @throws \ReflectionException
     */
    public function getSchemaValue(&$data = null)
    {
        $schema = $this->options->getSchema();
        if (!$schema) {
            return;
        }

        $decode = $schema->decode($this->getPayload());
        $type = $schema->getProtoSchema()->getType()->value();

        if ($type == Type::Json_VALUE) {
            $this->jsonToClassObject($data, $decode);
        } else {
            $data = $decode;
        }
    }


    /**
     * @throws RuntimeException
     * @throws \ReflectionException
     */
    public function jsonToClassObject(&$source, array $items)
    {
        if (!is_object($source)) {
            throw new RuntimeException('JSON Schema Source Must Class Object');
        }

        $reflect = new \ReflectionClass($source);
        $properties = $reflect->getProperties();

        foreach ($properties as $property) {
            $property->setAccessible(true);
            $name = $property->getName();
            if (isset($items[ $name ])) {
                $property->setValue($source, $items[ $name ]);
            }
        }
    }
}