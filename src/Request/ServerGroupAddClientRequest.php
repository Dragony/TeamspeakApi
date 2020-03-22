<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ServerGroupAddClientRequest implements TeamspeakRequestInterface
{
    public $sgid; /* groupID */
	public $cldbid; /* clientDBID */
	public $ervergroupaddclient;
	public $continueonerror;
	public $sgid; /* groupID */
	public $cldbid; /* clientDBID */

    public function __construct($sgid, $cldbid, bool $ervergroupaddclient, bool $continueonerror = null, $sgid, $cldbid)
    {
        $this->sgid = $sgid;
		$this->cldbid = $cldbid;
		$this->ervergroupaddclient = $ervergroupaddclient;
		$this->continueonerror = $continueonerror;
		$this->sgid = $sgid;
		$this->cldbid = $cldbid;
    }

    public function getCommandUrl(): string
    {
        return '/servergroupaddclient';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}