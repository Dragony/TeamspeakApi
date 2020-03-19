<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ApiKeyListRequest implements TeamspeakRequestInterface
{
    public $cldbid;
	public $start;
	public $duration;
	public $count;

    public function __construct($cldbid = null, $start = null, $duration = null, bool $count = null)
    {
        $this->cldbid = $cldbid;
		$this->start = $start;
		$this->duration = $duration;
		$this->count = $count;
    }

    public function getCommandUrl(): string
    {
        return '/apikeylist';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}