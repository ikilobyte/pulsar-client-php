<?php

use Pulsar\Compression\Compression;
use Pulsar\MessageOptions;
use Pulsar\Producer;
use Pulsar\ProducerOptions;

require_once __DIR__ . '/../vendor/autoload.php';

$options = new ProducerOptions();

// If permission authentication is available
// Only JWT authentication is currently supported
// $options->setAuthentication(new Jwt('token'));

$options->setConnectTimeout(3);
$options->setTopic('persistent://public/default/demo');
$options->setCompression(Compression::ZLIB);
$producer = new Producer('pulsar://localhost:6650', $options);
$producer->connect();

for ($i = 0; $i < 10; $i++) {
    $messageID = $producer->send(sprintf('hello %d', $i));
    echo 'messageID ' . $messageID . "\n";
}

// Sending messages asynchronously
for ($i = 0; $i < 10; $i++) {
    $producer->sendAsync(sprintf('hello-async %d', $i), function (string $messageID) {
        echo 'messageID ' . $messageID . "\n";
    });
}
// Add this line when sending asynchronously
$producer->wait();

// Sending delayed messages
for ($i = 0; $i < 10; $i++) {
    $producer->send(sprintf('hello-delay %d', $i), [
        MessageOptions::DELAY_SECONDS => $i * 5, // Seconds
    ]);
}

// close
$producer->close();