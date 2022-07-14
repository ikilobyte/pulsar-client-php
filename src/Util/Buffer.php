<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/26
 * Time: 11:29 AM
 */

namespace Pulsar\Util;

use Pulsar\IO\Reader;

/**
 * Class Buffer
 *
 * @package Pulsar\Util
 */
class Buffer implements Reader
{
    /**
     * @var string
     */
    protected $data = '';

    /**
     * @var int
     */
    protected $length = 0;


    /**
     * @var int
     */
    protected $readerIdx = 0;

    /**
     * @var int
     */
    protected $writerIdx = 0;


    /**
     * @param string $data
     */
    public function __construct(string $data = '')
    {
        $this->data = $data;
        $this->length = strlen($data);
    }


    /**
     * @param int $size
     * @return false|string
     */
    public function read(int $size): string
    {
        $buffer = (string)substr($this->data, $this->readerIdx, $size);
        $this->readerIdx += $size;
        return $buffer;
    }


    /**
     * @return int
     */
    public function readUint32(): int
    {
        return Helper::readUint32($this->read(4));
    }


    /**
     * @return int
     */
    public function readUint16(): int
    {
        return Helper::readUint16($this->read(2));
    }

    /**
     * Remaining readable length
     *
     * @return int
     */
    public function readableLength(): int
    {
        return $this->length - $this->readerIdx;
    }

    /**
     * @return false|string
     */
    public function bytes()
    {
        if ($this->readerIdx <= 0) {
            return $this->data;
        }

        return substr($this->data, $this->readerIdx);
    }


    /**
     * @return int
     */
    public function length(): int
    {
        return strlen($this->data);
    }

    /**
     * @param int $idx
     * @return void
     */
    public function skip(int $idx)
    {
        $this->readerIdx += $idx;
    }

    /**
     * @param string $buffer
     * @param int $offset
     * @return void
     * @throws \Exception
     */
    public function put(string $buffer, int $offset)
    {
        if ($offset < 0) {
            throw new \Exception('offset Must be greater than 0');
        }

        if ($offset > strlen($this->data)) {
            throw new \Exception('offset Out of range');
        }

        $this->data = sprintf(
            '%s%s%s',
            substr($this->data, 0, $offset),
            $buffer,
            substr($this->data, $offset)
        );
        $this->writerIdx = $this->length();
    }

    /**
     * @param string $buffer
     * @return int
     */
    public function write(string $buffer): int
    {
        $this->data .= $buffer;
        $this->length = $this->length();
        $this->writerIdx = $this->length;
        return strlen($buffer);
    }


    /**
     * @param int $number
     * @return void
     */
    public function writeUint32(int $number)
    {
        $this->write(Helper::writeUint32($number));
    }

    /**
     * @param int $number
     * @return void
     */
    public function writeUint16(int $number)
    {
        $this->write(Helper::writeUint16($number));
    }

}