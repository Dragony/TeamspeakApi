<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ClientMoveRequest implements TeamspeakRequestInterface
{
    public $clid; /* clientID */
	public $cid; /* channelID */
	public $cpw; /* channelPassword */

    public function __construct($clid, $cid, $cpw = null)
    {
        $this->clid = $clid;
		$this->cid = $cid;
		$this->cpw = $cpw;
    }

    public function getCommandUrl(): string
    {
        return '/clientmove';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}