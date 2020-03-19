<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ChannelInfoRequest implements TeamspeakRequestInterface
{
    public $cid;

    public function __construct($cid)
    {
        $this->cid = $cid;
    }

    public function getCommandUrl(): string
    {
        return '/channelinfo';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}