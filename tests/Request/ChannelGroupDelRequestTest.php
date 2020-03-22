<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ChannelGroupDelRequest;
use Helper\AdapterFactory;
use Helper\ResponseReader;
use Helper\TeamspeakArtifactFactory;
use PHPUnit\Framework\TestCase;

class ChannelGroupDelRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $group = TeamspeakArtifactFactory::addChannelGroup();

        $request = new ChannelGroupDelRequest($group['cgid']);

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
