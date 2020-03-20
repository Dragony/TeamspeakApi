<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class BindingListRequest implements TeamspeakRequestInterface
{
    public $subsystem;

    public function __construct($subsystem = null)
    {
        $this->subsystem = $subsystem;
    }

    public function getCommandUrl(): string
    {
        return '/bindinglist';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}