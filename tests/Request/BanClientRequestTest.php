<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\BanClientRequest;
use Dragony\TeamspeakApi\Response\ErrorResponse;
use Helper\AdapterFactory;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class BanClientRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();

        $request = new BanClientRequest(1);
        $adapter->setServerId(1);

        $response = $adapter->request($request);

        $this->assertInstanceOf(ErrorResponse::class, $response);
        $this->assertEquals('invalid client type', $response->message);
    }
}
