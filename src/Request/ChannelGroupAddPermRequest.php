<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ChannelGroupAddPermRequest implements TeamspeakRequestInterface
{
    public $continueonerror;
	public $cgid;

    public function __construct(bool $continueonerror = null, $cgid)
    {
        $this->continueonerror = $continueonerror;
		$this->cgid = $cgid;
    }

    public function getCommandUrl(): string
    {
        return '/channelgroupaddperm';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}