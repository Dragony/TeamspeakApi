<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ServerGroupListRequest;
use Dragony\TeamspeakApi\Response\GenericResponse;
use Helper\AdapterFactory;
use PHPUnit\Framework\TestCase;

class ServerGroupListRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();

        $request = new ServerGroupListRequest();

        $response = $adapter->request($request);

        $this->assertInstanceOf(GenericResponse::class, $response);
    }
}