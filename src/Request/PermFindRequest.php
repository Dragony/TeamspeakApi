<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class PermFindRequest implements TeamspeakRequestInterface
{
    public $permid; /* permID */
	public $permsid; /* permName */

    public function __construct($permid, $permsid)
    {
        $this->permid = $permid;
		$this->permsid = $permsid;
    }

    public function getCommandUrl(): string
    {
        return '/permfind';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}