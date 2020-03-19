<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class InstanceEditRequest implements TeamspeakRequestInterface
{
    public $nstance_properties...;

    public function __construct(bool $nstance_properties... = null)
    {
        $this->nstance_properties... = $nstance_properties...;
    }

    public function getCommandUrl(): string
    {
        return '/instanceedit';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}