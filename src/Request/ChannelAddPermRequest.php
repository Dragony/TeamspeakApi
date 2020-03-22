<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelAddPermRequest implements TeamspeakRequestInterface
{
    public $continueonerror;
	public $cid; /* channelID */
	public $permid; /* permID */
	public $permsid; /* permName */
	public $permvalue; /* permValue */

    public function __construct($cid, $permvalue, $permid, $permsid, bool $continueonerror = null)
    {
        $this->continueonerror = $continueonerror;
		$this->cid = $cid;
		$this->permid = $permid;
		$this->permsid = $permsid;
		$this->permvalue = $permvalue;
    }

    public function getCommandUrl(): string
    {
        return '/channeladdperm';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}