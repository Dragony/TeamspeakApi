<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ServerGroupCopyRequest implements TeamspeakRequestInterface
{
    public $ssgid; /* sourceGroupID */
	public $tsgid; /* targetGroupID */
	public $name; /* groupName */
	public $type; /* groupDbType */

    public function __construct($ssgid, $tsgid, $name, $type)
    {
        $this->ssgid = $ssgid;
		$this->tsgid = $tsgid;
		$this->name = $name;
		$this->type = $type;
    }

    public function getCommandUrl(): string
    {
        return '/servergroupcopy';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}