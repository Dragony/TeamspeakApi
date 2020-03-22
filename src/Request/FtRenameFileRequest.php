<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class FtRenameFileRequest implements TeamspeakRequestInterface
{
    public $cid; /* channelID */
	public $cpw; /* channelPassword */
	public $tcid; /* targetChannelID */
	public $tcpw; /* targetChannelPassword */
	public $oldname; /* oldFilePath */
	public $newname; /* newFilePath */

    public function __construct($cid, $cpw, $tcid = null, $tcpw = null, $oldname, $newname)
    {
        $this->cid = $cid;
		$this->cpw = $cpw;
		$this->tcid = $tcid;
		$this->tcpw = $tcpw;
		$this->oldname = $oldname;
		$this->newname = $newname;
    }

    public function getCommandUrl(): string
    {
        return '/ftrenamefile';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}