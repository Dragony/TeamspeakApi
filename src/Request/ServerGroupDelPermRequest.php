<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ServerGroupDelPermRequest implements TeamspeakRequestInterface
{
    public $continueonerror;
	public $sgid;

    public function __construct(bool $continueonerror = null, $sgid)
    {
        $this->continueonerror = $continueonerror;
		$this->sgid = $sgid;
    }

    public function getCommandUrl(): string
    {
        return '/servergroupdelperm';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}