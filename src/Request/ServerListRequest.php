<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ServerListRequest implements TeamspeakRequestInterface
{
    public $uid;
	public $short;
	public $all;
	public $onlyoffline;

    public function __construct(bool $uid = null, bool $short = null, bool $all = null, bool $onlyoffline = null)
    {
        $this->uid = $uid;
		$this->short = $short;
		$this->all = $all;
		$this->onlyoffline = $onlyoffline;
    }

    public function getCommandUrl(): string
    {
        return '/serverlist';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}