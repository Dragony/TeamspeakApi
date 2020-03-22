<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ClientGetidsRequest implements TeamspeakRequestInterface
{
    public $cluid; /* clientUID */
	public $lientgetids;
	public $cluid; /* clientUID */

    public function __construct($cluid, bool $lientgetids, $cluid)
    {
        $this->cluid = $cluid;
		$this->lientgetids = $lientgetids;
		$this->cluid = $cluid;
    }

    public function getCommandUrl(): string
    {
        return '/clientgetids';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}