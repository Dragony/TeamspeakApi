<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class PermGetRequest implements TeamspeakRequestInterface
{
    public $permid; /* permID */
	public $ermget;
	public $permsid; /* permName */

    public function __construct($permid, bool $ermget, $permsid)
    {
        $this->permid = $permid;
		$this->ermget = $ermget;
		$this->permsid = $permsid;
    }

    public function getCommandUrl(): string
    {
        return '/permget';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}