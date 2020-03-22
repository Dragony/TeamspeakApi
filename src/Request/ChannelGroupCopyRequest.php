<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelGroupCopyRequest implements TeamspeakRequestInterface
{
    public $scgid; /* sourceGroupID */
	public $tcgid; /* targetGroupID */
	public $name; /* groupName */
	public $type; /* groupDbType */

    public function __construct($scgid, $tcgid, $name, $type)
    {
        $this->scgid = $scgid;
		$this->tcgid = $tcgid;
		$this->name = $name;
		$this->type = $type;
    }

    public function getCommandUrl(): string
    {
        return '/channelgroupcopy';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}