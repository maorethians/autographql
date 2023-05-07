<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qdac1db30adfb4bc6a1840368eb9c1c6cTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  getPlans {\n    _id\n    name\n    description\n    totalUsage {\n      storage {\n        bound\n      }\n    }\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:23:41","updated_at":"2023-05-07 21:23:41","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('getPlans', $responseContent);
        
        $this->assertNotNull($responseContent['getPlans']);
        
        $this->assertIsArray($responseContent['getPlans']);
        
        for($g = 0; $g < count($responseContent['getPlans']); $g++) {
        
        $this->assertNotNull($responseContent['getPlans'][$g]);
        
        $this->assertArrayHasKey('_id', $responseContent['getPlans'][$g]);
        
        $this->assertNotNull($responseContent['getPlans'][$g]['_id']);
        
        $this->assertArrayHasKey('name', $responseContent['getPlans'][$g]);
        
        $this->assertNotNull($responseContent['getPlans'][$g]['name']);
        
        $this->assertIsString($responseContent['getPlans'][$g]['name']);
        
        $this->assertArrayHasKey('description', $responseContent['getPlans'][$g]);
        
        if ($responseContent['getPlans'][$g]['description']) {
        
        $this->assertIsString($responseContent['getPlans'][$g]['description']);
        
        }
        
        $this->assertArrayHasKey('totalUsage', $responseContent['getPlans'][$g]);
        
        $this->assertNotNull($responseContent['getPlans'][$g]['totalUsage']);
        
        $this->assertArrayHasKey('storage', $responseContent['getPlans'][$g]['totalUsage']);
        
        $this->assertNotNull($responseContent['getPlans'][$g]['totalUsage']['storage']);
        
        $this->assertArrayHasKey('bound', $responseContent['getPlans'][$g]['totalUsage']['storage']);
        
        $this->assertNotNull($responseContent['getPlans'][$g]['totalUsage']['storage']['bound']);
        
        $this->assertIsString($responseContent['getPlans'][$g]['totalUsage']['storage']['bound']);
        
        }
        

    }
}