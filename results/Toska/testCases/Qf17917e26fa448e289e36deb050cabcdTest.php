<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qf17917e26fa448e289e36deb050cabcdTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  allSeries {\n    id\n  }\n}\n","variables":null,"created_at":"2023-05-05 18:59:06","updated_at":"2023-05-05 18:59:06","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:3000/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('allSeries', $responseContent);
        
        $this->assertNotNull($responseContent['allSeries']);
        
        $this->assertIsArray($responseContent['allSeries']);
        
        for($g = 0; $g < count($responseContent['allSeries']); $g++) {
        
        $this->assertNotNull($responseContent['allSeries'][$g]);
        
        $this->assertArrayHasKey('id', $responseContent['allSeries'][$g]);
        
        $this->assertNotNull($responseContent['allSeries'][$g]['id']);
        
        }
        

    }
}