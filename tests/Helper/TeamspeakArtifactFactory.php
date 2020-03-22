<?php

namespace Helper;

use Dragony\TeamspeakApi\Channel\Channel;
use Dragony\TeamspeakApi\Request\ChannelAddPermRequest;
use Dragony\TeamspeakApi\Request\ChannelCreateRequest;
use Dragony\TeamspeakApi\Request\ChannelFindRequest;
use Dragony\TeamspeakApi\Request\ChannelGroupAddRequest;
use Webmozart\Assert\Assert;

class TeamspeakArtifactFactory
{
    public static function createChannel($channelName = null, $serverId = 1)
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId($serverId);

        $newChannel = new Channel();
        $newChannel->channel_name = $channelName ?? 'testchannel';
        $newChannel->channel_flag_permanent = true;

        $createChannel = new ChannelCreateRequest($newChannel);

        $response = $adapter->request($createChannel);
        Assert::isInstanceOf($response, $createChannel->getResponseClass(), ResponseReader::getMessage($response, $createChannel, $adapter));

        $request = new ChannelFindRequest($channelName ?? 'testchannel');
        $response = $adapter->request($request);

        Assert::isInstanceOf($response, $request->getResponseClass(), ResponseReader::getMessage($response));

        $channelId = $response->body[0]['cid'];

        Assert::greaterThanEq((int)$channelId, 0, 'channel id invalid');

        return $channelId;
    }

    public static function addChannelPerm($channelId)
    {
        $adapter = AdapterFactory::create();
        $adapter->setServerId(1);

        $perm = ExistingItems::getExistingChannelPerm();

        return $adapter->request(new ChannelAddPermRequest($channelId, $perm['permvalue'], $perm['permid']));
    }

    public static function addChannelGroup($groupname = null)
    {
        $name = $groupname ?? 'testgroup ' . uniqid();
        AdapterFactory::create()->setServerId(1)->request(new ChannelGroupAddRequest($name));
        return ExistingItems::getChannelGroupByName($name);
    }
}