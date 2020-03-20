<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ServerGroupAddPermRequest implements TeamspeakRequestInterface
{
    public $continueonerror;
	public $sgid;
	public $permid;

    public function __construct(bool $continueonerror = null, $sgid, $permid = null)
    {
        $this->continueonerror = $continueonerror;
		$this->sgid = $sgid;
		$this->permid = $permid;
    }

    public function getCommandUrl(): string
    {
        return '/servergroupaddperm';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}