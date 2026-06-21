<?php

namespace Tests\Handlers;

use PHPUnit\Framework\TestCase;
use Parina\Core\Request;
use \Parina\Modules\Public\SetupHandler;

class SetupHandlerTest extends TestCase
{
    public function test_handler_returns_valid_response()
    {
        $handler = new SetupHandler();
        $request = new Request([], [], [], [], []);
        
        $response = $handler->handle($request);
        
        $this->assertNotNull($response);
        $this->assertGreaterThanOrEqual(200, $response->getStatus());
        $this->assertLessThan(400, $response->getStatus());
    }
}