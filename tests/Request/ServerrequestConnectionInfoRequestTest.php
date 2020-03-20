<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ServerrequestConnectionInfoRequest;
use Dragony\TeamspeakApi\Response\GenericResponse;
use Helper\AdapterFactory;
use PHPUnit\Framework\TestCase;

class ServerrequestConnectionInfoRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();

        $request = new ServerrequestConnectionInfoRequest();

        $response = $adapter->request($request);

        $this->assertInstanceOf(GenericResponse::class, $response);
    }
}
