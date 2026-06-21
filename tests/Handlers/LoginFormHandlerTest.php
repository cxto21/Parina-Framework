<?php

namespace Tests\Handlers;

use PHPUnit\Framework\TestCase;
use Parina\Core\Request;
use \Parina\Modules\Public\LoginFormHandler;

class LoginFormHandlerTest extends TestCase
{
    public function test_handler_returns_valid_response()
    {
        $handler = new LoginFormHandler();
        $request = new Request([], [], [], [], []);
        
        $response = $handler->handle($request);
        
        $this->assertNotNull($response);
        $this->assertEquals(200, $response->getStatus());
    }
}