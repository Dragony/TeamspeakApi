<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelClientDelPermRequest implements TeamspeakRequestInterface
{
    public $cid; /* channelID */
	public $cldbid; /* clientDBID */
	public $permid; /* permID */
	public $permsid; /* permName */

    public function __construct($cid, $cldbid, $permid = null, $permsid = null)
    {
        $this->cid = $cid;
		$this->cldbid = $cldbid;
		$this->permid = $permid;
		$this->permsid = $permsid;
    }

    public function getCommandUrl(): string
    {
        return '/channelclientdelperm';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}