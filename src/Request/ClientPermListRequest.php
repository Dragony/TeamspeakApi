<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ClientPermListRequest implements TeamspeakRequestInterface
{
    public $cldbid;
	public $permsid;

    public function __construct($cldbid, bool $permsid = null)
    {
        $this->cldbid = $cldbid;
		$this->permsid = $permsid;
    }

    public function getCommandUrl(): string
    {
        return '/clientpermlist';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}