<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class FtinitdownloadRequest implements TeamspeakRequestInterface
{
    public $clientftfid;
	public $name;

    public function __construct($clientftfid, $name)
    {
        $this->clientftfid = $clientftfid;
		$this->name = $name;
    }

    public function getCommandUrl(): string
    {
        return '/ftinitdownload';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}