<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ClientMoveRequest implements TeamspeakRequestInterface
{
    public $clid;
	public $cid;
	public $cpw;

    public function __construct($clid, $cid, $cpw = null)
    {
        $this->clid = $clid;
		$this->cid = $cid;
		$this->cpw = $cpw;
    }

    public function getCommandUrl(): string
    {
        return '/clientmove';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}