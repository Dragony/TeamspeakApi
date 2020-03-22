<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ClientupdateRequest implements TeamspeakRequestInterface
{
    public $client_properties;

    public function __construct($client_properties)
    {
        $this->client_properties = $client_properties;
    }

    public function getCommandUrl(): string
    {
        return '/clientupdate';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}