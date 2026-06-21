<?php

namespace Tests\Middlewares;

use PHPUnit\Framework\TestCase;
use Parina\Core\Request;
use Parina\Shared\Middlewares\Cors;
use Parina\Core\Responses\PlainTextResponse;

class CorsTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function test_options_request_returns_204_plain_text_response()
    {
        $request = new Request(
            query: [],
            post: [],
            server: ['REQUEST_METHOD' => 'OPTIONS'],
            files: [],
            cookies: []
        );

        $middleware = new Cors();
        $response = $middleware->handle($request);

        $this->assertInstanceOf(PlainTextResponse::class, $response);
        $this->assertEquals(204, $response->getStatus());
        $this->assertEquals('', $response->getContent());
    }

    /**
     * @runInSeparateProcess
     */
    public function test_get_request_returns_null_to_continue_execution()
    {
        $request = new Request(
            query: [],
            post: [],
            server: ['REQUEST_METHOD' => 'GET'],
            files: [],
            cookies: []
        );

        $middleware = new Cors();
        $response = $middleware->handle($request);

        $this->assertNull($response);
    }
}
