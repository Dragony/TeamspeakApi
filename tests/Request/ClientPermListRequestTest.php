<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ClientPermListRequest;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class ClientPermListRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $client = ExistingItems::getExistingClient(ExistingItems::CLIENT_TYPE_VOICE);
        $request = new ClientPermListRequest($client['client_database_id']);

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
