<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/26
 * Time: 1:56 PM
 */

namespace Pulsar;

use Protobuf\AbstractMessage;
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
     * @var AbstractMessage
     */
    public $subCommand;


    /**
     * @var int
     */
    public $fd = 0;

    /**
     * @param Buffer $buffer
     * @param BaseCommand $message
     * @param int $fd
     * @throws RuntimeException
     */
    public function __construct(Buffer $buffer, BaseCommand $message, int $fd)
    {
        $this->buffer = $buffer;
        $this->baseCommand = $message;
        $this->subCommand = $this->getSubCommand();
        $this->fd = $fd;
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
     * @return int
     */
    public function fd(): int
    {
        return $this->fd;
    }


    /**
     * @return AbstractMessage
     * @throws RuntimeException
     */
    public function getSubCommand(): AbstractMessage
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
            $this->handleSubCommandError();
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
            $this->handleSubCommandError();
        }
    }

    /**
     * @return void
     * @throws RuntimeException
     */
    protected function handleSubCommandError()
    {
        $code = 0;
        $msg = $this->subCommand->getMessage();
        if ($this->subCommand->hasError()) {
            $code = $this->subCommand->getError()->value();
            $msg = $msg ?: $this->subCommand->getError()->name();
        }
        throw new RuntimeException($msg, $code);
    }
}
