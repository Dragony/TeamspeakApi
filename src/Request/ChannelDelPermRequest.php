<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ChannelDelPermRequest implements TeamspeakRequestInterface
{
    public $cid;
	public $permid;
	public $permsid;

    public function __construct($cid, $permid = null, $permsid = null)
    {
        $this->cid = $cid;
		$this->permid = $permid;
		$this->permsid = $permsid;
    }

    public function getCommandUrl(): string
    {
        return '/channeldelperm';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}