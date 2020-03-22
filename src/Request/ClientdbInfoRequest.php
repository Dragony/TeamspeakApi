<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ClientdbInfoRequest implements TeamspeakRequestInterface
{
    public $cldbid; /* clientDBID */
	public $lientdbinfo;
	public $cldbid; /* clientDBID */

    public function __construct($cldbid, bool $lientdbinfo, $cldbid)
    {
        $this->cldbid = $cldbid;
		$this->lientdbinfo = $lientdbinfo;
		$this->cldbid = $cldbid;
    }

    public function getCommandUrl(): string
    {
        return '/clientdbinfo';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}