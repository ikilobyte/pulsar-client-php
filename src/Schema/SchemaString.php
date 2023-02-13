<?php
/**
 * Created by PhpStorm
 * User: Sunny、
 * Date: 2023/2/10
 * Time: 17:07
 */

namespace Pulsar\Schema;


use Protobuf\Stream;
use Pulsar\Proto\Schema;

/**
 * Class SchemaString
 *
 * @package Pulsar\Schema
 */
class SchemaString extends AbstractSchema implements ISchema
{

    /**
     * @param $data
     * @return string
     */
    public function encode($data): string
    {
        return (string)$data;
    }


    /**
     * @param $payload
     * @return string
     * @throws \Exception
     */
    public function decode($payload): string
    {
        return (string)$payload;
    }


    /**
     * @return Schema
     */
    public function getProtoSchema(): Schema
    {
        $schema = new Schema();
        $type = Schema\Type::String();
        $schema->setSchemaData(Stream::wrap(''));
        $schema->setType($type);
        $schema->setName($type->name());

        if ($properties = $this->getProperties()) {
            $schema->addProperties($properties);
        }

        return $schema;
    }
}