<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ServeridGetbyportRequest implements TeamspeakRequestInterface
{
    public $virtualserver_port; /* serverPort */

    public function __construct($virtualserver_port)
    {
        $this->virtualserver_port = $virtualserver_port;
    }

    public function getCommandUrl(): string
    {
        return '/serveridgetbyport';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}