<?php

use Pulsar\Authentication\Jwt;
use Pulsar\Compression\Compression;
use Pulsar\MessageOptions;
use Pulsar\Producer;
use Pulsar\ProducerOptions;

require_once __DIR__ . '/../../vendor/autoload.php';

$options = new ProducerOptions();

$token = file_get_contents(__DIR__ . '/../../.github/jwt.token');

$options->setAuthentication(new Jwt($token));

$options->setInitialSubscriptionName('workflows');
$options->setConnectTimeout(3);
$options->setTopic('persistent://public/default/demo');
$options->setCompression(Compression::ZLIB);
$producer = new Producer('pulsar://localhost:6650', $options);
$producer->connect();

for ($i = 0; $i < 10; $i++) {
    $messageID = $producer->send(sprintf('hello %d', $i));
    echo sprintf("message id %s \n", $messageID);
}

// Sending delayed messages
for ($i = 0; $i < 10; $i++) {
    $messageID = $producer->send(sprintf('hello-delay %d', $i), [
        MessageOptions::DELAY_SECONDS => $i * 5, // Seconds
    ]);
    echo sprintf("message id %s delay %s\n", $messageID, $i * 5);
}


// Send Batch messages
$messages = [];
for ($i = 0; $i < 10; $i++) {
    $messages[] = json_encode([
        'id'   => $i,
        'date' => date('Y-m-d H:i:s'),
    ]);
}

$messageID = $producer->send($messages);
echo sprintf("batch message id %s\n", $messageID);

// close
$producer->close();

