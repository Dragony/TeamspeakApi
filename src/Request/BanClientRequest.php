<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class BanClientRequest implements TeamspeakRequestInterface
{
    public $clid; /* clientID */
	public $time; /* timeInSeconds */
	public $banreason; /* text */

    public function __construct($clid, $time = null, $banreason = null)
    {
        $this->clid = $clid;
		$this->time = $time;
		$this->banreason = $banreason;
    }

    public function getCommandUrl(): string
    {
        return '/banclient';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}