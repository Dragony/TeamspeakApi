<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ClientGetDbidfromUidRequest;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class ClientGetDbidfromUidRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $client = ExistingItems::getExistingClient();
        $request = new ClientGetDbidfromUidRequest($client['client_unique_identifier']);

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
