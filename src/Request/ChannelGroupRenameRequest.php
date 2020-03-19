<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ChannelGroupRenameRequest implements TeamspeakRequestInterface
{
    public $cgid;
	public $name;

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
        return SuccessResponse::class;
    }
}