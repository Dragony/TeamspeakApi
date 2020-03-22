<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ClientGetnamefromUidRequest implements TeamspeakRequestInterface
{
    public $cluid; /* clientUID */
	public $lientgetnamefromuid;
	public $cluid; /* clientUID */

    public function __construct($cluid, bool $lientgetnamefromuid, $cluid)
    {
        $this->cluid = $cluid;
		$this->lientgetnamefromuid = $lientgetnamefromuid;
		$this->cluid = $cluid;
    }

    public function getCommandUrl(): string
    {
        return '/clientgetnamefromuid';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}