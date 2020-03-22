<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;
use Dragony\TeamspeakApi\Teamspeak\UpdateClient;

class ClientUpdateRequest implements TeamspeakRequestInterface
{
    /**
     * @var UpdateClient
     */
    public $updateClient;

    public function __construct(UpdateClient $updateClient)
    {
        $this->updateClient = $updateClient;
    }

    public function getCommandUrl(): string
    {
        return '/clientupdate';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}