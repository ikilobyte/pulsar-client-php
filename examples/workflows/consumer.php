<?php

use Pulsar\Authentication\Jwt;
use Pulsar\Consumer;
use Pulsar\ConsumerOptions;
use Pulsar\Exception\MessageNotFound;
use Pulsar\SubscriptionType;

require_once __DIR__ . '/../../vendor/autoload.php';


$options = new ConsumerOptions();

$token = file_get_contents(__DIR__ . '/../../.github/jwt.token');
$options->setAuthentication(new Jwt($token));

$options->setConnectTimeout(3);
$options->setTopic('persistent://public/default/demo');
$options->setSubscription('workflows');
$options->setSubscriptionType(SubscriptionType::Shared);
$options->setNackRedeliveryDelay(20);
$consumer = new Consumer('pulsar://localhost:6650', $options);
$consumer->connect();

$receive = $total = 0;

while (true) {

    if ($total >= 1200) {
        exit(1);
    }

    if ($receive >= 30) {
        break;
    }

    try {
        $message = $consumer->receive(false);
        $receive += 1;

        echo sprintf('Got message 【%s】messageID[%s]  topic[%s] publishTime[%s]',
                $message->getPayload(),
                $message->getMessageId(),
                $message->getTopic(),
                $message->getPublishTime()
            ) . "\n";

        $consumer->ack($message);

    } catch (MessageNotFound $e) {
        if ($e->getCode() == MessageNotFound::Ignore) {
            continue;
        }
        die($e->getMessage());
    } catch (Throwable $e) {
        die($e->getMessage());
    } finally {
        $total += 1;
    }
}

$consumer->close();