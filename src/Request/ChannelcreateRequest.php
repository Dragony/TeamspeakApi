<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelcreateRequest implements TeamspeakRequestInterface
{
    public $channel_name; /* channelName */
	public $hannel_properties...;

    public function __construct($channel_name, bool $channel_properties)
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
        return GenericResponse::class;
    }
}