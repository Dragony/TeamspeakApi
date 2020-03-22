<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ClientGetnamefromDbidRequest implements TeamspeakRequestInterface
{
    public $cldbid; /* clientDBID */

    public function __construct($cldbid)
    {
        $this->cldbid = $cldbid;
    }

    public function getCommandUrl(): string
    {
        return '/clientgetnamefromdbid';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}