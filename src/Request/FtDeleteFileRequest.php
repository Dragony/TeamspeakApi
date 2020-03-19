<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class FtDeleteFileRequest implements TeamspeakRequestInterface
{
    public $cid;
	public $cpw;
	public $name;

    public function __construct($cid, $cpw, $name)
    {
        $this->cid = $cid;
		$this->cpw = $cpw;
		$this->name = $name;
    }

    public function getCommandUrl(): string
    {
        return '/ftdeletefile';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}