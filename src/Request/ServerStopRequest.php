<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ServerStopRequest implements TeamspeakRequestInterface
{
    public $sid; /* serverID */
	public $reasonmsg; /* text */

    public function __construct($sid, $reasonmsg = null)
    {
        $this->sid = $sid;
		$this->reasonmsg = $reasonmsg;
    }

    public function getCommandUrl(): string
    {
        return '/serverstop';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}