<?php
/**
 * Created by PhpStorm
 * User: Sunny、
 * Date: 2023/2/10
 * Time: 17:40
 */

namespace Pulsar;


/**
 * Trait MessageSchema
 *
 * @package Pulsar
 */
trait MessageSchema
{


    /**
     * @param Options $options
     * @return void
     */
    public function setOptions(Options $options)
    {
        if (!$this->options) {
            $this->options = $options;
        }
    }


    /**
     * @param $data
     * @return void
     */
    public function getSchemaValue(&$data = null)
    {
        $schema = $this->options->getSchema();
        if (!$schema) {
            return;
        }

        $data = $schema->decode($this->getPayload());
    }
}