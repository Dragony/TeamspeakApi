<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Request;

use Dragony\TeamspeakApi\Response\GenericResponse;

class ApiKeyAddRequest implements TeamspeakRequestInterface
{
    public $scope; /* manage|write|read */
	public $lifetime; /* days */
	public $cldbid; /* clientDBID */

    public function __construct($scope, $lifetime = null, $cldbid = null)
    {
        $this->scope = $scope;
		$this->lifetime = $lifetime;
		$this->cldbid = $cldbid;
    }

    public function getCommandUrl(): string
    {
        return '/apikeyadd';
    }

    public function getResponseClass(): string
    {
        return GenericResponse::class;
    }
}