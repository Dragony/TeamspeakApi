<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ChannelGroupClientListRequest implements TeamspeakRequestInterface
{
    public $cid;
	public $cldbid;

    public function __construct($cid = null, $cldbid = null)
    {
        $this->cid = $cid;
		$this->cldbid = $cldbid;
    }

    public function getCommandUrl(): string
    {
        return '/channelgroupclientlist';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}