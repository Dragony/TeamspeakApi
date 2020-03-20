<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class SendTextMessageRequest implements TeamspeakRequestInterface
{
    public $targetmode;
	public $target;
	public $msg;

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