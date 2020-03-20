<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelClientPermListRequest implements TeamspeakRequestInterface
{
    public $cid;
	public $cldbid;
	public $permsid;

    public function __construct($cid, $cldbid, bool $permsid = null)
    {
        $this->cid = $cid;
		$this->cldbid = $cldbid;
		$this->permsid = $permsid;
    }

    public function getCommandUrl(): string
    {
        return '/channelclientpermlist';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}