<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ServerStartRequest implements TeamspeakRequestInterface
{
    public $sid;

    public function __construct($sid)
    {
        $this->sid = $sid;
    }

    public function getCommandUrl(): string
    {
        return '/serverstart';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}