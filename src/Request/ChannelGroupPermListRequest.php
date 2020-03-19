<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ChannelGroupPermListRequest implements TeamspeakRequestInterface
{
    public $cgid;
	public $permsid;

    public function __construct($cgid, bool $permsid = null)
    {
        $this->cgid = $cgid;
		$this->permsid = $permsid;
    }

    public function getCommandUrl(): string
    {
        return '/channelgrouppermlist';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}