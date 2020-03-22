<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ServerTempPasswordDelRequest implements TeamspeakRequestInterface
{
    public $pw; /* password */

    public function __construct($pw)
    {
        $this->pw = $pw;
    }

    public function getCommandUrl(): string
    {
        return '/servertemppassworddel';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}