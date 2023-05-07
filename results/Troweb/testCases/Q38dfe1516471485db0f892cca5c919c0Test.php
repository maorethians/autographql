<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q38dfe1516471485db0f892cca5c919c0Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  getOrgPlans {\n    _id\n    from\n    to\n    revokedAt\n    plan {\n      name\n      featuresAccessibility {\n        authorization\n        apiKeys {\n          bound\n        }\n      }\n    }\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:19:47","updated_at":"2023-05-07 21:19:47","times_called":1}
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
        
        $this->assertArrayHasKey('revokedAt', $responseContent['getOrgPlans'][$g]);
        
        if ($responseContent['getOrgPlans'][$g]['revokedAt']) {
        
        }
        
        $this->assertArrayHasKey('plan', $responseContent['getOrgPlans'][$g]);
        
        $this->assertNotNull($responseContent['getOrgPlans'][$g]['plan']);
        
        $this->assertArrayHasKey('name', $responseContent['getOrgPlans'][$g]['plan']);
        
        $this->assertNotNull($responseContent['getOrgPlans'][$g]['plan']['name']);
        
        $this->assertIsString($responseContent['getOrgPlans'][$g]['plan']['name']);
        
        $this->assertArrayHasKey('featuresAccessibility', $responseContent['getOrgPlans'][$g]['plan']);
        
        $this->assertNotNull($responseContent['getOrgPlans'][$g]['plan']['featuresAccessibility']);
        
        $this->assertArrayHasKey('authorization', $responseContent['getOrgPlans'][$g]['plan']['featuresAccessibility']);
        
        $this->assertNotNull($responseContent['getOrgPlans'][$g]['plan']['featuresAccessibility']['authorization']);
        
        $this->assertIsInt($responseContent['getOrgPlans'][$g]['plan']['featuresAccessibility']['authorization']);
        
        $this->assertArrayHasKey('apiKeys', $responseContent['getOrgPlans'][$g]['plan']['featuresAccessibility']);
        
        if ($responseContent['getOrgPlans'][$g]['plan']['featuresAccessibility']['apiKeys']) {
        
        $this->assertArrayHasKey('bound', $responseContent['getOrgPlans'][$g]['plan']['featuresAccessibility']['apiKeys']);
        
        $this->assertNotNull($responseContent['getOrgPlans'][$g]['plan']['featuresAccessibility']['apiKeys']['bound']);
        
        $this->assertIsInt($responseContent['getOrgPlans'][$g]['plan']['featuresAccessibility']['apiKeys']['bound']);
        
        }
        
        }
        

    }
}