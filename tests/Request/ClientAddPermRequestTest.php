<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ClientAddPermRequest;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class ClientAddPermRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $client = ExistingItems::getExistingClient(ExistingItems::CLIENT_TYPE_VOICE);
        $perm = ExistingItems::getExistingPerm();
        $request = new ClientAddPermRequest($client['client_database_id'], 50, $perm['permid']);

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
