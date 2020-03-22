<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ClientdbEditRequest implements TeamspeakRequestInterface
{
    public $cldbid; /* clientDBID */
    public $client_description;

    public function __construct($cldbid, $client_description)
    {
        $this->cldbid = $cldbid;
        $this->client_description = $client_description;
    }

    public function getCommandUrl(): string
    {
        return '/clientdbedit';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}