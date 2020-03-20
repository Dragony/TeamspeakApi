<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class CustomsearchRequest implements TeamspeakRequestInterface
{
    public $ident;
	public $pattern;

    public function __construct($ident, $pattern)
    {
        $this->ident = $ident;
		$this->pattern = $pattern;
    }

    public function getCommandUrl(): string
    {
        return '/customsearch';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}