<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class TokenuseRequest implements TeamspeakRequestInterface
{
    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function getCommandUrl(): string
    {
        return '/tokenuse';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}