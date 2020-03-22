<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelDeleteRequest implements TeamspeakRequestInterface
{
    public $cid; /* channelID */
	public $force; /* 1|0 */

    public function __construct($cid, $force = 0)
    {
        $this->cid = $cid;
		$this->force = $force;
    }

    public function getCommandUrl(): string
    {
        return '/channeldelete';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}