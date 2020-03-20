<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ServerGroupautoDelPermRequest implements TeamspeakRequestInterface
{
    public $sgtype;
	public $permid;

    public function __construct($sgtype, $permid = null)
    {
        $this->sgtype = $sgtype;
		$this->permid = $permid;
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