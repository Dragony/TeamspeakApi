<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ClientAddPermRequest implements TeamspeakRequestInterface
{
    public $continueonerror;
	public $cldbid;
	public $permid;

    public function __construct(bool $continueonerror = null, $cldbid, $permid = null)
    {
        $this->continueonerror = $continueonerror;
		$this->cldbid = $cldbid;
		$this->permid = $permid;
    }

    public function getCommandUrl(): string
    {
        return '/clientaddperm';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}