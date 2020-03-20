<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelPermListRequest implements TeamspeakRequestInterface
{
    public $cid;
	public $permsid;

    public function __construct($cid, bool $permsid = null)
    {
        $this->cid = $cid;
		$this->permsid = $permsid;
    }

    public function getCommandUrl(): string
    {
        return '/channelpermlist';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}