<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ChannelGroupAddPermRequest;
use Dragony\TeamspeakApi\Request\ChannelGroupDelPermRequest;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class ChannelGroupDelPermRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $group = ExistingItems::getExistingChannelGroup();
        $perm = ExistingItems::getGroupPerm($group);
        $addRequest = new ChannelGroupAddPermRequest($group['cgid'], 50, $perm['permid']);

        $response = $adapter->request($addRequest);

        $this->assertInstanceOf($addRequest->getResponseClass(), $response, ResponseReader::getMessage($response));

        $request = new ChannelGroupDelPermRequest($group['cgid'], $perm['permid']);

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
