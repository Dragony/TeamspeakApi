<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelGroupDelPermRequest implements TeamspeakRequestInterface
{
    public $continueonerror;
	public $cgid; /* groupID */
	public $permid; /* permID */
	public $permsid; /* permName */

    public function __construct($cgid, $permid = null, $permsid = null, bool $continueonerror = null)
    {
        $this->continueonerror = $continueonerror;
		$this->cgid = $cgid;
		$this->permid = $permid;
		$this->permsid = $permsid;
    }

    public function getCommandUrl(): string
    {
        return '/channelgroupdelperm';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}