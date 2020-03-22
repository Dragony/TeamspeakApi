<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ChannelDelPermRequest;
use Helper\AdapterFactory;
use Helper\ExistingItems;
use Helper\ResponseReader;
use Helper\TeamspeakArtifactFactory;
use PHPUnit\Framework\TestCase;

class ChannelDelPermRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $channel = ExistingItems::getExistingChannel()->cid;
        TeamspeakArtifactFactory::addChannelPerm($channel);

        $perm = ExistingItems::getExistingChannelPerm($channel);
        $request = new ChannelDelPermRequest($channel, $perm['permid']);

        $response = $adapter->request($request);

        $this->assertInstanceOf($request->getResponseClass(), $response, ResponseReader::getMessage($response));
    }
}
