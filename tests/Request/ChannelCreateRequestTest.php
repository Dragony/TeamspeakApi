<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Channel\Channel;
use Dragony\TeamspeakApi\Request\ChannelCreateRequest;
use Helper\AdapterFactory;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class ChannelCreateRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $channel = new Channel();
        $channel->channel_name = uniqid();

        $request = new ChannelCreateRequest($channel);

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
