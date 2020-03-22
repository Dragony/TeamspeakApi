<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ComplainAddRequest;
use Dragony\TeamspeakApi\Request\ComplainDelAllRequest;
use Dragony\TeamspeakApi\Response\ErrorResponse;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class ComplainAddRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);
        $client = ExistingItems::getExistingClient(ExistingItems::CLIENT_TYPE_VOICE);

        $request = new ComplainDelAllRequest($client['client_database_id']);
        $response = $adapter->request($request);
        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));

        $request = new ComplainAddRequest($client['client_database_id'], 'test complaint');
        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));

        $response = $adapter->request(new ComplainDelAllRequest($client['client_database_id']));
        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
