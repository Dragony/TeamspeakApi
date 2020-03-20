<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ServerSnapshotdeployRequest implements TeamspeakRequestInterface
{
    public $mapping;
	public $keepfiles;
	public $password;
	public $irtualserver_snapshot;

    public function __construct(bool $mapping = null, bool $keepfiles = null, $password = null, bool $irtualserver_snapshot)
    {
        $this->mapping = $mapping;
		$this->keepfiles = $keepfiles;
		$this->password = $password;
		$this->irtualserver_snapshot = $irtualserver_snapshot;
    }

    public function getCommandUrl(): string
    {
        return '/serversnapshotdeploy';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}