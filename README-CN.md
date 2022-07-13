# PHP Pulsar Client

# 目录

* [目录](#目录)
    * [关于](#关于)
    * [依赖](#依赖)
    * [安装](#安装)
    * [生产者](#生产者)
    * [消费者](#消费者)
    * [可选项配置](#可选项配置)
    * [License](#License)

## 关于

[English](README.md) | 中文

这是一个用php实现的[Apache Pulsar](https://pulsar.apache.org)客户端库，基于[PulsarApi.proto](src/PulsarApi.proto)

## 依赖

* PHP >= 7.0
* Protobuf Extension
  > 因为pulsar使用proto2语法

  > 由于Google protobuf的PHP扩展并不支持proto2语法

  > 所以是安装[allegro/php-protobuf](https://github.com/allegro/php-protobuf)扩展，而不是安装 protocolbuffers/protobuf

* ZLib Extension（如果你想使用zlib压缩）

## 安装

```bash
composer require ikilobyte/pulsar-client-php
```

> allegro/php-protobuf

```bash
cd /usr/local/src
git clone https://github.com/allegro/php-protobuf
cd php-protobuf
phpize 
./configure --with-php-config=${php-config} 
make && make install

# add to php.ini
[protobuf]
extension=protobuf.so
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
        \Pulsar\MessageOptions::DELAY_SECONDS => $i * 5, // Seconds
    ]);
}

// close
$producer->close();
```

## 消费者

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
$consumer->connect();

while (true) {
    $message = $consumer->receive();
    echo sprintf('Got message 【%s】messageID[%s]  topic[%s] publishTime[%s]',
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

## 可选项配置

* ProducerOptions
    * setTopic()
    * setAuthentication()
    * setConnectTimeout()
    * setProducerName()
    * setCompression()
* ConsumerOptions
    * setTopic()
    * setAuthentication()
    * setConnectTimeout()
    * setConsumerName()
    * setSubscription()
    * setSubscriptionType()
    * setNackRedeliveryDelay()
    * setReceiveQueueSize()
* MessageOptions
    * DELAY_SECONDS

## License

[MIT](LICENSE) LICENSE