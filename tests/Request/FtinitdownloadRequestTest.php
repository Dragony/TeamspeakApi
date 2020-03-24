<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\FtinitdownloadRequest;
use Helper\AdapterFactory;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class FtinitdownloadRequestTest extends TestCase
{
    public function testRequest()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
        $adapter = AdapterFactory::create();

        $request = new FtinitdownloadRequest();

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
