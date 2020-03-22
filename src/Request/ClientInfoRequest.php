<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ClientInfoRequest implements TeamspeakRequestInterface
{
    public $clid; /* clientID */

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
        return GenericResponse::class;
    }
}