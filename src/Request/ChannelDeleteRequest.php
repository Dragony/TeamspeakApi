<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ChannelDeleteRequest implements TeamspeakRequestInterface
{
    public $cid;
	public $force;

    public function __construct($cid, $force)
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
        return SuccessResponse::class;
    }
}