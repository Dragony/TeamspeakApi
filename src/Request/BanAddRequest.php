<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class BanAddRequest implements TeamspeakRequestInterface
{
    public $ip;
	public $name;
	public $uid;
	public $mytsid;

    public function __construct($ip = null, $name = null, $uid = null, $mytsid = null)
    {
        $this->ip = $ip;
		$this->name = $name;
		$this->uid = $uid;
		$this->mytsid = $mytsid;
    }

    public function getCommandUrl(): string
    {
        return '/banadd';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}