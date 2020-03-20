<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\ComplainListRequest;
use Dragony\TeamspeakApi\Response\GenericResponse;
use Helper\AdapterFactory;
use PHPUnit\Framework\TestCase;

class ComplainListRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();

        $request = new ComplainListRequest();

        $response = $adapter->request($request);

        $this->assertInstanceOf(GenericResponse::class, $response);
    }
}