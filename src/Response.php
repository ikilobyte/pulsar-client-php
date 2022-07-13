<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/26
 * Time: 1:56 PM
 */

namespace Pulsar;

use ProtobufMessage;
use Pulsar\Exception\RuntimeException;
use Pulsar\Proto\BaseCommand;
use Pulsar\Proto\CommandError;
use Pulsar\Proto\CommandSendError;
use Pulsar\Util\Buffer;
use Pulsar\Util\TypeParser;

/**
 * Class Response
 *
 * @package Pulsar
 */
class Response
{
    /**
     * @var Buffer
     */
    public $buffer;

    /**
     * @var BaseCommand
     */
    public $baseCommand;


    /**
     * @var ProtobufMessage
     */
    public $subCommand;


    /**
     * @param Buffer $buffer
     * @param BaseCommand $message
     * @throws RuntimeException
     */
    public function __construct(Buffer $buffer, BaseCommand $message)
    {
        $this->buffer = $buffer;
        $this->baseCommand = $message;
        $this->subCommand = $this->getSubCommand();
        $this->checkError();
    }


    /**
     * @return BaseCommand
     */
    public function getBaseCommand(): BaseCommand
    {
        return $this->baseCommand;
    }


    /**
     * @return Buffer
     */
    public function getBuffer(): Buffer
    {
        return $this->buffer;
    }


    /**
     * @return ProtobufMessage
     * @throws RuntimeException
     */
    public function getSubCommand(): ProtobufMessage
    {
        $type = $this->baseCommand->getType();
        $method = TypeParser::parseMethodName($type, 'get');
        if (!method_exists($this->baseCommand, $method)) {
            throw new RuntimeException($method . ' method Not Found');
        }

        return call_user_func([$this->baseCommand, $method]);
    }


    /**
     * @return void
     * @throws RuntimeException
     */
    protected function checkError()
    {
        if ($this->subCommand instanceof CommandError) {
            throw new RuntimeException($this->subCommand->getMessage(), $this->subCommand->getError());
        }

        $this->checkServerError();
    }


    /**
     * @return void
     * @throws RuntimeException
     */
    protected function checkServerError()
    {
        if ($this->subCommand instanceof CommandSendError) {
            throw new RuntimeException($this->subCommand->getMessage(), $this->subCommand->getError());
        }
    }
}