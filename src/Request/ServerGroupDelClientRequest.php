<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ServerGroupDelClientRequest implements TeamspeakRequestInterface
{
    public $sgid;
	public $cldbid;

    public function __construct($sgid, $cldbid)
    {
        $this->sgid = $sgid;
		$this->cldbid = $cldbid;
    }

    public function getCommandUrl(): string
    {
        return '/servergroupdelclient';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}