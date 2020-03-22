<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ClientEditRequest implements TeamspeakRequestInterface
{
    public $clid; /* clientID */
	public $client_properties;

    public function __construct($clid, $client_properties)
    {
        $this->clid = $clid;
		$this->client_properties = $client_properties;
    }

    public function getCommandUrl(): string
    {
        return '/clientedit';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}