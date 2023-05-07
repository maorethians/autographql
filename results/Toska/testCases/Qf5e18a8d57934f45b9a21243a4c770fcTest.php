<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qf5e18a8d57934f45b9a21243a4c770fcTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  people {\n    firstName\n  }\n}","variables":null,"created_at":"2023-05-05 18:41:06","updated_at":"2023-05-05 18:41:06","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:3000/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('people', $responseContent);
        
        $this->assertNotNull($responseContent['people']);
        
        $this->assertIsArray($responseContent['people']);
        
        for($g = 0; $g < count($responseContent['people']); $g++) {
        
        $this->assertNotNull($responseContent['people'][$g]);
        
        $this->assertArrayHasKey('firstName', $responseContent['people'][$g]);
        
        $this->assertNotNull($responseContent['people'][$g]['firstName']);
        
        $this->assertIsString($responseContent['people'][$g]['firstName']);
        
        }
        

    }
}