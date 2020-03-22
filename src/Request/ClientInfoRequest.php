<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ClientInfoRequest implements TeamspeakRequestInterface
{
    public $clid; /* clientID */
	public $lientinfo;
	public $clid; /* clientID */

    public function __construct($clid, bool $lientinfo, $clid)
    {
        $this->clid = $clid;
		$this->lientinfo = $lientinfo;
		$this->clid = $clid;
    }

    public function getCommandUrl(): string
    {
        return '/clientinfo';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}