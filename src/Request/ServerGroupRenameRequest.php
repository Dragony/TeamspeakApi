<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ServerGroupRenameRequest implements TeamspeakRequestInterface
{
    public $sgid;
	public $name;

    public function __construct($sgid, $name)
    {
        $this->sgid = $sgid;
		$this->name = $name;
    }

    public function getCommandUrl(): string
    {
        return '/servergrouprename';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}