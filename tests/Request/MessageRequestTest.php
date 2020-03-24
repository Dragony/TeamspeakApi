<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\MessageAddRequest;
use Dragony\TeamspeakApi\Request\MessageDelRequest;
use Dragony\TeamspeakApi\Request\MessageGetRequest;
use Dragony\TeamspeakApi\Request\MessageListRequest;
use Dragony\TeamspeakApi\Request\MessageUpdateFlagRequest;
use Dragony\TeamspeakApi\Response\ErrorResponse;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class MessageRequestTest extends TestCase
{
    public function testRequest()
    {
        // It seems only messages for me can be read and messages can only
        // be sent to real clients with a UID. That makes testing this feature
        // with only the API key a little tricky.
        $this->markTestIncomplete('This test has not been implemented yet.');

        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $client = ExistingItems::getExistingClient(ExistingItems::CLIENT_TYPE_VOICE);
        $request = new MessageAddRequest($client['client_unique_identifier'], "Test", "This is a test message");
        $response = $adapter->request($request);
        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));

        $request = new MessageListRequest();
        $response = $adapter->request($request);
        if($response instanceof ErrorResponse){
            $this->assertEquals('database empty result set', $response->message);
        }else{
            $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
            $this->assertGreaterThanOrEqual(1, count($response->body));
        }

        $messageId = $response->body[0]['msgid'];

        $request = new MessageGetRequest($messageId);
        $response = $adapter->request($request);
        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));

        $request = new MessageUpdateFlagRequest($messageId, 1);
        $response = $adapter->request($request);
        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));

        $request = new MessageDelRequest($messageId);
        $response = $adapter->request($request);
        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
