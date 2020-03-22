<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ChannelGroupCopyRequest;
use Helper\AdapterFactory;
use Helper\ResponseReader;
use Helper\TeamspeakArtifactFactory;
use PHPUnit\Framework\TestCase;

class ChannelGroupCopyRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $group1 = TeamspeakArtifactFactory::addChannelGroup('group ' . uniqid());
        $group2 = TeamspeakArtifactFactory::addChannelGroup('group ' . uniqid());

        $request = new ChannelGroupCopyRequest(
            $group1['cgid'],
            $group2['cgid'],
            'copy ' . uniqid(),
            $group1['type']
        );

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
