<?php

namespace Dragony\TeamspeakApi\Response;

use JMS\Serializer\Annotation as JMS;

class ErrorResponse
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