<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ChannelClientDelPermRequest;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class ChannelClientDelPermRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $channel = ExistingItems::getExistingChannel();
        $client = ExistingItems::getExistingClient();
        $perm = ExistingItems::getExistingChannelPerm();
        $request = new ChannelClientDelPermRequest($channel, $client['client_database_id'], $perm['permid']);

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
