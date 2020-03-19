<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class PermGetRequest implements TeamspeakRequestInterface
{
    public $permid;

    public function __construct($permid)
    {
        $this->permid = $permid;
    }

    public function getCommandUrl(): string
    {
        return '/permget';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}