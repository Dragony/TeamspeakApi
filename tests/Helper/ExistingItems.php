<?php

namespace Helper;

use Dragony\TeamspeakApi\Request\ApiKeyListRequest;
use Dragony\TeamspeakApi\Request\BanListRequest;
use Dragony\TeamspeakApi\Request\ChannelListRequest;
use Dragony\TeamspeakApi\Request\ChannelPermListRequest;
use Dragony\TeamspeakApi\Request\ClientListRequest;
use Dragony\TeamspeakApi\Request\TeamspeakRequestInterface;
use Dragony\TeamspeakApi\Response\ErrorResponse;
use Webmozart\Assert\Assert;

class ExistingItems
{
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

    public static function getExistingChannel()
    {
        $request = new ChannelListRequest();

        $bans = self::makeRequest($request, 1)->body;
        Assert::greaterThanEq(count($bans), 1);
        return $bans[0]['cid'];
    }

    public static function getExistingChannelPerm()
    {
        $request = new ChannelPermListRequest(self::getExistingChannel());

        $channelPerm = self::makeRequest($request, 1)->body;
        Assert::greaterThanEq(count($channelPerm), 1);
        return $channelPerm[0];
    }

    public static function getExistingClient()
    {
        $request = new ClientListRequest();

        $clients = self::makeRequest($request, 1)->body;
        Assert::greaterThanEq(count($clients), 1);
        return $clients[1];
    }

    protected static function makeRequest(TeamspeakRequestInterface $request, $serverId = null)
    {
        $adapter = AdapterFactory::create();
        if($serverId){
            $adapter->setServerId($serverId);
        }
        $response = $adapter->request($request);
        Assert::notInstanceOf($response, ErrorResponse::class, ResponseReader::getMessage($response));
        return $response;
    }
}