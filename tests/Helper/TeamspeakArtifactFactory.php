<?php

namespace Helper;

use Dragony\TeamspeakApi\Request\ChannelAddPermRequest;
use Dragony\TeamspeakApi\Request\ChannelcreateRequest;
use Dragony\TeamspeakApi\Request\ChannelFindRequest;

class TeamspeakArtifactFactory
{
    public static function createChannel($serverId = 1)
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $createChannel = new ChannelcreateRequest('testchannel');

        $adapter->request($createChannel);

        return $adapter->request(new ChannelFindRequest('testchannel'))->body[0]['cid'];
    }

    public static function addChannelPerm($channelId)
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $perm = ExistingItems::getExistingChannelPerm();

        return $adapter->request(new ChannelAddPermRequest($channelId, $perm['permvalue'], $perm['permid']));
    }
}