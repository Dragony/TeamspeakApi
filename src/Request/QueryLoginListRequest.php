<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class QueryLoginListRequest implements TeamspeakRequestInterface
{
    public $pattern; /* clientLoginName */
	public $start; /* offset */
	public $duration; /* limit */
	public $count;

    public function __construct($pattern = null, $start = null, $duration = null, bool $count = null)
    {
        $this->pattern = $pattern;
		$this->start = $start;
		$this->duration = $duration;
		$this->count = $count;
    }

    public function getCommandUrl(): string
    {
        return '/queryloginlist';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}