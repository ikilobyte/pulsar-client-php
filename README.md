# PHP Native Pulsar Client

# Contents

* [Contents](#Contents)
    * [About](#About)
    * [Requirements](#Requirements)
    * [Installation](#Installation)
    * [Producer](#Producer)
    * [Consumer](#Consumer)
    * [Options](#Options)
    * [License](#License)

## About

English | [中文](README-CN.md)

This is a [Apache Pulsar](https://pulsar.apache.org) client library implemented in php
Reference [PulsarApi.proto](src/PulsarApi.proto) And support Swoole coroutine

## Requirements

* PHP >=7.0 (Supported PHP8)
* ZLib Extension（If you want to use zlib compression）
* Swoole Extension(If you want to use in swoole)
    * Use in the swoole only requires that the `SWOOLE_HOOK_SOCKETS、SWOOLE_HOOK_STREAM_FUNCTION` or `SWOOLE_HOOK_ALL`

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
    echo 'messageID ' . $messageID . "\n";
}

// Sending messages asynchronously
//for ($i = 0; $i < 10; $i++) {
//    $producer->sendAsync(sprintf('hello-async %d',$i),function(string $messageID){
//        echo 'messageID ' . $messageID . "\n";
//    });
//}
//
//// Add this line when sending asynchronously
//$producer->wait();

// Sending delayed messages
for ($i = 0; $i < 10; $i++) {
    $producer->send(sprintf('hello-delay %d',$i),[
        MessageOptions::DELAY_SECONDS => $i * 5, // Seconds
    ]);
}

// close
$producer->close();
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

require_once __DIR__ . '/vendor/autoload.php';

$options = new ConsumerOptions();

// If permission authentication is available
// Only JWT authentication is currently supported
$options->setAuthentication(new Jwt('token'));

$options->setConnectTimeout(3);
$options->setTopic('persistent://public/default/demo');
$options->setSubscription('logic');
$options->setSubscriptionType(SubscriptionType::Shared);

// Configure how many seconds Nack's messages are redelivered, the default is 1 minute
$options->setNackRedeliveryDelay(20);

$consumer = new Consumer('pulsar://localhost:6650', $options);
// or use pulsar proxy address
//$producer = new Producer('http://localhost:8080', $options);

$consumer->connect();

while (true) {
    $message = $consumer->receive();
    echo sprintf('Got message 【%s】messageID[%s]  topic[%s] publishTime[%s]',
        $message->getPayload(),
        $message->getMessageId(),
        $message->getTopic(),
        $message->getPublishTime()
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

## Options

* ProducerOptions
    * setTopic()
    * setAuthentication()
    * setConnectTimeout()
    * setProducerName()
    * setCompression()
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
* MessageOptions
    * DELAY_SECONDS
    * SEQUENCE_ID

## License

[MIT](LICENSE) LICENSE