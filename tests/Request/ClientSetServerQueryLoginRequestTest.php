<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ClientSetServerQueryLoginRequest;
use Dragony\TeamspeakApi\Response\GenericResponse;
use Helper\AdapterFactory;
use PHPUnit\Framework\TestCase;

class ClientSetServerQueryLoginRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();

        $request = new ClientSetServerQueryLoginRequest();

        $response = $adapter->request($request);

        $this->assertInstanceOf(GenericResponse::class, $response);
    }
}