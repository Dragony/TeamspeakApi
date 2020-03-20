<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ServerGroupClientListRequest implements TeamspeakRequestInterface
{
    public $sgid;
	public $names;

    public function __construct($sgid, bool $names = null)
    {
        $this->sgid = $sgid;
		$this->names = $names;
    }

    public function getCommandUrl(): string
    {
        return '/servergroupclientlist';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}