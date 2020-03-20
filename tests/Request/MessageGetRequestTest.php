<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\MessageGetRequest;
use Dragony\TeamspeakApi\Response\GenericResponse;
use Helper\AdapterFactory;
use PHPUnit\Framework\TestCase;

class MessageGetRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();

        $request = new MessageGetRequest();

        $response = $adapter->request($request);

        $this->assertInstanceOf(GenericResponse::class, $response);
    }
}
