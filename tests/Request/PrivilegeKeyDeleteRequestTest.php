<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\PrivilegeKeyDeleteRequest;
use Dragony\TeamspeakApi\Response\GenericResponse;
use Helper\AdapterFactory;
use PHPUnit\Framework\TestCase;

class PrivilegeKeyDeleteRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();

        $request = new PrivilegeKeyDeleteRequest();

        $response = $adapter->request($request);

        $this->assertInstanceOf(GenericResponse::class, $response);
    }
}
