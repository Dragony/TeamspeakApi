<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\FtDeleteFileRequest;
use Helper\AdapterFactory;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class FtDeleteFileRequestTest extends TestCase
{
    public function testRequest()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
        $adapter = AdapterFactory::create();

        $request = new FtDeleteFileRequest();

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
