<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class PermGetRequest implements TeamspeakRequestInterface
{
    public $permid; /* permID */
	public $permsid; /* permName */

    public function __construct($permid = null, $permsid = null)
    {
        $this->permid = $permid;
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