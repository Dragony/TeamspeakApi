<?php

declare(strict_types=1);

namespace Dragony\TeamspeakApi\Http;

use Buzz\Client\Curl;
use Dragony\TeamspeakApi\Request\TeamspeakRequestInterface;
use Dragony\TeamspeakApi\Response\ErrorResponse;
use Dragony\TeamspeakApi\Response\GenericResponse;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7\Request;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class TeamspeakAdapter
{
    /**
     * @var ClientInterface|null
     */
    private $client;
    /**
     * @var SerializerInterface|null
     */
    private $serializer;
    /**
     * @var TeamspeakCredentials
     */
    private $credentials;

    private $serverId;

    public function __construct(string $teamspeakUri, ?ClientInterface $client = null, ?SerializerInterface $serializer = null)
    {
        $this->client = $client ?? new Curl(new Psr17Factory());
        $this->serializer = $serializer ?? SerializerBuilder::create()->build();
        $this->credentials = TeamspeakCredentials::createFromUrl($teamspeakUri);
    }

    public function createPsr7Request(TeamspeakRequestInterface $request): RequestInterface
    {
        $queryString = implode("&", $this->generateGetParameters($request));
        return new Request(
            'GET',
            $this->credentials->getUrl().($this->serverId ? "/{$this->serverId}" : '').$request->getCommandUrl().($queryString ? '?'.$queryString : ''),
            [
                'x-api-key' => $this->credentials->user
            ]
        );
    }

    public function request(TeamspeakRequestInterface $request)
    {
        $response = $this->client->sendRequest($this->createPsr7Request($request));
        $json = json_decode((string)$response->getBody(), true);

        if(isset($json['status']['code']) and $json['status']['code'] > 0){
            return $this->serializer->deserialize(json_encode($json['status']), ErrorResponse::class, 'json');
        }
        $response = $this->serializer->deserialize(json_encode($json), $responseClass = $request->getResponseClass(), 'json');

        return $response;
    }

    /**
     * @return mixed
     */
    public function getServerId()
    {
        return $this->serverId;
    }

    /**
     * @param mixed $serverId
     */
    public function setServerId($serverId): self
    {
        $this->serverId = $serverId;

        return $this;
    }

    protected function generateGetParameters($request, $prefixBooleans = true)
    {
        $variables = get_object_vars($request);
        $convertedVariables = [];
        foreach($variables as $variable => $value){
            if(is_bool($value)) {
                // Top level requests need booleans to be prefixed (for example channellist),
                // but when creating a channel the booleans are read like normal variables
                if($prefixBooleans){
                    $convertedVariables[] = "-{$variable}";
                }else{
                    $convertedVariables[] = "{$variable}=1";
                }
            }else if(is_object($value)){
                $convertedVariables = array_merge($convertedVariables, $this->generateGetParameters($value, false));
            }else if(null !== $value){
                $convertedVariables[] = "{$variable}=".urlencode((string)$value);
            }
        }
        return $convertedVariables;
    }
}