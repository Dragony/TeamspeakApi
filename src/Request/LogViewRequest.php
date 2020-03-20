<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class LogViewRequest implements TeamspeakRequestInterface
{
    public $lines;
	public $reverse;
	public $instance;
	public $begin_pos;

    public function __construct($lines = null, $reverse = null, $instance = null, $begin_pos = null)
    {
        $this->lines = $lines;
		$this->reverse = $reverse;
		$this->instance = $instance;
		$this->begin_pos = $begin_pos;
    }

    public function getCommandUrl(): string
    {
        return '/logview';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}