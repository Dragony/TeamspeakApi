<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ClientGetidsRequest;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class ClientGetidsRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $client = ExistingItems::getExistingClient(ExistingItems::CLIENT_TYPE_VOICE);
        $request = new ClientGetidsRequest($client['client_unique_identifier']);

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
