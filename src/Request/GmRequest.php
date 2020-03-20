<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class GmRequest implements TeamspeakRequestInterface
{
    public $msg;

    public function __construct($msg)
    {
        $this->msg = $msg;
    }

    public function getCommandUrl(): string
    {
        return '/gm';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}