<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qd246fa74ce8c4bcb80693f60a4c9601eTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  getOrgPlans {\n    _id\n    from\n    to\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:18:23","updated_at":"2023-05-07 21:18:23","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('getOrgPlans', $responseContent);
        
        $this->assertNotNull($responseContent['getOrgPlans']);
        
        $this->assertIsArray($responseContent['getOrgPlans']);
        
        for($g = 0; $g < count($responseContent['getOrgPlans']); $g++) {
        
        $this->assertNotNull($responseContent['getOrgPlans'][$g]);
        
        $this->assertArrayHasKey('_id', $responseContent['getOrgPlans'][$g]);
        
        $this->assertNotNull($responseContent['getOrgPlans'][$g]['_id']);
        
        $this->assertArrayHasKey('from', $responseContent['getOrgPlans'][$g]);
        
        $this->assertNotNull($responseContent['getOrgPlans'][$g]['from']);
        
        $this->assertArrayHasKey('to', $responseContent['getOrgPlans'][$g]);
        
        $this->assertNotNull($responseContent['getOrgPlans'][$g]['to']);
        
        }
        

    }
}