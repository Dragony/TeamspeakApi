<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelGroupCopyRequest implements TeamspeakRequestInterface
{
    public $scgid;
	public $tcgid;

    public function __construct($scgid, $tcgid)
    {
        $this->scgid = $scgid;
		$this->tcgid = $tcgid;
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