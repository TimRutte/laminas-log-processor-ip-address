<?php

namespace TimRutte\Laminas\Log\Processor;

use Laminas\Http\PhpEnvironment\RemoteAddress;
use Laminas\Log\Processor\ProcessorInterface;

class IpAddress implements ProcessorInterface
{
    public function process(array $event) :array
    {
        if (!isset($event['ip'])) {
            $remote = new RemoteAddress();
            $event['ip'] = $remote->getIpAddress();
        }

        return $event;
    }
}