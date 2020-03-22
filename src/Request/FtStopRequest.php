<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class FtStopRequest implements TeamspeakRequestInterface
{
    public $serverftfid; /* serverFileTransferID */
	public $delete; /* 1|0 */

    public function __construct($serverftfid, $delete)
    {
        $this->serverftfid = $serverftfid;
		$this->delete = $delete;
    }

    public function getCommandUrl(): string
    {
        return '/ftstop';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}