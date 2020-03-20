<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelAddPermRequest implements TeamspeakRequestInterface
{
    public $continueonerror;
	public $cid;
	public $permid;

    public function __construct(bool $continueonerror = null, $cid, $permid = null)
    {
        $this->continueonerror = $continueonerror;
		$this->cid = $cid;
		$this->permid = $permid;
    }

    public function getCommandUrl(): string
    {
        return '/channeladdperm';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}