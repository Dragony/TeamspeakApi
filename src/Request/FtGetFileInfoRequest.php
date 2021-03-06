<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class FtGetFileInfoRequest implements TeamspeakRequestInterface
{
    public $cid; /* channelID */
	public $cpw; /* channelPassword */
	public $name; /* filePath */

    public function __construct($cid, $cpw, $name)
    {
        $this->cid = $cid;
		$this->cpw = $cpw;
		$this->name = $name;
    }

    public function getCommandUrl(): string
    {
        return '/ftgetfileinfo';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}