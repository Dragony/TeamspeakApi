<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class QueryLoginAddRequest implements TeamspeakRequestInterface
{
    public $client_login_name;

    public function __construct($client_login_name)
    {
        $this->client_login_name = $client_login_name;
    }

    public function getCommandUrl(): string
    {
        return '/queryloginadd';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}