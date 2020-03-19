<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class LoginRequest implements TeamspeakRequestInterface
{
    public $client_login_name;
	public $client_login_password;

    public function __construct($client_login_name, $client_login_password)
    {
        $this->client_login_name = $client_login_name;
		$this->client_login_password = $client_login_password;
    }

    public function getCommandUrl(): string
    {
        return '/login';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}