<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ChannelDeleteRequest;
use Helper\AdapterFactory;
use Helper\ResponseReader;
use Helper\TeamspeakArtifactFactory;
use PHPUnit\Framework\TestCase;

class ChannelDeleteRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $newChannelId = TeamspeakArtifactFactory::createChannel();
        $request = new ChannelDeleteRequest($newChannelId, 1);

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
