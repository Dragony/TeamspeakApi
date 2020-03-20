<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class SetClientChannelGroupRequest implements TeamspeakRequestInterface
{
    public $cgid;
	public $cid;
	public $cldbid;

    public function __construct($cgid, $cid, $cldbid)
    {
        $this->cgid = $cgid;
		$this->cid = $cid;
		$this->cldbid = $cldbid;
    }

    public function getCommandUrl(): string
    {
        return '/setclientchannelgroup';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}