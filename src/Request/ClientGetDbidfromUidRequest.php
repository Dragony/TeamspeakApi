<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ClientGetDbidfromUidRequest implements TeamspeakRequestInterface
{
    public $cluid; /* clientUID */
	public $lientgetdbidfromuid;
	public $cluid; /* clientUID */

    public function __construct($cluid, bool $lientgetdbidfromuid, $cluid)
    {
        $this->cluid = $cluid;
		$this->lientgetdbidfromuid = $lientgetdbidfromuid;
		$this->cluid = $cluid;
    }

    public function getCommandUrl(): string
    {
        return '/clientgetdbidfromuid';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}