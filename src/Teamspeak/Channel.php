<?php

namespace Dragony\TeamspeakApi\Teamspeak;

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

    /**
     * @JMS\Type(name="boolean")
     */
    public $channel_flag_permanent;

    /**
     * @JMS\Type(name="boolean")
     */
    public $channel_flag_default;
    /**
     * @JMS\Type(name="boolean")
     */

    public $channel_flag_password;

    /**
     * @JMS\Type(name="boolean")
     */
    public $channel_flag_semi_permanent;

    /**
     * @JMS\Type(name="string")
     */
    public $channel_maxclients;

    /**
     * @JMS\Type(name="string")
     */
    public $channel_maxfamilyclients;

    /**
     * @JMS\Type(name="integer")
     */
    public $channel_order;
}