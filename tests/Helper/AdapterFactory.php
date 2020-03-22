<?php

namespace Helper;

use Dragony\TeamspeakApi\Http\TeamspeakAdapter;

class AdapterFactory
{
    public static function create()
    {
        return new TeamspeakAdapter('http://BAAMrKv9jOHsW8Boe70r5cYZMobIYfHs72KVGAx@localhost:10080');
    }
}