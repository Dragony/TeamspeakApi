<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ClientdbDeleteRequest;
use Dragony\TeamspeakApi\Response\ErrorResponse;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class ClientdbDeleteRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $client = ExistingItems::getExistingClient();
        $request = new ClientdbDeleteRequest($client['client_database_id']);

        $response = $adapter->request($request);

        if($response instanceof ErrorResponse){
            $this->assertEquals('client is online', $response->message);
        }else{
            $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
        }
    }
}
