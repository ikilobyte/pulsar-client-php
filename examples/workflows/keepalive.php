<?php

use Pulsar\Authentication\Jwt;
use Pulsar\Compression\Compression;
use Pulsar\Exception\IOException;
use Pulsar\Exception\OptionsException;
use Pulsar\Producer;
use Pulsar\ProducerOptions;
use Swoole\Http\Request as SwooleRequest;
use Swoole\Http\Response as SwooleResponse;
use Swoole\Http\Server as SwooleServer;

require_once __DIR__ . '/../../vendor/autoload.php';



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
        $token = file_get_contents(__DIR__ . '/../../.github/jwt.token');
        $options->setAuthentication(new Jwt($token));

        $producer = new Producer('pulsar://localhost:6650', $options);
        $producer->connect();

        self::$inner[ $topic ] = $producer;
    }
}


$server = new SwooleServer('0.0.0.0', 1234);
$server->set([
    'enable_coroutine' => true,
    'hook_flags'       => SWOOLE_HOOK_ALL,
]);

$server->on('start', function () {
    echo "http server started\n";
    sleep(3);
    for ($i = 0; $i < 10; $i++) {
        $result = file_get_contents('http://127.0.0.1:1234');
        echo $result . "\n";
    }
});

$counter = 0;
$server->on('request', function (SwooleRequest $req, SwooleResponse $resp) use (&$counter, $server) {

    // Should be taken from here to keep this connection from being closed
    try {

        $topic = 'persistent://public/default/keepalive-' . $counter;
        $producer = ProducerStore::get($topic);
        $id = $producer->send('hello');
        $result = [
            'id'    => $id,
            'topic' => $topic,
        ];
        $resp->end(json_encode($result));
        $counter += 1;

        if ($counter >= 10) {
            sleep(300);
            $server->shutdown();
        }
    } catch (Throwable $e) {
        $server->shutdown();
    }
});

$server->start();