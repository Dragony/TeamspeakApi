<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ClientDelPermRequest implements TeamspeakRequestInterface
{
    public $cldbid; /* clientDBID */
	public $permid; /* permID */
	public $permsid; /* permName */

    public function __construct($cldbid, $permid, $permsid)
    {
        $this->cldbid = $cldbid;
		$this->permid = $permid;
		$this->permsid = $permsid;
    }

    public function getCommandUrl(): string
    {
        return '/clientdelperm';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}