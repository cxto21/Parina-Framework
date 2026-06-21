<?php

namespace Tests\Handlers;

use PHPUnit\Framework\TestCase;
use Parina\Core\Request;
use Parina\Modules\Public\LoginCheckHandler;

class LoginCheckHandlerTest extends TestCase
{
    public function test_handler_returns_valid_response()
    {
        $handler = new LoginCheckHandler();
        $request = new Request([], [], [], [], []);
        
        $response = $handler->handle($request);
        
        $this->assertNotNull($response);
        $this->assertEquals(200, $response->getStatus());
    }
}