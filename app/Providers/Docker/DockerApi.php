<?php

namespace Docker;

use Http\Client\Socket\Client;
use Http\Message\MessageFactory\DiactorosMessageFactory as MessageFactory;

class DockerApi
{

    private $messageFactory;

    function __construct(MessageFactory $messageFactory) {
        $this->messageFactory = $messageFactory;
    }

    function listContainers() {
        $client = new Client($this->messageFactory, []);
        return $client;
    }
}
