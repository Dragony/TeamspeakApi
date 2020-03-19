<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ClientInfoRequest implements TeamspeakRequestInterface
{
    public $clid;

    public function __construct($clid)
    {
        $this->clid = $clid;
    }

    public function getCommandUrl(): string
    {
        return '/clientinfo';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}