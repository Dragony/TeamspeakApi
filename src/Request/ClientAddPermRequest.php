<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ClientAddPermRequest implements TeamspeakRequestInterface
{
    public $continueonerror;
	public $cldbid; /* clientDBID */
	public $permid; /* permID */
	public $permsid; /* permName */
	public $permvalue; /* permValue */
	public $permskip; /* 1|0 */

    public function __construct($cldbid, $permvalue, $permid = null, $permsid = null, $permskip = 0, bool $continueonerror = null)
    {
        $this->continueonerror = $continueonerror;
		$this->cldbid = $cldbid;
		$this->permid = $permid;
		$this->permsid = $permsid;
		$this->permvalue = $permvalue;
		$this->permskip = $permskip;
    }

    public function getCommandUrl(): string
    {
        return '/clientaddperm';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}