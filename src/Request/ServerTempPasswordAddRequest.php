<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ServerTempPasswordAddRequest implements TeamspeakRequestInterface
{
    public $pw; /* password */
	public $desc; /* description */
	public $duration; /* seconds */
	public $tcid; /* channelID */
	public $tcpw; /* channelPW */

    public function __construct($pw, $desc, $duration, $tcid, $tcpw)
    {
        $this->pw = $pw;
		$this->desc = $desc;
		$this->duration = $duration;
		$this->tcid = $tcid;
		$this->tcpw = $tcpw;
    }

    public function getCommandUrl(): string
    {
        return '/servertemppasswordadd';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}