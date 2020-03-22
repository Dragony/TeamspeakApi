<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ClientdbEditRequest implements TeamspeakRequestInterface
{
    public $cldbid; /* clientDBID */
	public $lient_properties...;

    public function __construct($cldbid, bool $lient_properties...)
    {
        $this->cldbid = $cldbid;
		$this->lient_properties... = $lient_properties...;
    }

    public function getCommandUrl(): string
    {
        return '/clientdbedit';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}