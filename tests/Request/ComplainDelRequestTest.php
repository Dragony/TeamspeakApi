<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ComplainAddRequest;
use Dragony\TeamspeakApi\Request\ComplainDelRequest;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class ComplainDelRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $client = ExistingItems::getExistingClient(ExistingItems::CLIENT_TYPE_VOICE);
        $request = new ComplainAddRequest($client['client_database_id'], 'test complaint');
        $response = $adapter->request($request);
        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));

        $complaints = ExistingItems::getAllComplaints();

        $this->assertNotEmpty($complaints);

        foreach($complaints as $complaint){
            $request = new ComplainDelRequest($complaint['tcldbid'], $complaint['fcldbid']);
            $response = $adapter->request($request);
            $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
        }
    }
}
