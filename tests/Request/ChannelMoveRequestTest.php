<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ChannelDeleteRequest;
use Dragony\TeamspeakApi\Request\ChannelMoveRequest;
use Helper\AdapterFactory;
use Helper\ResponseReader;
use Helper\TeamspeakArtifactFactory;
use PHPUnit\Framework\TestCase;

class ChannelMoveRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $channel1 = TeamspeakArtifactFactory::createChannel('channel1');
        $channel2 = TeamspeakArtifactFactory::createChannel('channel2');
        $request = new ChannelMoveRequest($channel1, $channel2);

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));

        // Delete the channels again so tests can run again in this server
        $adapter->request(new ChannelDeleteRequest($channel1));
        $adapter->request(new ChannelDeleteRequest($channel2));
    }
}
