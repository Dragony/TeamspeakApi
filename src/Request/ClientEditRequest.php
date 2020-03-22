<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;
use Dragony\TeamspeakApi\Teamspeak\EditClient;

class ClientEditRequest implements TeamspeakRequestInterface
{
    /**
     * @var EditClient
     */
    public $editClient;

    public function __construct(EditClient $editClient)
    {
        $this->editClient = $editClient;
    }

    public function getCommandUrl(): string
    {
        return '/clientedit';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}