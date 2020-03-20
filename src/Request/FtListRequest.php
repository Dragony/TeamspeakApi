<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class FtListRequest implements TeamspeakRequestInterface
{
    

    public function __construct()
    {
        
    }

    public function getCommandUrl(): string
    {
        return '/ftlist';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}