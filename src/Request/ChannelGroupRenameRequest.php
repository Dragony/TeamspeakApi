<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelGroupRenameRequest implements TeamspeakRequestInterface
{
    public $cgid; /* groupID */
	public $name; /* groupName */

    public function __construct($cgid, $name)
    {
        $this->cgid = $cgid;
		$this->name = $name;
    }

    public function getCommandUrl(): string
    {
        return '/channelgrouprename';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}