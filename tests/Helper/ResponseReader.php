<?php

namespace Helper;

use Dragony\TeamspeakApi\Http\TeamspeakAdapter;
use Dragony\TeamspeakApi\Request\TeamspeakRequestInterface;
use Dragony\TeamspeakApi\Response\ErrorResponse;

class ResponseReader
{
    public static function getMessage($response, ?TeamspeakRequestInterface $request = null, TeamspeakAdapter $adapter = null)
    {
        if($adapter and $request){
            $path = $adapter->createPsr7Request($request)->getUri();
        }else{
            $path = null !== $request ? ' ' . $request->getCommandUrl() : '';
        }
        if($response instanceof ErrorResponse){
            return $response->message . $path;
        }
        return $response->status->message;
    }
}