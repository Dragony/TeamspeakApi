<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class CustomSetRequest implements TeamspeakRequestInterface
{
    public $cldbid; /* clientDBID */
	public $ident; /* ident */
	public $value; /* value */

    public function __construct($cldbid, $ident, $value)
    {
        $this->cldbid = $cldbid;
		$this->ident = $ident;
		$this->value = $value;
    }

    public function getCommandUrl(): string
    {
        return '/customset';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}