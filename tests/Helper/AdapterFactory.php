<?php

namespace Helper;

use Dragony\TeamspeakApi\Http\TeamspeakAdapter;

class AdapterFactory
{
    public static function create()
    {
        return new TeamspeakAdapter('http://BABDac2dGkzPTElXfaR5XpjOZYpQVj8A7Cynmyq@localhost:10080');
    }
}