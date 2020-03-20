<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelClientAddPermRequest implements TeamspeakRequestInterface
{
    public $continueonerror;
	public $cid;
	public $cldbid;

    public function __construct(bool $continueonerror = null, $cid, $cldbid)
    {
        $this->continueonerror = $continueonerror;
		$this->cid = $cid;
		$this->cldbid = $cldbid;
    }

    public function getCommandUrl(): string
    {
        return '/channelclientaddperm';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}