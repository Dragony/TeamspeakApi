<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class MessageUpdateFlagRequest implements TeamspeakRequestInterface
{
    public $msgid; /* messageID */
	public $flag; /* 1|0 */

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
        return GenericResponse::class;
    }
}