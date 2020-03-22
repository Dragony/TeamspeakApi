<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Http\TeamspeakAdapter;
use Dragony\TeamspeakApi\Request\CustomDeleteRequest;
use Dragony\TeamspeakApi\Request\CustomInfoRequest;
use Dragony\TeamspeakApi\Request\CustomSearchRequest;
use Dragony\TeamspeakApi\Request\CustomSetRequest;
use Dragony\TeamspeakApi\Request\TeamspeakRequestInterface;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class CustomRequestsTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $client = ExistingItems::getExistingClient(ExistingItems::CLIENT_TYPE_VOICE);
        $ident = 'test_attribute';

        $this->sendAndAssert(new CustomSetRequest($client['client_database_id'], $ident, 'test value'), $adapter);
        $this->sendAndAssert(new CustomInfoRequest($client['client_database_id']), $adapter);
        $this->sendAndAssert(new CustomSearchRequest($ident, '%test%'), $adapter);
        $this->sendAndAssert(new CustomDeleteRequest($client['client_database_id'], $ident), $adapter);
    }

    protected function sendAndAssert(TeamspeakRequestInterface $request, TeamspeakAdapter $adapter)
    {
        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response, $request, $adapter));
    }
}
