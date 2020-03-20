<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\PrivilegeKeyAddRequest;
use Dragony\TeamspeakApi\Response\GenericResponse;
use Helper\AdapterFactory;
use PHPUnit\Framework\TestCase;

class PrivilegeKeyAddRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();

        $request = new PrivilegeKeyAddRequest();

        $response = $adapter->request($request);

        $this->assertInstanceOf(GenericResponse::class, $response);
    }
}
