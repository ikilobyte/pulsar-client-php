# PHP Native Pulsar Client

# Contents

* [Contents](#Contents)
    * [About](#About)
    * [Requirements](#Requirements)
    * [Installation](#Installation)
    * [Producer](#Producer)
    * [Consumer](#Consumer)
    * [Schema](#Schema)
    * [Reader](#Reader)
    * [Options](#Options)
    * [License](#License)

## About

English | [中文](README-CN.md)

This is a [Apache Pulsar](https://pulsar.apache.org) client library implemented in php
Reference [PulsarApi.proto](src/PulsarApi.proto) And support Swoole coroutine

## Requirements

* PHP >=7.0 (Supported PHP8)
* ZLib Extension（If you want to use `zlib` compression）
* Zstd Extension（If you want to use `zstd` compression）
* Swoole Extension(If you want to use in swoole)
    * Use in the swoole only requires that the `SWOOLE_HOOK_SOCKETS、SWOOLE_HOOK_STREAM_FUNCTION` or `SWOOLE_HOOK_ALL`

## Recommend

> If the following error occurs, the following extensions must be installed

```bash
Negative integers are only supported with GMP or BC (64bit) intextensions.
```

* `gmp` Extension **or** `bcmath` Extension

## Installation

```bash
composer require ikilobyte/pulsar-client-php
```

## Producer

```php
<?php

use Pulsar\Authentication\Jwt;
use Pulsar\Compression\Compression;
use Pulsar\Producer;
use Pulsar\ProducerOptions;
use Pulsar\MessageOptions;

require_once __DIR__ . '/vendor/autoload.php';

$options = new ProducerOptions();

// If permission authentication is available
// Only JWT authentication is currently supported
$options->setAuthentication(new Jwt('token')); 

$options->setConnectTimeout(3);
$options->setTopic('persistent://public/default/demo');
$options->setCompression(Compression::ZLIB);
$producer = new Producer('pulsar://localhost:6650', $options);
// or use pulsar proxy address
//$producer = new Producer('http://localhost:8080', $options);

$producer->connect();

for ($i = 0; $i < 10; $i++) {
    $messageID = $producer->send(sprintf('hello %d',$i));
    
    $messageID = $producer->send(sprintf('hello properties %d',$i),[
        MessageOptions::PROPERTIES => [
           'key' => 'value',
           'ms'  => microtime(true),
        ],
    ]);
    echo 'messageID ' . $messageID . "\n";
}

// Sending delayed messages
for ($i = 0; $i < 10; $i++) {
    $producer->send(sprintf('hello-delay %d',$i),[
        MessageOptions::DELAY_SECONDS => $i * 5, // Seconds
    ]);
}

// Send Batch message 
// The underlying protocol will automatically package these messages into a message and send it to pulsar
$messages = [];
for ($i = 0;$i < 10;$i++) {
    $messages[] = json_encode([
          'id'    => $i,
          'now'   => date('Y-m-d H:i:s')
    ]);
}

$messageID = $producer->send($messages);
echo "batch message id ${messageID}\n";

// close
$producer->close();
```

> Keepalive Connection (Recommended)

* require `Swoole` extension
* If it is a resident memory application, it is recommended to open it.
* Will keep connected, no need to repeatedly establish a connection
* Calling the `close` method closes the connection
* Please see [example](./examples/producer-keepalive.php)

```php
$options->setKeepalive(true);
```

> Message deduplication

* Message de-duplication is a feature provided by pulsar and is based on the producer name and sequence number ID
* The name of the same producer needs to be fixed and unique, generally distinguished by business latitude, and the
  sequence number ID of each message is unique and self-incrementing.
* [Reference Pulsar Docs](https://pulsar.apache.org/docs/next/concepts-messaging#message-deduplication)

```php
$options = new ProducerOptions();
$options->setProducerName('name');

$producer = new Producer('pulsar://localhost:6650', $options);
$producer->send('body',[
    \Pulsar\MessageOptions::SEQUENCE_ID => 123456,
]);
```

## Consumer

```php
<?php

use Pulsar\Authentication\Jwt;
use Pulsar\Consumer;
use Pulsar\ConsumerOptions;
use Pulsar\SubscriptionType;
use Pulsar\Proto\CommandSubscribe\InitialPosition;

require_once __DIR__ . '/vendor/autoload.php';

$options = new ConsumerOptions();

// If permission authentication is available
// Only JWT authentication is currently supported
$options->setAuthentication(new Jwt('token'));

$options->setConnectTimeout(3);
$options->setTopic('persistent://public/default/demo');
$options->setSubscription('logic');
$options->setSubscriptionType(SubscriptionType::Shared);

// Initial position at which to set cursor when subscribing to a topic at first time.	
// default use InitialPosition::Latest()
// $options->setSubscriptionInitialPosition(InitialPosition::Earliest());


// Configure how many seconds Nack's messages are redelivered, the default is 1 minute
$options->setNackRedeliveryDelay(20);

$consumer = new Consumer('pulsar://localhost:6650', $options);
// or use pulsar proxy address
//$consumer = new Consumer('http://localhost:8080', $options);

$consumer->connect();

while (true) {
    $message = $consumer->receive();
    
    // get properties
    var_export($message->getProperties());
    
    echo sprintf('Got message 【%s】messageID[%s] topic[%s] publishTime[%s] redeliveryCount[%d]',
        $message->getPayload(),
        $message->getMessageId(),
        $message->getTopic(),
        $message->getPublishTime(),
        $message->getRedeliveryCount()
    ) . "\n";

    // ... 
    
    // Remember to confirm that the message is complete after processing
    $consumer->ack($message);
    
    // When processing fails, you can also execute the Nack
    // The message will be re-delivered after the specified time
    // $consumer->nack($message);
}

$consumer->close();
```

> Receive Batch Message

- Only when the producer sends the message in bulk can the batch message be received.

```php
$messages = $consumer->batchReceive();
foreach ($messages as $message) {
    // ...
    
    // Ack
    $consumer->ack($message);
}
```

> Subscribe to multiple topics

```php
$options->setTopics([
    'persistent://public/default/demo-1',
    'persistent://public/default/demo-2',
    'persistent://public/default/demo-3',
    //....
]);
```

> Dead letter topic

```php
// Assuming that the subject matter is： <topicname>-<subscriptionname>-DLQ
$options->setDeadLetterPolicy(6);

// Custom topic name
$options->setDeadLetterPolicy(6,'persistent://public/default/demo-dead');

// Custom subscription name
$options->setDeadLetterPolicy(6,'persistent://public/default/demo-dead','sub-name');
```

> Reconnect（Only Support Consumer）

```php
// start reconnect
$options->setReconnectPolicy(true);

// Reconnect interval(seconds)
$options->setReconnectPolicy(true,3);

// Maximum number of reconnections
$options->setReconnectPolicy(true,3,100);
```

> Not loop Receive And Smooth exit

```php

$running = true;

// kill -15 $PID  
pcntl_signal(SIGTERM,function() use (&$running){
    $running = false;
});

while ($running) {
    try {
        $message = $consumer->receive(false);
        
        // ...
    } catch (\Pulsar\Exception\MessageNotFound $e) {
        if ($e ->getCode() != \Pulsar\Exception\MessageNotFound::Ignore) {
            die($e->getMessage());
        }
        echo "Message Not Found\n";
        continue;
    } catch (Throwable $e) {
        echo $e->getMessage() . "\n";
        throw $e;
    } finally {
        pcntl_signal_dispatch();
    }
}
```

## Schema

- Currently only supports `INT8`、`INT16`、`INT32`、`INT64`、`DOUBLE`、`STRING`、`JSON`，The following code uses `JSON Schema`
  as an example
- https://pulsar.apache.org/docs/2.11.x/schema-overview/
- https://avro.apache.org/docs/1.11.1/specification/

- `model.php`

```php
<?php

class Person
{
    public $id;
    public $name;
    public $age;
    // ...
}
```

- Producer Statement Schema

```php
<?php
$define = '{"type":"record","name":"Person","fields":[{"name":"id","type":"int"},{"name":"name","type":"string"},{"name":"age","type":"int"}]}';
$schema = new \Pulsar\Schema\SchemaJson($define, [
    'key' => 'value',
]);

// ... some code
$producerOptions->setSchema($schema);
$producer = new \Pulsar\Producer('xx',$options);
$producer->connect();

$person = new Person();
$person->id = 1;
$person->name = 'Tony';
$person->age = 18;

// directly send Person Object No need to manually convert to json string
$id = $producer->send($person);
```

- Consumer Statement Schema

 ```php
<?php
$define = '{"type":"record","name":"Person","fields":[{"name":"id","type":"int"},{"name":"name","type":"string"},{"name":"age","type":"int"}]}';

$schema = new \Pulsar\Schema\SchemaJson($define, [
    'key' => 'value',
]);

// ... some code
$consumerOptions->setSchema($schema);
$consumer = new \Pulsar\Consumer('pulsar://xxx',$consumerOptions);
$consumer->connect();

while (true) {
    $message = $consumer->receive();
    $person = new Person();
    $message->getSchemaValue($person);
    echo sprintf(
        'payload %s id %d name %s age %d',
        $message->getPayload(),
        $person->id,
        $person->name,
        $person->age
    ) . "\n";
    
    // .. some code
}

```

## Reader

```php
<?php
use Pulsar\Message;
use Pulsar\Reader;
use Pulsar\ReaderOptions;

require_once __DIR__ . '/../vendor/autoload.php';


$options = new ReaderOptions();

// If permission authentication is available
// Only JWT authentication is currently supported
// $options->setAuthentication(new Jwt('token'));

$options->setConnectTimeout(3);
$options->setTopic('persistent://public/default/demo'); // support partition topic

// Read the latest message
$options->setStartMessageID(Message::latestMessageIdData());

// From the earliest message
// $options->setStartMessageID(Message::earliestMessageIdData());

// Start reading from a message
// $options->setStartMessageID(Message::deserialize('621:103:0'));

$reader = new Reader('pulsar://localhost:6650', $options);
$reader->connect();

while (true) {
    $message = $reader->next();
    echo sprintf('Got message 【%s】messageID[%s]  topic[%s] publishTime[%s]',
            $message->getPayload(),
            $message->getMessageId(),
            $message->getTopic(),
            $message->getPublishTime()
        ) . "\n";

}

$reader->close();
```

## Options

* ProducerOptions
    * setTopic()
    * setAuthentication()
    * setConnectTimeout()
    * setProducerName()
    * setCompression()
    * setSchema()
    * setKeepalive()
* ConsumerOptions
    * setTopic()
    * setTopics()
    * setAuthentication()
    * setConnectTimeout()
    * setConsumerName()
    * setSubscription()
    * setSubscriptionType()
    * setNackRedeliveryDelay()
    * setReceiveQueueSize()
    * setDeadLetterPolicy()
    * setSubscriptionInitialPosition()
    * setReconnectPolicy()
    * setSchema()
* ReaderOptions
    * setTopic()
    * setAuthentication()
    * setConnectTimeout()
    * setReaderName()
    * setStartMessageID()
    * setReceiveQueueSize()
* MessageOptions
    * DELAY_SECONDS
    * SEQUENCE_ID
    * PROPERTIES

## MessageNotFound ErrCode （v1.2.1）

* `MessageNotFound::Ignore`
* `MessageNotFound::CommandParseFail`

## License

[MIT](LICENSE) LICENSE