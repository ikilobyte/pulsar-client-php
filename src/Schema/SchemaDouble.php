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
 * Class SchemaDouble
 *
 * @package Pulsar\Schema
 */
class SchemaDouble extends AbstractSchema implements ISchema
{

    /**
     * @param $data
     * @return string
     * @throws \Exception
     */
    public function encode($data): string
    {
        return $this->pack('d', $data);
    }


    /**
     * @param $payload
     * @return float
     * @throws \Exception
     */
    public function decode($payload): float
    {
        return $this->unpack('d', $payload);
    }


    /**
     * @return Schema
     */
    public function getProtoSchema(): Schema
    {
        $schema = new Schema();
        $type = Schema\Type::Double();
        $schema->setSchemaData(Stream::wrap(''));
        $schema->setType($type);
        $schema->setName($type->name());

        if ($properties = $this->getProperties()) {
            $schema->addProperties($properties);
        }

        return $schema;
    }
}