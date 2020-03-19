<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ServerGroupautoAddPermRequest implements TeamspeakRequestInterface
{
    public $sgtype;
	public $permid;

    public function __construct($sgtype, $permid = null)
    {
        $this->sgtype = $sgtype;
		$this->permid = $permid;
    }

    public function getCommandUrl(): string
    {
        return '/servergroupautoaddperm';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}