<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class MessageupdateflagRequest implements TeamspeakRequestInterface
{
    public $msgid;
	public $flag;

    public function __construct($msgid, $flag)
    {
        $this->msgid = $msgid;
		$this->flag = $flag;
    }

    public function getCommandUrl(): string
    {
        return '/messageupdateflag';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}