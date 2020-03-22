<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\BanDelRequest;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class BanDelRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();

        $request = new BanDelRequest(ExistingItems::getExistingBan());
        $adapter->setServerId(1);

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
