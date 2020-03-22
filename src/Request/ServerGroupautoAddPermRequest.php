<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ServerGroupautoAddPermRequest implements TeamspeakRequestInterface
{
    public $sgtype; /* groupID */
	public $permid; /* permID */
	public $permsid; /* permName */
	public $permvalue; /* permValue */
	public $permnegated; /* 1|0 */
	public $permskip; /* 1|0 */

    public function __construct($sgtype, $permid, $permsid, $permvalue, $permnegated, $permskip)
    {
        $this->sgtype = $sgtype;
		$this->permid = $permid;
		$this->permsid = $permsid;
		$this->permvalue = $permvalue;
		$this->permnegated = $permnegated;
		$this->permskip = $permskip;
    }

    public function getCommandUrl(): string
    {
        return '/servergroupautoaddperm';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}