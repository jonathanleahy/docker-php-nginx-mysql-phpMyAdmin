<?php

use PHPUnit\Framework\TestCase;

class VegetablesIntegrationTest extends TestCase
{
    private $http;

    public function setUp(): void
    {
        $this->http = new GuzzleHttp\Client(['base_uri' => 'http://localhost/']);
    }

    public function tearDown(): void
    {
        $this->http = null;
    }

    public function testCallVegetablesEndPoint()
    {
        $response = $this->http->request('GET', 'vegetables');

        $this->assertEquals(200, $response->getStatusCode());

        $contentType = $response->getHeaders()["Content-Type"][0];
        $this->assertEquals("application/json", $contentType);
    }


}
