<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/7/8
 * Time: 4:07 PM
 */
declare( strict_types = 1 );


namespace Pulsar\Lookup;

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
     * @var
     */
    protected $schema;


    /**
     * @param Options $options
     * @param string $scheme
     * @throws OptionsException
     */
    public function __construct(Options $options, string $scheme)
    {
        $this->options = $options;
        $this->address = trim($options->getUrl()['url'], '/');
        $this->schema = $scheme;
    }


    /**
     * @param string $topic
     * @return Result
     * @throws RuntimeException
     * @throws OptionsException
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

        $brokerUrl = $this->options->isTLS() ? $result['brokerUrlTls'] : $result['brokerUrl'];
        $parse = parse_url($brokerUrl);
        return new Result($parse['host'], $parse['port'], $brokerUrl);
    }


    /**
     * @param string $topic
     * @return int
     * @throws RuntimeException
     * @throws OptionsException
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
     * @throws RuntimeException
     * @throws OptionsException
     */
    protected function request(string $url): array
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        if ($this->schema == 'http') {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        } else {
            $tls = $this->options->getTLS()->getData();

            // ca
            if ($tls['cafile']) {
                curl_setopt($ch, CURLOPT_CAINFO, $tls['cafile']);
            }

            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $tls['verify_peer']);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $tls['verify_peer_name'] ? 2 : false);
            curl_setopt($ch, CURLOPT_SSLCERT, $tls['local_cert']);
            curl_setopt($ch, CURLOPT_SSLKEY, $tls['local_pk']);

            curl_setopt($ch, CURLOPT_SSLCERTTYPE, 'pem');
            curl_setopt($ch, CURLOPT_SSLKEYTYPE, 'pem');
        }

        $headers = [];

        /**
         * @var $auth Authentication
         */
        if ($auth = $this->options->offsetGet(Options::Authentication)) {
            $headers[] = sprintf('Authorization: %s', $auth->authorization());
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($ch);
        if (empty($response)) {
            throw new RuntimeException(sprintf('curl_errno[%s] %s', curl_errno($ch), curl_error($ch)));
        }

        $result = json_decode($response, true);
        if (!is_array($result)) {
            throw new RuntimeException('Pulsar Connect Failed');
        }
        return $result;
    }


    /**
     * @return void
     */
    public function close()
    {
        unset($this->client);
    }
}