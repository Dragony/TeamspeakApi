<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ServerGroupautoDelPermRequest implements TeamspeakRequestInterface
{
    public $sgtype; /* groupID */
	public $permid; /* permID */
	public $permsid; /* permName */

    public function __construct($sgtype, $permid, $permsid)
    {
        $this->sgtype = $sgtype;
		$this->permid = $permid;
		$this->permsid = $permsid;
    }

    public function getCommandUrl(): string
    {
        return '/servergroupautodelperm';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}