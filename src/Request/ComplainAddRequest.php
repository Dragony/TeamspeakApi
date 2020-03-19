<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ComplainAddRequest implements TeamspeakRequestInterface
{
    public $tcldbid;
	public $message;

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
        return SuccessResponse::class;
    }
}