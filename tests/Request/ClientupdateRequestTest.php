<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ClientupdateRequest;
use Dragony\TeamspeakApi\Response\GenericResponse;
use Helper\AdapterFactory;
use PHPUnit\Framework\TestCase;

class ClientupdateRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();

        $request = new ClientupdateRequest();

        $response = $adapter->request($request);

        $this->assertInstanceOf(GenericResponse::class, $response);
    }
}