<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\SuccessResponse;

class ClientEditRequest implements TeamspeakRequestInterface
{
    public $clid;
	public $lient_properties...;

    public function __construct($clid, bool $lient_properties... = null)
    {
        $this->clid = $clid;
		$this->lient_properties... = $lient_properties...;
    }

    public function getCommandUrl(): string
    {
        return '/clientedit';
    }

    public function getResponseClass(): string
    {
        return SuccessResponse::class;
    }
}