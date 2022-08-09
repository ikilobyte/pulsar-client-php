<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/7/8
 * Time: 4:07 PM
 */
declare( strict_types = 1 );


namespace Pulsar\Lookup;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Pulsar\Authentication\Authentication;
use Pulsar\Exception\OptionsException;
use Pulsar\Exception\RuntimeException;
use Pulsar\Options;

/**
 * Class HttpLookupService
 *
 * @package Pulsar\Lookup
 */
class HttpLookupService implements LookupService
{
    const LOOKUP_URI = '/lookup/v2/topic/%s';
    const PARTITIONS_URI = '/admin/v2/%s/partitions';


    /**
     * @var string
     */
    protected $address;


    /**
     * @var Options
     */
    protected $options;


    /**
     * @var Client
     */
    protected $client;


    /**
     * @param Options $options
     * @throws OptionsException
     */
    public function __construct(Options $options)
    {
        $this->address = trim($options->getUrl()['url'], '/');
        $this->options = $options;
        $this->client = new Client();
    }


    /**
     * @param string $topic
     * @return Result
     * @throws GuzzleException
     * @throws RuntimeException
     */
    public function lookup(string $topic): Result
    {
        $parseTopic = $this->parseTopic($topic);
        $url = sprintf(
            '%s%s',
            $this->address,
            sprintf(self::LOOKUP_URI, implode('/', $parseTopic))
        );
        $result = $this->request($url);

        if (!isset($result['brokerUrl'])) {
            throw new RuntimeException('Get Broker Address Url Failed');
        }

        $parse = parse_url($result['brokerUrl']);
        return new Result($parse['host'], $parse['port'], $result['brokerUrl']);
    }


    /**
     * @param string $topic
     * @return int
     * @throws GuzzleException
     * @throws RuntimeException
     */
    public function getPartitionedTopicMetadata(string $topic): int
    {
        $parseTopic = $this->parseTopic($topic);
        $url = sprintf(
            '%s%s',
            $this->address,
            sprintf(self::PARTITIONS_URI, implode('/', $parseTopic))
        );

        $result = $this->request($url);
        if (!isset($result['partitions'])) {
            throw new RuntimeException('Failed to get partition metadata');
        }

        return $result['partitions'];
    }


    /**
     * @param string $topic
     * @return array
     */
    protected function parseTopic(string $topic): array
    {
        list($scheme, $parts) = explode('://', $topic);
        list($tenant, $namespace, $topic) = explode('/', $parts);

        return [
            'scheme'    => $scheme,
            'tenant'    => $tenant,
            'namespace' => $namespace,
            'topic'     => $topic,
        ];
    }




    /**
     * @param string $url
     * @return array
     * @throws GuzzleException
     */
    protected function request(string $url): array
    {

        $headers = [];

        /**
         * @var $auth Authentication
         */
        if ($auth = $this->options->offsetGet(Options::Authentication)) {
            $headers['Authorization'] = 'Bearer ' . $auth->authData();
        }

        $response = $this->client->request('GET', $url, [
            RequestOptions::HEADERS => $headers,
        ]);

        return (array)json_decode($response->getBody()->getContents(), true);
    }


    /**
     * @return void
     */
    public function close()
    {
        unset($this->client);
    }
}