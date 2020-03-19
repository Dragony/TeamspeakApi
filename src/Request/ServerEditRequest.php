<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ServerEditRequest implements TeamspeakRequestInterface
{
    public $irtualserver_properties...;

    public function __construct(bool $irtualserver_properties... = null)
    {
        $this->irtualserver_properties... = $irtualserver_properties...;
    }

    public function getCommandUrl(): string
    {
        return '/serveredit';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}