<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/26
 * Time: 9:45 AM
 */

namespace Pulsar\Authentication;

/**
 * @see https://pulsar.apache.org/docs/next/security-overview
 */
interface Authentication
{
    /**
     * @return string
     */
    public function authMethodName(): string;

    /**
     * @return mixed
     */
    public function authData();


    /**
     * @return string
     */
    public function authorization(): string;
}