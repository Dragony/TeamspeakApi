<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ChannelGroupAddPermRequest;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class ChannelGroupAddPermRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $channelGroup = ExistingItems::getExistingChannelGroup();
        $perm = ExistingItems::getExistingPerm();
        $request = new ChannelGroupAddPermRequest($channelGroup['cgid'], 50, $perm['permid']);

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
