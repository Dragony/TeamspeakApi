<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ClientdbFindRequest implements TeamspeakRequestInterface
{
    public $uid;
	public $pattern; /* clientName|clientUID */

    public function __construct($pattern, bool $uid = null)
    {
        $this->uid = $uid;
		$this->pattern = $pattern;
    }

    public function getCommandUrl(): string
    {
        return '/clientdbfind';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}