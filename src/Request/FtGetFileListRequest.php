<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class FtGetFileListRequest implements TeamspeakRequestInterface
{
    public $cid;
	public $cpw;
	public $path;

    public function __construct($cid, $cpw, $path)
    {
        $this->cid = $cid;
		$this->cpw = $cpw;
		$this->path = $path;
    }

    public function getCommandUrl(): string
    {
        return '/ftgetfilelist';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}