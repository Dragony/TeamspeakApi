<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class BanDelRequest implements TeamspeakRequestInterface
{
    public $banid;

    public function __construct($banid)
    {
        $this->banid = $banid;
    }

    public function getCommandUrl(): string
    {
        return '/bandel';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}