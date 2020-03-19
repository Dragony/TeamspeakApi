<?php

namespace Dragony\TeamspeakApi\Http;

class TeamspeakCredentials
{
    public $scheme;
    public $host;
    public $port;
    public $user;
    public $pass;
    public $path;
    public $query;

    public static function createFromUrl(string $url)
    {
        $parsedUrl = parse_url($url);

        $creds = new self;
        $creds->scheme = $parsedUrl['scheme'] ?? null;
        $creds->host = $parsedUrl['host'] ?? null;
        $creds->port = $parsedUrl['port'] ?? null;
        $creds->user = $parsedUrl['user'] ?? null;
        $creds->pass = $parsedUrl['pass'] ?? null;
        $creds->path = $parsedUrl['path'] ?? null;
        parse_str($parsedUrl['query'] ?? null, $creds->query);

        return $creds;
    }

    public function getUrl()
    {
        return $this->scheme.'://'.$this->host. ($this->port ? ':' . $this->port : '');
    }
}