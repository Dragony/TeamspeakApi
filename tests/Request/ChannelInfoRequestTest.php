<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ChannelInfoRequest;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class ChannelInfoRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $request = new ChannelInfoRequest(ExistingItems::getExistingChannel()->cid);

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
