<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ServerGroupDelRequest implements TeamspeakRequestInterface
{
    public $sgid; /* groupID */
	public $force; /* 1|0 */

    public function __construct($sgid, $force)
    {
        $this->sgid = $sgid;
		$this->force = $force;
    }

    public function getCommandUrl(): string
    {
        return '/servergroupdel';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}