<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ComplainDelallRequest implements TeamspeakRequestInterface
{
    public $tcldbid;

    public function __construct($tcldbid)
    {
        $this->tcldbid = $tcldbid;
    }

    public function getCommandUrl(): string
    {
        return '/complaindelall';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}