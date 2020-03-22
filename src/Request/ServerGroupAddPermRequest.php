<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ServerGroupAddPermRequest implements TeamspeakRequestInterface
{
    public $continueonerror;
	public $sgid; /* groupID */
	public $permid; /* permID */
	public $permsid; /* permName */
	public $permvalue; /* permValue */
	public $permnegated; /* 1|0 */
	public $permskip; /* 1|0 */

    public function __construct(bool $continueonerror = null, $sgid, $permid, $permsid, $permvalue, $permnegated, $permskip)
    {
        $this->continueonerror = $continueonerror;
		$this->sgid = $sgid;
		$this->permid = $permid;
		$this->permsid = $permsid;
		$this->permvalue = $permvalue;
		$this->permnegated = $permnegated;
		$this->permskip = $permskip;
    }

    public function getCommandUrl(): string
    {
        return '/servergroupaddperm';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}