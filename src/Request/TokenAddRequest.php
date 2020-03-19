<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class TokenAddRequest implements TeamspeakRequestInterface
{
    public $tokentype;
	public $tokenid1;
	public $tokenid2;

    public function __construct($tokentype, $tokenid1, $tokenid2)
    {
        $this->tokentype = $tokentype;
		$this->tokenid1 = $tokenid1;
		$this->tokenid2 = $tokenid2;
    }

    public function getCommandUrl(): string
    {
        return '/tokenadd';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}