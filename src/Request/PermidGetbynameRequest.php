<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class PermidGetbynameRequest implements TeamspeakRequestInterface
{
    public $permsid;

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
        return SuccessResponse::class;
    }
}