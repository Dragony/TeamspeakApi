<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ClientdbFindRequest;
use Dragony\TeamspeakApi\Response\ErrorResponse;
use Helper\AdapterFactory;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class ClientdbFindRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $request = new ClientdbFindRequest('serveradmin');

        $response = $adapter->request($request);

        if($response instanceof ErrorResponse){
            $this->assertEquals('database empty result set', $response->message);
        }else{
            $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
        }
    }
}
