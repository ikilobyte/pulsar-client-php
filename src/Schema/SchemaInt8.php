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
 * Class SchemaUint8
 *
 * @package Pulsar\Schema
 */
class SchemaInt8 extends AbstractSchema implements ISchema
{

    /**
     * @param $data
     * @return string
     */
    public function encode($data): string
    {
        return chr($data);
    }


    /**
     * @param $payload
     * @return int
     * @throws \Exception
     */
    public function decode($payload): int
    {
        return ord($payload);
    }


    /**
     * @return Schema
     */
    public function getProtoSchema(): Schema
    {
        $schema = new Schema();
        $type = Schema\Type::Int8();
        $schema->setSchemaData(Stream::wrap(''));
        $schema->setType($type);
        $schema->setName($type->name());

        if ($properties = $this->getProperties()) {
            $schema->addProperties($properties);
        }

        return $schema;
    }
}