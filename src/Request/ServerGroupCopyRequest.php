<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ServerGroupCopyRequest implements TeamspeakRequestInterface
{
    public $ssgid;
	public $tsgid;

    public function __construct($ssgid, $tsgid)
    {
        $this->ssgid = $ssgid;
		$this->tsgid = $tsgid;
    }

    public function getCommandUrl(): string
    {
        return '/servergroupcopy';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}