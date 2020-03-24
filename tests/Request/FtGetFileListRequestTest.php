<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\FtGetFileListRequest;
use Helper\AdapterFactory;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class FtGetFileListRequestTest extends TestCase
{
    public function testRequest()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
        $adapter = AdapterFactory::create();

        $request = new FtGetFileListRequest();

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
