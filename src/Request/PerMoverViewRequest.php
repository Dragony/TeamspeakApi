<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class PerMoverViewRequest implements TeamspeakRequestInterface
{
    public $cid;
	public $cldbid;
	public $permid;

    public function __construct($cid, $cldbid, $permid = null)
    {
        $this->cid = $cid;
		$this->cldbid = $cldbid;
		$this->permid = $permid;
    }

    public function getCommandUrl(): string
    {
        return '/permoverview';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}