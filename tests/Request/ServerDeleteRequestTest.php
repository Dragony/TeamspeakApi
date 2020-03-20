<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ServerDeleteRequest;
use Dragony\TeamspeakApi\Response\GenericResponse;
use Helper\AdapterFactory;
use PHPUnit\Framework\TestCase;

class ServerDeleteRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();

        $request = new ServerDeleteRequest();

        $response = $adapter->request($request);

        $this->assertInstanceOf(GenericResponse::class, $response);
    }
}
