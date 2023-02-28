<?php


use Pulsar\Consumer;
use Pulsar\ConsumerOptions;
use Pulsar\Schema\SchemaJson;
use Pulsar\SubscriptionType;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/model.php';


$options = new ConsumerOptions();

// If permission authentication is available
// Only JWT authentication is currently supported
// $options->setAuthentication(new Jwt('token'));


$define = '{"type":"record","name":"Person","fields":[{"name":"id","type":"int"},{"name":"name","type":"string"},{"name":"age","type":"int"}]}';

// JSON Schema
$schema = new SchemaJson($define, ['key' => 'value']);


$options->setConnectTimeout(3);
$options->setTopic('persistent://public/default/demo');
$options->setSubscription('logic');
$options->setSubscriptionType(SubscriptionType::Shared);
$options->setNackRedeliveryDelay(20);
$options->setSchema($schema);
$consumer = new Consumer('pulsar://localhost:6650', $options);
$consumer->connect();

while (true) {
    $message = $consumer->receive();

    $person = new Person();
    $message->getSchemaValue($person);

    echo sprintf('Got message [%s] messageID[%s] topic[%s] publishTime[%s] id[%d] name[%s]',
            $message->getPayload(),
            $message->getMessageId(),
            $message->getTopic(),
            $message->getPublishTime(),
            $person->id,
            $person->name
        ) . "\n";


    // ...

    // Remember to confirm that the message is complete after processing
    $consumer->ack($message);

    // When processing fails, you can also execute the Nack
    // The message will be re-delivered after the specified time
    // $consumer->nack($message);
}

$consumer->close();