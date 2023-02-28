<?php


namespace Pulsar\Schema;


use Protobuf\Stream;
use Pulsar\Exception\RuntimeException;
use Pulsar\Proto\Schema;

/**
 * Class SchemaJson
 *
 * @package Pulsar\Schema
 */
class SchemaJson extends AbstractSchema implements ISchema
{

    /**
     * @param string $schemaDefine
     * @param array $properties
     * No verification is done here
     * schemaDefine Please refer to https://avro.apache.org/docs/1.11.1/specification/
     */
    public function __construct(string $schemaDefine, array $properties = [])
    {
        parent::__construct($properties);
        $this->define = $schemaDefine;
    }



    /**
     * @param $data
     * @return string
     * @throws \Exception
     */
    public function encode($data): string
    {
        if (!is_object($data)) {
            throw new RuntimeException(sprintf('JSON Schema Must be Class Object'));
        }

        return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }


    /**
     * @param $payload
     * @return mixed
     * @throws \Exception
     */
    public function decode($payload): array
    {
        $items = json_decode($payload, true);
        if (json_last_error()) {
            throw new RuntimeException(sprintf('Json Schema Decode Error %s', json_last_error_msg()));
        }

        return $items;
    }


    /**
     * @return Schema
     */
    public function getProtoSchema(): Schema
    {
        $schema = new Schema();
        $type = Schema\Type::Json();
        $schema->setSchemaData(Stream::wrap($this->define));

        $schema->setType($type);
        $schema->setName('JSON');

        if ($properties = $this->getProperties()) {
            $schema->addProperties($properties);
        }

        return $schema;
    }
}