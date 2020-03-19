<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ServerStopRequest implements TeamspeakRequestInterface
{
    public $sid;
	public $reasonmsg;

    public function __construct($sid, $reasonmsg = null)
    {
        $this->sid = $sid;
		$this->reasonmsg = $reasonmsg;
    }

    public function getCommandUrl(): string
    {
        return '/serverstop';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}