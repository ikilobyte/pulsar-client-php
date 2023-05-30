<?php

use Pulsar\Compression\Compression;
use Pulsar\Exception\IOException;
use Pulsar\Exception\OptionsException;
use Pulsar\Producer;
use Pulsar\ProducerOptions;
use Swoole\Http\Response;
use Swoole\Http\Server;

require_once __DIR__ . '/../vendor/autoload.php';



/**
 * Class ProducerStore
 */
class ProducerStore
{

    /**
     * @var array<string,Producer>
     */
    protected static $inner = [];


    /**
     * @param string $topic
     * @return Producer
     * @throws IOException
     * @throws OptionsException
     * @throws \Pulsar\Exception\RuntimeException
     */
    public static function get(string $topic): Producer
    {
        if (!isset(self::$inner[ $topic ])) {
            self::create($topic);
        }

        return self::$inner[ $topic ];
    }


    /**
     * @param string $topic
     * @return void
     * @throws IOException
     * @throws OptionsException
     * @throws \Pulsar\Exception\RuntimeException
     */
    private static function create(string $topic)
    {
        $options = new ProducerOptions();

        // If permission authentication is available
        // Only JWT authentication is currently supported
        // $options->setAuthentication(new Jwt('token'));

        $options->setConnectTimeout(3);
        $options->setTopic($topic);
        $options->setCompression(Compression::ZLIB);
        $options->setKeepalive(true);
        $producer = new Producer('pulsar://localhost:6650', $options);
        $producer->connect();

        self::$inner[ $topic ] = $producer;
    }
}


$server = new Server('0.0.0.0', 1234);
$server->set([
    'enable_coroutine' => true,
    'hook_flags'       => SWOOLE_HOOK_ALL,
]);

$server->on('request', function ($req, Response $resp) {

    // Should be taken from here to keep this connection from being closed
    $producer = ProducerStore::get('persistent://public/default/demo');

    $id = $producer->send('hello');
    $resp->end(json_encode(['id' => $id]));
});

$server->start();