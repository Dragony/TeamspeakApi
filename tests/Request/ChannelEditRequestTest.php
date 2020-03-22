<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ChannelEditRequest;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class ChannelEditRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $channel = ExistingItems::getExistingChannel();
        // Edit will fail if channel name is the same as before
        $channel->channel_name = $channel->channel_name == "Default Channel" ? "Default Channel 2" : "Default Channel";
        $request = new ChannelEditRequest($channel);

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response, $request, $adapter));
    }
}
