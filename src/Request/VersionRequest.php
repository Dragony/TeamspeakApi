<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class VersionRequest implements TeamspeakRequestInterface
{
    

    public function __construct()
    {
        
    }

    public function getCommandUrl(): string
    {
        return '/version';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}