<?php


use Pulsar\Consumer;
use Pulsar\ConsumerOptions;
use Pulsar\Exception\MessageNotFound;
use Pulsar\SubscriptionType;

require_once __DIR__ . '/../vendor/autoload.php';


$options = new ConsumerOptions();

// If permission authentication is available
// Only JWT authentication is currently supported
// $options->setAuthentication(new Jwt('token'));

$options->setConnectTimeout(3);
$options->setTopic('persistent://public/default/demo');
$options->setSubscription('logic');
$options->setSubscriptionType(SubscriptionType::Shared);
$options->setNackRedeliveryDelay(20);
$consumer = new Consumer('pulsar://localhost:6650', $options);
$consumer->connect();

$running = true;
pcntl_signal(SIGTERM, function () use (&$running) {
    $running = false;
});

// kill -15 $PID
while ($running) {
    try {
        $message = $consumer->receive(false);

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

    } catch (MessageNotFound$e) {
        echo "Message Not Found\n";
        continue;
    } catch (Throwable $e) {
        echo $e->getMessage();
        throw $e;
    } finally {
        pcntl_signal_dispatch();
    }
}

$consumer->close();