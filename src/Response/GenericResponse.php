<?php

namespace Dragony\TeamspeakApi\Response;

use JMS\Serializer\Annotation as JMS;

class GenericResponse
{
    /**
     * @JMS\Type(name="array")
     */
    public $body;

    /**
     * @JMS\Type(name="Dragony\TeamspeakApi\Response\StatusResponse")
     */
    public $status;
}