<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ClientGetUidfromclidRequest implements TeamspeakRequestInterface
{
    public $clid;

    public function __construct($clid)
    {
        $this->clid = $clid;
    }

    public function getCommandUrl(): string
    {
        return '/clientgetuidfromclid';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}