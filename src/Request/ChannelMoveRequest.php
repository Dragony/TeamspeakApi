<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelMoveRequest implements TeamspeakRequestInterface
{
    public $cid;
	public $cpid;

    public function __construct($cid, $cpid)
    {
        $this->cid = $cid;
		$this->cpid = $cpid;
    }

    public function getCommandUrl(): string
    {
        return '/channelmove';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}