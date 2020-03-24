<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\LogoutRequest;
use Dragony\TeamspeakApi\Response\ErrorResponse;
use Helper\AdapterFactory;
use PHPUnit\Framework\TestCase;

class LogoutRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();

        $request = new LogoutRequest();

        $response = $adapter->request($request);

        $this->assertInstanceOf(ErrorResponse::class, $response);
        $this->assertEquals('out of scope', $response->message);
    }
}
