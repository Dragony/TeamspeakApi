<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class UseRequest implements TeamspeakRequestInterface
{
    public $sid;
	public $port;
	public $virtual;
	public $client_nickname;

    public function __construct($sid = null, $port = null, bool $virtual = null, $client_nickname = null)
    {
        $this->sid = $sid;
		$this->port = $port;
		$this->virtual = $virtual;
		$this->client_nickname = $client_nickname;
    }

    public function getCommandUrl(): string
    {
        return '/use';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}