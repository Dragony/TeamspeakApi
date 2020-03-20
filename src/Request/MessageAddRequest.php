<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class MessageAddRequest implements TeamspeakRequestInterface
{
    public $cluid;
	public $subject;
	public $message;

    public function __construct($cluid, $subject, $message)
    {
        $this->cluid = $cluid;
		$this->subject = $subject;
		$this->message = $message;
    }

    public function getCommandUrl(): string
    {
        return '/messageadd';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}