<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelcreateRequest implements TeamspeakRequestInterface
{
    public $channel_name; /* channelName */
	public $channel_properties;

    public function __construct($channel_name, $channel_properties = null)
    {
        $this->channel_name = $channel_name;
		$this->channel_properties = $channel_properties;
    }

    public function getCommandUrl(): string
    {
        return '/channelcreate';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}