<?php

namespace Tests\Handlers;

use PHPUnit\Framework\TestCase;
use Parina\Core\Request;
use Parina\Modules\Public\AutoPurchaseHandler;

class AutoPurchaseHandlerTest extends TestCase
{
    public function test_handler_returns_valid_response()
    {
        $handler = new AutoPurchaseHandler();
        $request = new Request([], [], [], [], []);
        
        $response = $handler->handle($request);
        
        $this->assertNotNull($response);
        $this->assertEquals(200, $response->getStatus());
    }
}