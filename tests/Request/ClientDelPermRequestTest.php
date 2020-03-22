<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ClientAddPermRequest;
use Dragony\TeamspeakApi\Request\ClientDelPermRequest;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class ClientDelPermRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $client = ExistingItems::getExistingClient(ExistingItems::CLIENT_TYPE_VOICE);
        $perm = ExistingItems::getExistingPerm();

        $request = new ClientDelPermRequest($client['client_database_id'], $perm['permid']);

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));

        // Restore permissions so tests can run again on same server
        $adapter->request(new ClientAddPermRequest($client['client_database_id'], 50, $perm['permid']));
    }
}
