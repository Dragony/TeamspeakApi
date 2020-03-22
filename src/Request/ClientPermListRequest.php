<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ClientPermListRequest implements TeamspeakRequestInterface
{
    public $cldbid; /* clientDBID */
	public $permsid;

    public function __construct($cldbid, bool $permsid = null)
    {
        $this->cldbid = $cldbid;
		$this->permsid = $permsid;
    }

    public function getCommandUrl(): string
    {
        return '/clientpermlist';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}