<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ApiKeyDelRequest implements TeamspeakRequestInterface
{
    public $id; /* ID */

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function getCommandUrl(): string
    {
        return '/apikeydel';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}