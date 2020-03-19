<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ClientDelPermRequest implements TeamspeakRequestInterface
{
    public $cldbid;
	public $permid;

    public function __construct($cldbid, $permid = null)
    {
        $this->cldbid = $cldbid;
		$this->permid = $permid;
    }

    public function getCommandUrl(): string
    {
        return '/clientdelperm';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}