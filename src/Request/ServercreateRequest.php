<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ServercreateRequest implements TeamspeakRequestInterface
{
    public $virtualserver_name; /* serverName */
	public $virtualserver_properties;

    public function __construct($virtualserver_name, $virtualserver_properties)
    {
        $this->virtualserver_name = $virtualserver_name;
		$this->virtualserver_properties = $virtualserver_properties;
    }

    public function getCommandUrl(): string
    {
        return '/servercreate';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}