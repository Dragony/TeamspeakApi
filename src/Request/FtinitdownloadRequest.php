<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class FtinitdownloadRequest implements TeamspeakRequestInterface
{
    public $clientftfid; /* clientFileTransferID */
	public $name; /* filePath */
	public $cid; /* channelID */
	public $cpw; /* channelPassword */
	public $seekpos; /* seekPosition */
	public $proto;

    public function __construct($clientftfid, $name, $cid, $cpw, $seekpos, $proto = null)
    {
        $this->clientftfid = $clientftfid;
		$this->name = $name;
		$this->cid = $cid;
		$this->cpw = $cpw;
		$this->seekpos = $seekpos;
		$this->proto = $proto;
    }

    public function getCommandUrl(): string
    {
        return '/ftinitdownload';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}