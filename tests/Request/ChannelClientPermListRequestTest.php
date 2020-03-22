<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ChannelClientPermListRequest;
use Dragony\TeamspeakApi\Response\ErrorResponse;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class ChannelClientPermListRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $channel = ExistingItems::getExistingChannel()->cid;
        $client = ExistingItems::getExistingClient(ExistingItems::CLIENT_TYPE_VOICE);
        $request = new ChannelClientPermListRequest($channel, $client['client_database_id']);

        $response = $adapter->request($request);

        if($response instanceof ErrorResponse){
            $this->assertEquals('database empty result set', $response->message);
        }else{
            $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
        }
    }
}
