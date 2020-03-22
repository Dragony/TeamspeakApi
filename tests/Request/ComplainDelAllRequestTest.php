<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ComplainDelAllRequest;
use Helper\AdapterFactory;
use Helper\ResponseReader;
use Helper\TeamspeakArtifactFactory;
use PHPUnit\Framework\TestCase;

class ComplainDelAllRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $complaintTargetId = TeamspeakArtifactFactory::addComplaint();
        $request = new ComplainDelAllRequest($complaintTargetId);

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
