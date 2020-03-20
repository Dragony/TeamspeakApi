<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ApiKeyDelRequest;
use Dragony\TeamspeakApi\Request\ApiKeyListRequest;
use Helper\AdapterFactory;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class ApiKeyDelRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();

        $request = new ApiKeyDelRequest($this->getExistingApiKey());

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }

    protected function getExistingApiKey()
    {
        $adapter = AdapterFactory::create();
        $request = new ApiKeyListRequest();
        $response = $adapter->request($request);
        $apiKeys = $response->body;
        $this->assertGreaterThanOrEqual(2, count($apiKeys));
        return $apiKeys[1]['id'];
    }
}
