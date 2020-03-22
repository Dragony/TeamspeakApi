<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class FtinituploadRequest implements TeamspeakRequestInterface
{
    public $clientftfid; /* clientFileTransferID */
	public $name; /* filePath */
	public $cid; /* channelID */
	public $cpw; /* channelPassword */
	public $size; /* fileSize */
	public $overwrite; /* 1|0 */
	public $resume; /* 1|0 */
	public $proto;

    public function __construct($clientftfid, $name, $cid, $cpw, $size, $overwrite, $resume, $proto = null)
    {
        $this->clientftfid = $clientftfid;
		$this->name = $name;
		$this->cid = $cid;
		$this->cpw = $cpw;
		$this->size = $size;
		$this->overwrite = $overwrite;
		$this->resume = $resume;
		$this->proto = $proto;
    }

    public function getCommandUrl(): string
    {
        return '/ftinitupload';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}