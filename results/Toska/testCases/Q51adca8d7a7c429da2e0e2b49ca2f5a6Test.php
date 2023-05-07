<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q51adca8d7a7c429da2e0e2b49ca2f5a6Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"\n{\n  locations {\n    firstName\n  }\n}\n","variables":null,"created_at":"2023-05-05 18:45:24","updated_at":"2023-05-05 18:45:24","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:3000/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('locations', $responseContent);
        
        $this->assertNotNull($responseContent['locations']);
        
        $this->assertIsArray($responseContent['locations']);
        
        for($g = 0; $g < count($responseContent['locations']); $g++) {
        
        $this->assertNotNull($responseContent['locations'][$g]);
        
        $this->assertArrayHasKey('firstName', $responseContent['locations'][$g]);
        
        $this->assertNotNull($responseContent['locations'][$g]['firstName']);
        
        $this->assertIsString($responseContent['locations'][$g]['firstName']);
        
        }
        

    }
}