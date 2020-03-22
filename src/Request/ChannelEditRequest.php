<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Teamspeak\Channel;
use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelEditRequest implements TeamspeakRequestInterface
{
    /**
     * @var Channel
     */
    public $channel;

    public function __construct(Channel $channel)
    {
        $this->channel = clone $channel;

        // We can't write all properties, so we need to unset those
        foreach(get_object_vars($this->channel) as $variable => $value){
            if(!in_array($variable, ['cid', 'pid']) and strpos($variable, 'channel_') !== 0){
                $this->channel->{$variable} = null;
            }
        }
    }

    public function getCommandUrl(): string
    {
        return '/channeledit';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}