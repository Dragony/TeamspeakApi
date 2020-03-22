<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelClientDelPermRequest implements TeamspeakRequestInterface
{
    public $cid;
	public $cldbid;
    public $permid;

    public function __construct($cid, $cldbid, $permid)
    {
        $this->cid = $cid;
		$this->cldbid = $cldbid;
        $this->permid = $permid;
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