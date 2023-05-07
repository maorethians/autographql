<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qcf7b0d64401345cd96a7839863315a6eTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  items {\n    total\n    items {\n      title\n    }\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:43:29","updated_at":"2023-05-07 21:43:29","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('items', $responseContent);
        
        $this->assertNotNull($responseContent['items']);
        
        $this->assertArrayHasKey('total', $responseContent['items']);
        
        $this->assertNotNull($responseContent['items']['total']);
        
        $this->assertIsInt($responseContent['items']['total']);
        
        $this->assertArrayHasKey('items', $responseContent['items']);
        
        $this->assertNotNull($responseContent['items']['items']);
        
        $this->assertIsArray($responseContent['items']['items']);
        
        for($g = 0; $g < count($responseContent['items']['items']); $g++) {
        
        $this->assertNotNull($responseContent['items']['items'][$g]);
        
        $this->assertArrayHasKey('title', $responseContent['items']['items'][$g]);
        
        $this->assertNotNull($responseContent['items']['items'][$g]['title']);
        
        $this->assertIsString($responseContent['items']['items'][$g]['title']);
        
        }
        

    }
}