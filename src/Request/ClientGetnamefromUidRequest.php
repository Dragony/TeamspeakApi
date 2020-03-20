<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ClientGetnamefromUidRequest implements TeamspeakRequestInterface
{
    public $cluid;

    public function __construct($cluid)
    {
        $this->cluid = $cluid;
    }

    public function getCommandUrl(): string
    {
        return '/clientgetnamefromuid';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}