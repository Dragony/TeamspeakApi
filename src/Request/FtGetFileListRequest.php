<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class FtGetFileListRequest implements TeamspeakRequestInterface
{
    public $cid; /* channelID */
	public $cpw; /* channelPassword */
	public $path; /* filePath */

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
        return GenericResponse::class;
    }
}