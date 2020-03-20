<?php

namespace Dragony\TeamspeakApi\Response;

use JMS\Serializer\Annotation as JMS;

class StatusResponse
{
    /**
     * @JMS\Type(name="integer")
     */
    public $code;

    /**
     * @JMS\Type(name="string")
     */
    public $message;
}