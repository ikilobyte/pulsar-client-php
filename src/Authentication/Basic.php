<?php

namespace Pulsar\Authentication;

class Basic implements Authentication
{

    /**
     * @var
     */
    protected $user;

    /**
     * @var
     */
    protected $password;



    /**
     * @param string $user
     * @param string $password
     */
    public function __construct(string $user, string $password)
    {
        $this->user = $user;
        $this->password = $password;
    }


    public function authMethodName(): string
    {
        return 'basic';
    }


    /**
     * @return string
     */
    public function authData(): string
    {
        return sprintf('%s:%s', $this->user, $this->password);
    }


    /**
     * @return string
     */
    public function authorization(): string
    {
        return sprintf('Basic %s', base64_encode($this->authData()));
    }
}