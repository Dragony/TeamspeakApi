<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelClientDelPermRequest implements TeamspeakRequestInterface
{
    public $cid;
	public $cldbid;

    public function __construct($cid, $cldbid)
    {
        $this->cid = $cid;
		$this->cldbid = $cldbid;
    }

    public function getCommandUrl(): string
    {
        return '/channelclientdelperm';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}