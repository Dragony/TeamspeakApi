<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ServerEditRequest implements TeamspeakRequestInterface
{
    public $virtualserver_properties;

    public function __construct($virtualserver_properties)
    {
        $this->virtualserver_properties = $virtualserver_properties;
    }

    public function getCommandUrl(): string
    {
        return '/serveredit';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}