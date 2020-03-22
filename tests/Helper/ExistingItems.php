<?php

namespace Helper;

use Dragony\TeamspeakApi\Channel\Channel;
use Dragony\TeamspeakApi\Request\ApiKeyListRequest;
use Dragony\TeamspeakApi\Request\BanListRequest;
use Dragony\TeamspeakApi\Request\ChannelFindRequest;
use Dragony\TeamspeakApi\Request\ChannelGroupListRequest;
use Dragony\TeamspeakApi\Request\ChannelListRequest;
use Dragony\TeamspeakApi\Request\ChannelPermListRequest;
use Dragony\TeamspeakApi\Request\ClientListRequest;
use Dragony\TeamspeakApi\Request\PermissionListRequest;
use Dragony\TeamspeakApi\Request\TeamspeakRequestInterface;
use Dragony\TeamspeakApi\Response\ErrorResponse;
use Webmozart\Assert\Assert;

class ExistingItems
{
    const CLIENT_TYPE_QUERY = "1";
    const CLIENT_TYPE_VOICE = "0";

    public static function getExistingApiKey()
    {
        $request = new ApiKeyListRequest();

        $apiKeys = self::makeRequest($request)->body;
        Assert::greaterThanEq(count($apiKeys), 2);
        return $apiKeys[1]['id'];
    }

    public static function getExistingBan()
    {
        $request = new BanListRequest();

        $bans = self::makeRequest($request, 1)->body;
        Assert::greaterThanEq(count($bans), 1);
        return $bans[0]['banid'];
    }

    public static function getExistingChannel(): Channel
    {
        $request = new ChannelListRequest();

        $bans = self::makeRequest($request, 1)->body;
        Assert::greaterThanEq(count($bans), 1);
        return $bans[0];
    }

    public static function getChannelIdByName($name)
    {
        $channels = self::makeRequest(new ChannelFindRequest($name), 1)->body;
        return $channels[0]['cid'];
    }

    public static function getExistingChannelPerm($channelId = null)
    {
        $request = new ChannelPermListRequest($channelId ?? self::getChannelIdByName('default'));

        $channelPerm = self::makeRequest($request, 1)->body;
        Assert::greaterThanEq(count($channelPerm), 1);
        return $channelPerm[0];
    }

    public static function getExistingClient($clientType = self::CLIENT_TYPE_QUERY)
    {
        $request = new ClientListRequest();

        $clients = self::makeRequest($request, 1)->body;
        Assert::greaterThanEq(count($clients), 1);
        foreach($clients as $client){
            if($client['client_type'] === $clientType){
                return $client;
            }
        }
        throw new \Exception('no clients connected');
    }

    public static function getExistingChannelGroupList()
    {
        return self::makeRequest(new ChannelGroupListRequest(), 1)->body[0];
    }

    public static function getExistingPerm()
    {
        return self::makeRequest(new PermissionListRequest())->body[0];
    }

    protected static function makeRequest(TeamspeakRequestInterface $request, $serverId = null)
    {
        $adapter = AdapterFactory::create();
        if($serverId){
            $adapter->setServerId($serverId);
        }
        $response = $adapter->request($request);
        Assert::notInstanceOf($response, ErrorResponse::class, ResponseReader::getMessage($response, $request));
        return $response;
    }
}