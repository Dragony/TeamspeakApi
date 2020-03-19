<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ClientupdateRequest implements TeamspeakRequestInterface
{
    public $lient_properties...;

    public function __construct(bool $lient_properties... = null)
    {
        $this->lient_properties... = $lient_properties...;
    }

    public function getCommandUrl(): string
    {
        return '/clientupdate';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}