<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ClientGetUidfromclidRequest implements TeamspeakRequestInterface
{
    public $clid; /* clientID */
	public $lientgetuidfromclid;
	public $clid; /* clientID */

    public function __construct($clid, bool $lientgetuidfromclid, $clid)
    {
        $this->clid = $clid;
		$this->lientgetuidfromclid = $lientgetuidfromclid;
		$this->clid = $clid;
    }

    public function getCommandUrl(): string
    {
        return '/clientgetuidfromclid';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}