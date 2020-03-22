<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class InstanceEditRequest implements TeamspeakRequestInterface
{
    public $instance_properties;

    public function __construct($instance_properties)
    {
        $this->instance_properties = $instance_properties;
    }

    public function getCommandUrl(): string
    {
        return '/instanceedit';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}