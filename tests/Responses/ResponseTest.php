<?php

namespace Tests\Responses;

use PHPUnit\Framework\TestCase;
use Parina\Core\Responses\JsonResponse;
use Parina\Core\Responses\RedirectResponse;
use Parina\Core\Responses\ErrorResponse;

class ResponseTest extends TestCase
{
    public function test_json_response()
    {
        $data = json_encode(['foo' => 'bar']);
        $response = new JsonResponse($data, 201);

        $this->assertEquals($data, $response->getContent());
        $this->assertEquals(201, $response->getStatus());
        $this->assertEquals('application/json', $response->getHeaders()['Content-Type']);
    }

    public function test_redirect_response()
    {
        $response = new RedirectResponse('/home', 301);

        $this->assertEquals('', $response->getContent());
        $this->assertEquals(301, $response->getStatus());
        $this->assertEquals('/home', $response->getHeaders()['Location']);
    }

    public function test_error_response()
    {
        $errorMessage = 'Internal Server Error';
        $response = new ErrorResponse($errorMessage, 500);

        $this->assertEquals($errorMessage, $response->getContent());
        $this->assertEquals(500, $response->getStatus());
        $this->assertEquals('text/html; charset=UTF-8', $response->getHeaders()['Content-Type']);
    }
}
