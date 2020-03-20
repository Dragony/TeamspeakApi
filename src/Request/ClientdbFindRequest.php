<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ClientdbFindRequest implements TeamspeakRequestInterface
{
    public $uid;
	public $pattern;

    public function __construct(bool $uid = null, $pattern)
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