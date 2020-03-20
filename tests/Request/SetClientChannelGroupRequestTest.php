<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\SetClientChannelGroupRequest;
use Helper\AdapterFactory;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class SetClientChannelGroupRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();

        $request = new SetClientChannelGroupRequest();

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
