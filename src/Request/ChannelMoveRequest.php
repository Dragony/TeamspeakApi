<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelMoveRequest implements TeamspeakRequestInterface
{
    public $cid; /* channelID */
	public $cpid; /* channelParentID */
	public $order; /* channelSortOrder */

    public function __construct($cid, $cpid, $order = null)
    {
        $this->cid = $cid;
		$this->cpid = $cpid;
		$this->order = $order;
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