<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class MessageGetRequest implements TeamspeakRequestInterface
{
    public $msgid;

    public function __construct($msgid)
    {
        $this->msgid = $msgid;
    }

    public function getCommandUrl(): string
    {
        return '/messageget';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}