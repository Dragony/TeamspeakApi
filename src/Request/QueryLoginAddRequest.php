<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class QueryLoginAddRequest implements TeamspeakRequestInterface
{
    public $client_login_name; /* loginName */
	public $ueryloginadd;
	public $client_login_name; /* loginName */
	public $cldbid; /* clientDBID */

    public function __construct($client_login_name, bool $ueryloginadd, $client_login_name, $cldbid)
    {
        $this->client_login_name = $client_login_name;
		$this->ueryloginadd = $ueryloginadd;
		$this->client_login_name = $client_login_name;
		$this->cldbid = $cldbid;
    }

    public function getCommandUrl(): string
    {
        return '/queryloginadd';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}