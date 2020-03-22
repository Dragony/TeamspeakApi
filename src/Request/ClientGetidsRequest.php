<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ClientGetidsRequest implements TeamspeakRequestInterface
{
    public $cluid; /* clientUID */

    public function __construct($cluid)
    {
        $this->cluid = $cluid;
    }

    public function getCommandUrl(): string
    {
        return '/clientgetids';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}