<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ChannelDeleteRequest;
use Dragony\TeamspeakApi\Request\ClientMoveRequest;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use Helper\TeamspeakArtifactFactory;
use PHPUnit\Framework\TestCase;

class ClientMoveRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $channel = TeamspeakArtifactFactory::createChannel();
        $client = ExistingItems::getExistingClient(ExistingItems::CLIENT_TYPE_VOICE);
        $request = new ClientMoveRequest($client['clid'], $channel);

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));

        $adapter->request(new ClientMoveRequest($client['clid'], ExistingItems::getChannelIdByName('default')));

        // Delete channel so we can re-run tests
        $adapter->request(new ChannelDeleteRequest($channel));
    }
}
