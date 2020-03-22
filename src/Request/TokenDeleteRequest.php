<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class TokenDeleteRequest implements TeamspeakRequestInterface
{
    public $token; /* tokenKey */

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function getCommandUrl(): string
    {
        return '/tokendelete';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}