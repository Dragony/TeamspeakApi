<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelGroupDelRequest implements TeamspeakRequestInterface
{
    public $cgid;
	public $force;

    public function __construct($cgid, $force)
    {
        $this->cgid = $cgid;
		$this->force = $force;
    }

    public function getCommandUrl(): string
    {
        return '/channelgroupdel';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}