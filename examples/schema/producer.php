<?php

use Pulsar\Compression\Compression;
use Pulsar\Producer;
use Pulsar\ProducerOptions;
use Pulsar\Schema\SchemaJson;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/model.php';



$options = new ProducerOptions();

// If permission authentication is available
// Only JWT authentication is currently supported
// $options->setAuthentication(new Jwt('token'));

$define = '{"type":"record","name":"Person","fields":[{"name":"id","type":"int"},{"name":"name","type":"string"},{"name":"age","type":"int"}]}';

// JSON Schema
$schema = new SchemaJson($define, ['key' => 'value']);


$options->setConnectTimeout(3);
$options->setTopic('persistent://public/default/demo');
$options->setCompression(Compression::ZLIB);
$options->setSchema($schema);
$producer = new Producer('pulsar://localhost:6650', $options);
$producer->connect();


for ($i = 0; $i < 10; $i++) {

    $person = new Person();
    $person->id = $i;
    $person->name = 'Tony ' . $i;
    $person->age = $i;

    // directly send Person Object No need to manually convert to json string
    $messageID = $producer->send($person);
    echo 'messageID ' . $messageID . "\n";
}

// close
$producer->close();