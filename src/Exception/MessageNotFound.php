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
     * Can be ignored, not a err
     */
    const Ignore = 0;

    /**
     * Command parsing failed
     */
    const CommandParseFail = 1;

    
    /**
     * @param string $message
     * @param int $code
     */
    public function __construct(string $message = 'Message Not Found', int $code = MessageNotFound::Ignore)
    {
        parent::__construct($message, $code);
    }
}