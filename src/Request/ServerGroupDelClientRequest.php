<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ServerGroupDelClientRequest implements TeamspeakRequestInterface
{
    public $sgid; /* groupID */
	public $cldbid; /* clientDBID */
	public $ervergroupdelclient;
	public $continueonerror;
	public $sgid; /* groupID */
	public $cldbid; /* clientDBID */

    public function __construct($sgid, $cldbid, bool $ervergroupdelclient, bool $continueonerror = null, $sgid, $cldbid)
    {
        $this->sgid = $sgid;
		$this->cldbid = $cldbid;
		$this->ervergroupdelclient = $ervergroupdelclient;
		$this->continueonerror = $continueonerror;
		$this->sgid = $sgid;
		$this->cldbid = $cldbid;
    }

    public function getCommandUrl(): string
    {
        return '/servergroupdelclient';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}