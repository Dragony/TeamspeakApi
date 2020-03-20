<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ClientPokeRequest implements TeamspeakRequestInterface
{
    public $clid;
	public $msg;

    public function __construct($clid, $msg)
    {
        $this->clid = $clid;
		$this->msg = $msg;
    }

    public function getCommandUrl(): string
    {
        return '/clientpoke';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}