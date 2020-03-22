<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ClientUpdateRequest;
use Dragony\TeamspeakApi\Response\ErrorResponse;
use Dragony\TeamspeakApi\Teamspeak\UpdateClient;
use Helper\AdapterFactory;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class ClientUpdateRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $updateClient = new UpdateClient();
        $updateClient->client_nickname = "serveradmin";
        $request = new ClientUpdateRequest($updateClient);

        $response = $adapter->request($request);

        if($response instanceof ErrorResponse){
            $this->assertEquals('nickname is already in use', $response->message);
        }else{
            $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
        }
    }
}
