<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/26
 * Time: 9:47 AM
 */

namespace Pulsar\Authentication;


/**
 * Class Jwt
 *
 * @package Pulsar\Authentication
 */
class Jwt implements Authentication
{

    /**
     * @var string
     */
    protected $token;

    /**
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }

    /**
     * @inheritDoc
     */
    public function authMethodName(): string
    {
        return 'token';
    }


    /**
     * @inheritDoc
     */
    public function authData()
    {
        return $this->token;
    }
}