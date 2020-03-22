<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ChannelAddPermRequest;
use Dragony\TeamspeakApi\Request\ChannelPermListRequest;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class ChannelPermListRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $channelId = ExistingItems::getExistingChannel()->cid;
        $perm = ExistingItems::getExistingPerm();

        $addRequest = new ChannelAddPermRequest($channelId, 50, $perm['permid']);

        $response = $adapter->request($addRequest);

        $this->assertInstanceOf($addRequest->getResponseClass(), $response, ResponseReader::getMessage($response));

        $request = new ChannelPermListRequest($channelId);

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
