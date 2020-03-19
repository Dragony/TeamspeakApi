<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ServerprocessStopRequest implements TeamspeakRequestInterface
{
    public $reasonmsg;

    public function __construct($reasonmsg = null)
    {
        $this->reasonmsg = $reasonmsg;
    }

    public function getCommandUrl(): string
    {
        return '/serverprocessstop';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}