<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelGroupAddPermRequest implements TeamspeakRequestInterface
{
    public $continueonerror;
	public $cgid; /* groupID */
	public $permid; /* permID */
	public $permsid; /* permName */
	public $permvalue; /* permValue */

    public function __construct($cgid, $permvalue, $permid = null, $permsid = null, bool $continueonerror = null)
    {
        $this->continueonerror = $continueonerror;
		$this->cgid = $cgid;
		$this->permid = $permid;
		$this->permsid = $permsid;
		$this->permvalue = $permvalue;
    }

    public function getCommandUrl(): string
    {
        return '/channelgroupaddperm';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}