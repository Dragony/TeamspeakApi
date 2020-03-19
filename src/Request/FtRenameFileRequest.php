<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class FtRenameFileRequest implements TeamspeakRequestInterface
{
    public $cid;
	public $cpw;

    public function __construct($cid, $cpw)
    {
        $this->cid = $cid;
		$this->cpw = $cpw;
    }

    public function getCommandUrl(): string
    {
        return '/ftrenamefile';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}