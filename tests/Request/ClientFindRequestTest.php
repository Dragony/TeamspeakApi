<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ClientFindRequest;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class ClientFindRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $request = new ClientFindRequest(ExistingItems::getExistingClient()['client_nickname']);

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
