<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class PermidGetbynameRequest implements TeamspeakRequestInterface
{
    public $permsid; /* permName */

    public function __construct($permsid)
    {
        $this->permsid = $permsid;
    }

    public function getCommandUrl(): string
    {
        return '/permidgetbyname';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}