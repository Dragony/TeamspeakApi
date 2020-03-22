<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Channel\Channel;
use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelCreateRequest implements TeamspeakRequestInterface
{
    /**
     * @var Channel
     */
    public $channel;

    public function __construct(Channel $channel)
    {
        $this->channel = $channel;
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