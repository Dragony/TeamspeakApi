<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ServerNotifyunRegisterRequest implements TeamspeakRequestInterface
{
    

    public function __construct()
    {
        
    }

    public function getCommandUrl(): string
    {
        return '/servernotifyunregister';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}