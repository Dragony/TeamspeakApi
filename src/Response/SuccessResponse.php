<?php

namespace Dragony\TeamspeakApi\Response;

use JMS\Serializer\Annotation as JMS;

class SuccessResponse
{
    /**
     * @JMS\Type(name="array")
     */
    public $body;

    /**
     * @JMS\Type(name="integer")
     */
    public $code;

    /**
     * @JMS\Type(name="string")
     */
    public $message;
}