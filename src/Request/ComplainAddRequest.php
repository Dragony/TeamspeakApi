<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ComplainAddRequest implements TeamspeakRequestInterface
{
    public $tcldbid; /* targetClientDBID */
	public $message; /* text */

    public function __construct($tcldbid, $message)
    {
        $this->tcldbid = $tcldbid;
		$this->message = $message;
    }

    public function getCommandUrl(): string
    {
        return '/complainadd';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}