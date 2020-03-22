<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ChannelGroupPermListRequest;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class ChannelGroupPermListRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $channelGroup = ExistingItems::getExistingChannelGroup();
        $request = new ChannelGroupPermListRequest($channelGroup['cgid']);

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
