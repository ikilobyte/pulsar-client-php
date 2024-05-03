<?php

namespace Pulsar;



/**
 * @see https://www.php.net/manual/zh/context.ssl.php
 */
class TLSOptions extends Options
{

    /**
     * @var false[]
     */
    protected $data = [
        'verify_peer_name'  => true,
        'verify_peer'       => true,
        'allow_self_signed' => true,
    ];

    /**
     * @param string $certFilePath
     * @param string $keyFilePath
     */
    public function __construct(string $certFilePath, string $keyFilePath)
    {
        $this->data['local_cert'] = $certFilePath;
        $this->data['local_pk'] = $keyFilePath;
    }

    /**
     * @param string $caCertPath
     * @return self
     */
    public function setTrustCertsFilePath(string $caCertPath): self
    {
        $this->data['cafile'] = $caCertPath;
        return $this;
    }


    /**
     * @param bool $verifyPeerName
     * @return self
     */
    public function setValidateHostname(bool $verifyPeerName): self
    {
        $this->data['verify_peer_name'] = $verifyPeerName;
        return $this;
    }


    /**
     * @param bool $verifyPeer
     * @return self
     */
    public function setAllowInsecureConnection(bool $verifyPeer): self
    {
        $this->data['verify_peer'] = $verifyPeer;
        return $this;
    }


    /**
     * @return false[]
     */
    public function getData(): array
    {
        return $this->data;
    }
}