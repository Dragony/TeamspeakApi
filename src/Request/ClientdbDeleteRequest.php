<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ClientdbDeleteRequest implements TeamspeakRequestInterface
{
    public $cldbid;

    public function __construct($cldbid)
    {
        $this->cldbid = $cldbid;
    }

    public function getCommandUrl(): string
    {
        return '/clientdbdelete';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}