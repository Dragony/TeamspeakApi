<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class LoginRequest implements TeamspeakRequestInterface
{
    public $client_login_name; /* username */
	public $client_login_password; /* password */
	public $ogin;
	public $username}; /* username */
	public $password}; /* password */

    public function __construct($client_login_name, $client_login_password, bool $ogin, bool $username}, bool $password})
    {
        $this->client_login_name = $client_login_name;
		$this->client_login_password = $client_login_password;
		$this->ogin = $ogin;
		$this->username} = $username};
		$this->password} = $password};
    }

    public function getCommandUrl(): string
    {
        return '/login';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}