<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/25
 * Time: 9:56 PM
 */

namespace Pulsar;

use Pulsar\Authentication\Authentication;
use Pulsar\Exception\OptionsException;
use Pulsar\Schema\ISchema;


/**
 * Class Options
 *
 * @package Pulsar
 */
abstract class Options
{

    /**
     * @var string pulsar server url
     */
    const URL = 'url';

    /**
     * @var Authentication auth
     */
    const Authentication = 'authentication';

    /**
     * @var int connect timeout
     */
    const CONNECT_TIMEOUT = 'connect_timeout';

    /**
     * @var array topics
     */
    const TOPICS = 'topics';


    /**
     * @var array
     */
    protected $data = [
        self::CONNECT_TIMEOUT => 10,
    ];


    /**
     * @param string $url
     * @return void
     */
    public function setUrl(string $url)
    {
        $this->data[ self::URL ] = $url;
    }


    /**
     * @return array
     * @throws OptionsException
     */
    public function getUrl(): array
    {
        $url = $this->data[ self::URL ];
        $parse = parse_url($url);
        if (!isset($parse['host'], $parse['port'])) {
            throw new OptionsException('url fail miss host or port');
        }

        if (!isset($parse['scheme'])) {
            $parse['scheme'] = 'pulsar';
        }

        $parse['scheme'] = strtolower($parse['scheme']);
        $parse['url'] = $url;
        return $parse;
    }


    /**
     * @param Authentication $authentication
     * @return void
     */
    public function setAuthentication(Authentication $authentication)
    {
        $this->data[ self::Authentication ] = $authentication;
    }



    /**
     * @param int $seconds
     * @return void
     */
    public function setConnectTimeout(int $seconds)
    {
        $this->data[ self::CONNECT_TIMEOUT ] = $seconds;
    }


    /**
     * @param string $topic
     * @return void
     */
    public function setTopic(string $topic)
    {
        $this->data[ self::TOPICS ] = [$topic];
    }


    /**
     * @return array
     * @throws OptionsException
     */
    public function getTopics(): array
    {
        $topics = $this->data[ self::TOPICS ] ?? [];
        if (empty($topics)) {
            throw new OptionsException('topic is required');
        }

        return $topics;
    }



    /**
     * This connection pool is not enabled by default
     *
     * @return bool
     */
    public function getKeepalive(): bool
    {
        return false;
    }


    /**
     * @param ISchema $schema
     * @return void
     */
    public function setSchema(ISchema $schema)
    {
        $this->data['schema'] = $schema;
    }


    /**
     * @return ISchema|null
     */
    public function getSchema()
    {
        return $this->data['schema'] ?? null;
    }

    /**
     * @param string $topic
     * @return string
     * @throws OptionsException
     */
    public function validateTopic(string $topic): string
    {
        if (empty($topic)) {
            throw new OptionsException('topic is required');
        }

        $parts = explode('/', $topic);
        if (count($parts) < 5) {
            throw new OptionsException('topic is format [persistent://tenant/namespace/topic]');
        }

        if (empty($parts[4])) {
            throw new OptionsException('topic is empty');
        }

        return $topic;
    }


    /**
     * @return array
     */
    public function all(): array
    {
        return $this->data;
    }


    /**
     * @param $offset
     * @return bool
     */
    public function offsetExists($offset): bool
    {
        return isset($this->data[ $offset ]);
    }


    /**
     * @param $offset
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->data[ $offset ] ?? null;
    }


    /**
     * @param $offset
     * @param $value
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->data[ $offset ] = $value;
    }


    /**
     * @param $offset
     * @return void
     * @throws OptionsException
     */
    public function offsetUnset($offset)
    {
        throw new OptionsException('Prohibit deletion');
    }
}