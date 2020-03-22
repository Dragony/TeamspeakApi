<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ComplainDelRequest implements TeamspeakRequestInterface
{
    public $tcldbid; /* targetClientDBID */
	public $fcldbid; /* fromClientDBID */

    public function __construct($tcldbid, $fcldbid)
    {
        $this->tcldbid = $tcldbid;
		$this->fcldbid = $fcldbid;
    }

    public function getCommandUrl(): string
    {
        return '/complaindel';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}