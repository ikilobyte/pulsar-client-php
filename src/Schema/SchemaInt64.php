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
 * Class SchemaInt64
 * little endian byte order
 *
 * @package Pulsar\Schema
 */
class SchemaInt64 extends AbstractSchema implements ISchema
{

    /**
     * @param $data
     * @return string
     * @throws \Exception
     */
    public function encode($data): string
    {
        return $this->pack('P', $data);
    }


    /**
     * @param $payload
     * @return int
     * @throws \Exception
     */
    public function decode($payload): int
    {
        return $this->unpack('P', $payload);
    }


    /**
     * @return Schema
     */
    public function getProtoSchema(): Schema
    {
        $schema = new Schema();
        $type = Schema\Type::Int64();
        $schema->setSchemaData(Stream::wrap(''));
        $schema->setType($type);
        $schema->setName($type->name());

        if ($properties = $this->getProperties()) {
            $schema->addProperties($properties);
        }

        return $schema;
    }
}