<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2023/1/8
 * Time: 5:00 PM
 */

namespace Pulsar\Exception;

use Exception;

/**
 * Class MessageNotFound
 *
 * @package Pulsar\Exception
 */
class MessageNotFound extends Exception
{

    /**
     * @param string $message
     */
    public function __construct(string $message = 'Message Not Found')
    {
        parent::__construct($message);
    }
}