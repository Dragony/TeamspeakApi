<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ServerSnapshotcreateRequest implements TeamspeakRequestInterface
{
    public $password;

    public function __construct($password = null)
    {
        $this->password = $password;
    }

    public function getCommandUrl(): string
    {
        return '/serversnapshotcreate';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}