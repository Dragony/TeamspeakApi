<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class FtcreatedirRequest implements TeamspeakRequestInterface
{
    public $cid; /* channelID */
	public $cpw; /* channelPassword */
	public $dirname; /* dirPath */

    public function __construct($cid, $cpw, $dirname)
    {
        $this->cid = $cid;
		$this->cpw = $cpw;
		$this->dirname = $dirname;
    }

    public function getCommandUrl(): string
    {
        return '/ftcreatedir';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}