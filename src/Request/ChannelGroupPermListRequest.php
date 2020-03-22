<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelGroupPermListRequest implements TeamspeakRequestInterface
{
    public $cgid; /* groupID */
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
        return GenericResponse::class;
    }
}