<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ServerNotifyRegisterRequest implements TeamspeakRequestInterface
{
    

    public function __construct()
    {
        
    }

    public function getCommandUrl(): string
    {
        return '/servernotifyregister';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}