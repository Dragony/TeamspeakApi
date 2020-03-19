<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ComplainDelRequest implements TeamspeakRequestInterface
{
    public $tcldbid;
	public $fcldbid;

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
        return SuccessResponse::class;
    }
}