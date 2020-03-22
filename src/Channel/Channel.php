<?php

namespace Dragony\TeamspeakApi\Channel;

use JMS\Serializer\Annotation as JMS;

class Channel
{
    /**
     * @JMS\Type(name="string")
     */
    public $cid;

    /**
     * @JMS\Type(name="string")
     */
    public $pid;

    /**
     * @JMS\Type(name="string")
     */
    public $total_clients;

    /**
     * @JMS\Type(name="string")
     */
    public $channel_name;

    /**
     * @JMS\Type(name="string")
     */
    public $channel_needed_subscribe_power;

    /**
     * @JMS\Type(name="string")
     */
    public $channel_topic;
}