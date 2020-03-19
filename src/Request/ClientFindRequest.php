<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ClientFindRequest implements TeamspeakRequestInterface
{
    public $pattern;

    public function __construct($pattern)
    {
        $this->pattern = $pattern;
    }

    public function getCommandUrl(): string
    {
        return '/clientfind';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}