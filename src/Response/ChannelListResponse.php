<?php

namespace Dragony\TeamspeakApi\Response;

use JMS\Serializer\Annotation as JMS;

class ChannelListResponse
{
    /**
     * @JMS\Type(name="array<Dragony\TeamspeakApi\Teamspeak\Channel>")
     */
    public $body;

    /**
     * @JMS\Type(name="Dragony\TeamspeakApi\Response\StatusResponse")
     */
    public $status;
}