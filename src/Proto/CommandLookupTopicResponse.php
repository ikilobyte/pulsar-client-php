<?php
/**
 * Auto generated from PulsarApi.proto at 2022-06-26 09:41:24
 *
 * pulsar.proto package
 */

namespace Pulsar\Proto {
/**
 * CommandLookupTopicResponse message
 */
class CommandLookupTopicResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BROKERSERVICEURL = 1;
    const BROKERSERVICEURLTLS = 2;
    const RESPONSE = 3;
    const REQUEST_ID = 4;
    const AUTHORITATIVE = 5;
    const ERROR = 6;
    const MESSAGE = 7;
    const PROXY_THROUGH_SERVICE_URL = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BROKERSERVICEURL => array(
            'name' => 'brokerServiceUrl',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BROKERSERVICEURLTLS => array(
            'name' => 'brokerServiceUrlTls',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::RESPONSE => array(
            'name' => 'response',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REQUEST_ID => array(
            'name' => 'request_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::AUTHORITATIVE => array(
            'default' => false,
            'name' => 'authoritative',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ERROR => array(
            'name' => 'error',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MESSAGE => array(
            'name' => 'message',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PROXY_THROUGH_SERVICE_URL => array(
            'default' => false,
            'name' => 'proxy_through_service_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::BROKERSERVICEURL] = null;
        $this->values[self::BROKERSERVICEURLTLS] = null;
        $this->values[self::RESPONSE] = null;
        $this->values[self::REQUEST_ID] = null;
        $this->values[self::AUTHORITATIVE] = self::$fields[self::AUTHORITATIVE]['default'];
        $this->values[self::ERROR] = null;
        $this->values[self::MESSAGE] = null;
        $this->values[self::PROXY_THROUGH_SERVICE_URL] = self::$fields[self::PROXY_THROUGH_SERVICE_URL]['default'];
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'brokerServiceUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBrokerServiceUrl($value)
    {
        return $this->set(self::BROKERSERVICEURL, $value);
    }

    /**
     * Returns value of 'brokerServiceUrl' property
     *
     * @return string
     */
    public function getBrokerServiceUrl()
    {
        $value = $this->get(self::BROKERSERVICEURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'brokerServiceUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBrokerServiceUrl()
    {
        return $this->get(self::BROKERSERVICEURL) !== null;
    }

    /**
     * Sets value of 'brokerServiceUrlTls' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBrokerServiceUrlTls($value)
    {
        return $this->set(self::BROKERSERVICEURLTLS, $value);
    }

    /**
     * Returns value of 'brokerServiceUrlTls' property
     *
     * @return string
     */
    public function getBrokerServiceUrlTls()
    {
        $value = $this->get(self::BROKERSERVICEURLTLS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'brokerServiceUrlTls' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBrokerServiceUrlTls()
    {
        return $this->get(self::BROKERSERVICEURLTLS) !== null;
    }

    /**
     * Sets value of 'response' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setResponse($value)
    {
        return $this->set(self::RESPONSE, $value);
    }

    /**
     * Returns value of 'response' property
     *
     * @return integer
     */
    public function getResponse()
    {
        $value = $this->get(self::RESPONSE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'response' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasResponse()
    {
        return $this->get(self::RESPONSE) !== null;
    }

    /**
     * Sets value of 'request_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRequestId($value)
    {
        return $this->set(self::REQUEST_ID, $value);
    }

    /**
     * Returns value of 'request_id' property
     *
     * @return integer
     */
    public function getRequestId()
    {
        $value = $this->get(self::REQUEST_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'request_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRequestId()
    {
        return $this->get(self::REQUEST_ID) !== null;
    }

    /**
     * Sets value of 'authoritative' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setAuthoritative($value)
    {
        return $this->set(self::AUTHORITATIVE, $value);
    }

    /**
     * Returns value of 'authoritative' property
     *
     * @return boolean
     */
    public function getAuthoritative()
    {
        $value = $this->get(self::AUTHORITATIVE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'authoritative' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAuthoritative()
    {
        return $this->get(self::AUTHORITATIVE) !== null;
    }

    /**
     * Sets value of 'error' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setError($value)
    {
        return $this->set(self::ERROR, $value);
    }

    /**
     * Returns value of 'error' property
     *
     * @return integer
     */
    public function getError()
    {
        $value = $this->get(self::ERROR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'error' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasError()
    {
        return $this->get(self::ERROR) !== null;
    }

    /**
     * Sets value of 'message' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessage($value)
    {
        return $this->set(self::MESSAGE, $value);
    }

    /**
     * Returns value of 'message' property
     *
     * @return string
     */
    public function getMessage()
    {
        $value = $this->get(self::MESSAGE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'message' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMessage()
    {
        return $this->get(self::MESSAGE) !== null;
    }

    /**
     * Sets value of 'proxy_through_service_url' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setProxyThroughServiceUrl($value)
    {
        return $this->set(self::PROXY_THROUGH_SERVICE_URL, $value);
    }

    /**
     * Returns value of 'proxy_through_service_url' property
     *
     * @return boolean
     */
    public function getProxyThroughServiceUrl()
    {
        $value = $this->get(self::PROXY_THROUGH_SERVICE_URL);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'proxy_through_service_url' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProxyThroughServiceUrl()
    {
        return $this->get(self::PROXY_THROUGH_SERVICE_URL) !== null;
    }
}
}