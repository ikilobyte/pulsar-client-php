# PHP Native Pulsar Client

# 目录

* [目录](#目录)
    * [关于](#关于)
    * [依赖](#依赖)
    * [安装](#安装)
    * [生产者](#生产者)
    * [消费者](#消费者)
    * [Reader](#Reader)
    * [可选项配置](#可选项配置)
    * [License](#License)

## 关于

[English](README.md) | 中文

这是一个用php实现的[Apache Pulsar](https://pulsar.apache.org)客户端库，基于[PulsarApi.proto](src/PulsarApi.proto)
，且支持Swoole协程环境

## 依赖

* PHP >=7.0 (Supported PHP8)
* ZLib Extension（如果你想使用`zlib`压缩）
* Zstd Extension（如果你想使用`zstd`压缩）
* Swoole Extension（如果你想在swoole中使用）
    * 只需要配置`SWOOLE_HOOK_SOCKETS、SWOOLE_HOOK_STREAM_FUNCTION` 或者 `SWOOLE_HOOK_ALL`

## 安装

```bash
composer require ikilobyte/pulsar-client-php
```

## 生产者

```php
<?php

use Pulsar\Authentication\Jwt;
use Pulsar\Compression\Compression;
use Pulsar\Producer;
use Pulsar\ProducerOptions;

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
    
    $messageID = $producer->send(sprintf('hello %d',$i),[
        MessageOptions::PROPERTIES => [
           'key' => 'value',
           'ms'  => microtime(true),
        ]
    ]);
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
        \Pulsar\MessageOptions::DELAY_SECONDS => $i * 5, // Seconds
    ]);
}

// close
$producer->close();
```

> 消息去重

* 消息消重是pulsar提供的一项功能，它基于生产者名称和序列号ID
* 同一生产者的名称需要是固定而且是唯一的，一般根据业务纬度区分即可，每条消息的序列号ID是唯一而且是自增的。
* [参考 Pulsar Docs](https://pulsar.apache.org/docs/next/concepts-messaging#message-deduplication)

```php
$options = new ProducerOptions();
$options->setProducerName('name');

$producer = new Producer('pulsar://localhost:6650', $options);
$producer->send('body',[
    \Pulsar\MessageOptions::SEQUENCE_ID => 123456,
]);
```

## 消费者

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
//$producer = new Consumer('http://localhost:8080', $options);

$consumer->connect();

while (true) {
    $message = $consumer->receive();
    
    // get properties
    var_export($message->getProperties());
    
    echo sprintf('Got message 【%s】messageID[%s] topic[%s] publishTime[%s]',
        $message->getPayload(),
        $message->getMessageId(),
        $message->getTopic(),
        $message->getPublishTime(),
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

> 订阅多个主题

```php
$options->setTopics([
    'persistent://public/default/demo-1',
    'persistent://public/default/demo-2',
    'persistent://public/default/demo-3',
    //....
]);
```

> 死信队列

```php
// Assuming that the subject matter is： <topicname>-<subscriptionname>-DLQ
$options->setDeadLetterPolicy(6);

// Custom topic name
$options->setDeadLetterPolicy(6,'persistent://public/default/demo-dead');

// Custom subscription name
$options->setDeadLetterPolicy(6,'persistent://public/default/demo-dead','sub-name');
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

## 可选项配置

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
    * setSubscriptionInitialPosition()
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

## License

[MIT](LICENSE) LICENSE