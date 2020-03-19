<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class CustomDeleteRequest implements TeamspeakRequestInterface
{
    public $cldbid;
	public $ident;

    public function __construct($cldbid, $ident)
    {
        $this->cldbid = $cldbid;
		$this->ident = $ident;
    }

    public function getCommandUrl(): string
    {
        return '/customdelete';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}