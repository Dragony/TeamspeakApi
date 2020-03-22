<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class LogAddRequest implements TeamspeakRequestInterface
{
    public $loglevel; /* 1-4 */
	public $logmsg; /* text */

    public function __construct($loglevel, $logmsg)
    {
        $this->loglevel = $loglevel;
		$this->logmsg = $logmsg;
    }

    public function getCommandUrl(): string
    {
        return '/logadd';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}