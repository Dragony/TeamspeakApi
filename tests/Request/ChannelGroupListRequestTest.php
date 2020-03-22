<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ChannelGroupListRequest;
use Helper\AdapterFactory;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class ChannelGroupListRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $request = new ChannelGroupListRequest();

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
