<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ServerNotifyunRegisterRequest;
use Dragony\TeamspeakApi\Response\GenericResponse;
use Helper\AdapterFactory;
use PHPUnit\Framework\TestCase;

class ServerNotifyunRegisterRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();

        $request = new ServerNotifyunRegisterRequest();

        $response = $adapter->request($request);

        $this->assertInstanceOf(GenericResponse::class, $response);
    }
}