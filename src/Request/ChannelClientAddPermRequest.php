<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelClientAddPermRequest implements TeamspeakRequestInterface
{
    public $continueonerror;
	public $cid;
	public $cldbid;
    public $permvalue;
    public $permid;

    public function __construct($cid, $cldbid, $permid, $permvalue, bool $continueonerror = null)
    {
        $this->continueonerror = $continueonerror;
		$this->cid = $cid;
		$this->cldbid = $cldbid;
        $this->permvalue = $permvalue;
        $this->permid = $permid;
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