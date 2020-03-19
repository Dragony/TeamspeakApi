<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ServerTempPasswordAddRequest implements TeamspeakRequestInterface
{
    public $pw;
	public $desc;

    public function __construct($pw, $desc)
    {
        $this->pw = $pw;
		$this->desc = $desc;
    }

    public function getCommandUrl(): string
    {
        return '/servertemppasswordadd';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}