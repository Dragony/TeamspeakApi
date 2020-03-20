<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ChannelEditRequest implements TeamspeakRequestInterface
{
    public $cid;
	public $hannel_properties...;

    public function __construct($cid, bool $hannel_properties... = null)
    {
        $this->cid = $cid;
		$this->hannel_properties... = $hannel_properties...;
    }

    public function getCommandUrl(): string
    {
        return '/channeledit';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}