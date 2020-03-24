<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\PermidGetbyNameRequest;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use PHPUnit\Framework\TestCase;

class PermidGetbyNameRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $perm = ExistingItems::getExistingPerm();
        $request = new PermidGetbyNameRequest($perm['permname']);

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
