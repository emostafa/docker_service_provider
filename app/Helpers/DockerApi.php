<?php

namespace App\Helpers;

use Http\Client\Socket\Client;
use Http\Message\MessageFactory;

class DockerApi
{

    private $messageFactory;

    function __constructor(MessageFactory $messageFactory) {
        dd($messageFactory);        
        $this->messageFactory = $messageFactory;
    }

    function listContainers() {
        dd($this->messageFactory);
        $factory = $this->messageFactory->createRequest('GET', 'http:/v1.26/containers/json');
        $client = new Client($factory, []);
        return $client;
    }
}
