<?php

namespace Helper;

use Dragony\TeamspeakApi\Http\TeamspeakAdapter;

class AdapterFactory
{
    public static function create()
    {
        return new TeamspeakAdapter('http://BAB5cmHaIYXZgCbRTqOaAECzBAz2VGSmVKDdOCd@localhost:10080');
    }
}