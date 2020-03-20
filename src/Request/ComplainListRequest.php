<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ComplainListRequest implements TeamspeakRequestInterface
{
    public $tcldbid;

    public function __construct($tcldbid = null)
    {
        $this->tcldbid = $tcldbid;
    }

    public function getCommandUrl(): string
    {
        return '/complainlist';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}