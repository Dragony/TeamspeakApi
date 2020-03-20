<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelFindRequest implements TeamspeakRequestInterface
{
    public $pattern;

    public function __construct($pattern)
    {
        $this->pattern = $pattern;
    }

    public function getCommandUrl(): string
    {
        return '/channelfind';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}