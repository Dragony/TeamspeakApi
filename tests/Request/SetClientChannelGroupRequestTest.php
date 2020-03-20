<?php

declare(strict_types=1);

namespace Request;

use Dragony\TeamspeakApi\Request\SetClientChannelGroupRequest;
use Dragony\TeamspeakApi\Response\GenericResponse;
use Helper\AdapterFactory;
use PHPUnit\Framework\TestCase;

class SetClientChannelGroupRequestTest extends TestCase
{
    public function testRequest()
    {
        $adapter = AdapterFactory::create();

        $request = new SetClientChannelGroupRequest();

        $response = $adapter->request($request);

        $this->assertInstanceOf(GenericResponse::class, $response);
    }
}
