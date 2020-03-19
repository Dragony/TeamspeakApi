<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ChannelcreateRequest implements TeamspeakRequestInterface
{
    public $channel_name;
	public $hannel_properties...;

    public function __construct($channel_name, bool $hannel_properties... = null)
    {
        $this->channel_name = $channel_name;
		$this->hannel_properties... = $hannel_properties...;
    }

    public function getCommandUrl(): string
    {
        return '/channelcreate';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}