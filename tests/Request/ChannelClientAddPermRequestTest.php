<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ChannelClientAddPermRequest;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class ChannelClientAddPermRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $client = ExistingItems::getExistingClient();
        $channel = ExistingItems::getExistingChannel();
        $perm = ExistingItems::getExistingChannelPerm();
        $request = new ChannelClientAddPermRequest($channel, $client['client_database_id'], $perm['permid'], $perm['permvalue']);

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
