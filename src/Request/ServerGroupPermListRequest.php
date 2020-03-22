<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ServerGroupPermListRequest implements TeamspeakRequestInterface
{
    public $sgid; /* groupID */
	public $permsid;

    public function __construct($sgid, bool $permsid = null)
    {
        $this->sgid = $sgid;
		$this->permsid = $permsid;
    }

    public function getCommandUrl(): string
    {
        return '/servergrouppermlist';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}