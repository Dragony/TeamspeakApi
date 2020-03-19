<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ClientKickRequest implements TeamspeakRequestInterface
{
    public $clid;
	public $reasonid;
	public $reasonmsg;

    public function __construct($clid, $reasonid, $reasonmsg = null)
    {
        $this->clid = $clid;
		$this->reasonid = $reasonid;
		$this->reasonmsg = $reasonmsg;
    }

    public function getCommandUrl(): string
    {
        return '/clientkick';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}