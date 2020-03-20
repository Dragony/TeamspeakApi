<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ServerGroupAddRequest implements TeamspeakRequestInterface
{
    public $name;
	public $type;

    public function __construct($name, $type = null)
    {
        $this->name = $name;
		$this->type = $type;
    }

    public function getCommandUrl(): string
    {
        return '/servergroupadd';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}