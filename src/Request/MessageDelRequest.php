<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class MessageDelRequest implements TeamspeakRequestInterface
{
    public $msgid; /* messageID */

    public function __construct($msgid)
    {
        $this->msgid = $msgid;
    }

    public function getCommandUrl(): string
    {
        return '/messagedel';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}