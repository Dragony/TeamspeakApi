<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ServerGroupDelPermRequest implements TeamspeakRequestInterface
{
    public $continueonerror;
	public $sgid; /* groupID */
	public $permid; /* permID */
	public $permsid; /* permName */

    public function __construct(bool $continueonerror = null, $sgid, $permid, $permsid)
    {
        $this->continueonerror = $continueonerror;
		$this->sgid = $sgid;
		$this->permid = $permid;
		$this->permsid = $permsid;
    }

    public function getCommandUrl(): string
    {
        return '/servergroupdelperm';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}