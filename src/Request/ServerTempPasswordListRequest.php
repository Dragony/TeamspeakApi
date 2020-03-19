<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ServerTempPasswordListRequest implements TeamspeakRequestInterface
{
    

    public function __construct()
    {
        
    }

    public function getCommandUrl(): string
    {
        return '/servertemppasswordlist';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}