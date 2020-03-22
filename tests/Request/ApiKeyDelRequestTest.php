<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ApiKeyDelRequest;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class ApiKeyDelRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();

        $request = new ApiKeyDelRequest(ExistingItems::getExistingApiKey());

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
