<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ClientdbListRequest implements TeamspeakRequestInterface
{
    public $start; /* offset */
	public $duration; /* limit */
	public $count;

    public function __construct($start = null, $duration = null, bool $count = null)
    {
        $this->start = $start;
		$this->duration = $duration;
		$this->count = $count;
    }

    public function getCommandUrl(): string
    {
        return '/clientdblist';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}