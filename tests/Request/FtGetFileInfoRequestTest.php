<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\FtGetFileInfoRequest;
use Helper\AdapterFactory;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class FtGetFileInfoRequestTest extends TestCase
{
    public function testRequest()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
        $adapter = AdapterFactory::create();

        $request = new FtGetFileInfoRequest();

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
