<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelGroupClientListRequest implements TeamspeakRequestInterface
{
    public $cid; /* channelID */
	public $cldbid; /* clientDBID */
	public $cgid; /* groupID */

    public function __construct($cid = null, $cldbid = null, $cgid = null)
    {
        $this->cid = $cid;
		$this->cldbid = $cldbid;
		$this->cgid = $cgid;
    }

    public function getCommandUrl(): string
    {
        return '/channelgroupclientlist';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}