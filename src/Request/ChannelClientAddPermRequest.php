<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelClientAddPermRequest implements TeamspeakRequestInterface
{
    public $continueonerror;
	public $cid; /* channelID */
	public $cldbid; /* clientDBID */
	public $permid; /* permID */
	public $permsid; /* permName */
	public $permvalue; /* permValue */

    public function __construct($cid, $cldbid, $permvalue, $permid = null, $permsid = null, bool $continueonerror = null)
    {
        $this->continueonerror = $continueonerror;
		$this->cid = $cid;
		$this->cldbid = $cldbid;
		$this->permid = $permid;
		$this->permsid = $permsid;
		$this->permvalue = $permvalue;
    }

    public function getCommandUrl(): string
    {
        return '/channelclientaddperm';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}