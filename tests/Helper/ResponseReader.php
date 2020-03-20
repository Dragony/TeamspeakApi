<?php

namespace Helper;

use Dragony\TeamspeakApi\Response\ErrorResponse;

class ResponseReader
{
    public static function getMessage($request)
    {
        if($request instanceof ErrorResponse){
            return $request->message;
        }
        return $request->status->message;
    }
}