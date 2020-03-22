<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class UseRequest implements TeamspeakRequestInterface
{
    public $sid; /* serverID */
	public $port; /* serverPort */
	public $virtual;
	public $client_nickname; /* nickname */
	public $use;
	public $serverID; /* serverID */

    public function __construct($sid = null, $port = null, bool $virtual = null, $client_nickname = null, bool $use, bool $serverID)
    {
        $this->sid = $sid;
		$this->port = $port;
		$this->virtual = $virtual;
		$this->client_nickname = $client_nickname;
		$this->use = $use;
		$this->serverID = $serverID;
		$this->virtual = $virtual;
		$this->client_nickname = $client_nickname;
    }

    public function getCommandUrl(): string
    {
        return '/use';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}