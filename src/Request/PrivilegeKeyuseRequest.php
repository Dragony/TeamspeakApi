<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class PrivilegeKeyuseRequest implements TeamspeakRequestInterface
{
    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function getCommandUrl(): string
    {
        return '/privilegekeyuse';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}