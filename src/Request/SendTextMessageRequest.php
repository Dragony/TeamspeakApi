<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class SendTextMessageRequest implements TeamspeakRequestInterface
{
    public $targetmode; /* 1-3 */
	public $target; /* clientID */
	public $msg; /* text */

    public function __construct($targetmode, $target, $msg)
    {
        $this->targetmode = $targetmode;
		$this->target = $target;
		$this->msg = $msg;
    }

    public function getCommandUrl(): string
    {
        return '/sendtextmessage';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}