<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ClientEditRequest;
use Dragony\TeamspeakApi\Teamspeak\EditClient;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class ClientEditRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $editClient = new EditClient();
        $editClient->clid = ExistingItems::getExistingClient(ExistingItems::CLIENT_TYPE_VOICE)['clid'];
        $editClient->client_description = 'description';
        $request = new ClientEditRequest($editClient);

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response, $request, $adapter));
    }
}
