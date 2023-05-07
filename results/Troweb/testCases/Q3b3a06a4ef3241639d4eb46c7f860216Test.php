<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q3b3a06a4ef3241639d4eb46c7f860216Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  getOrgPlans {\n    _id\n    from\n    to\n    revokedAt\n    plan {\n      name\n      totalUsage {\n        storage {\n          bound\n        }\n      }\n      rateLimitation {\n        apiCalls {\n          bound\n          period\n        }\n      }\n      featuresAccessibility {\n        authorization\n        apiKeys {\n          bound\n        }\n      }\n    }\n    usage {\n      totalUsage {\n        storage\n      }\n      rateLimitation {\n        apiCalls {\n          usage\n          startedAt\n        }\n      }\n    }\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:20:29","updated_at":"2023-05-07 21:20:29","times_called":1}
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
        
        $this->assertArrayHasKey('totalUsage', $responseContent['getOrgPlans'][$g]['plan']);
        
        $this->assertNotNull($responseContent['getOrgPlans'][$g]['plan']['totalUsage']);
        
        $this->assertArrayHasKey('storage', $responseContent['getOrgPlans'][$g]['plan']['totalUsage']);
        
        $this->assertNotNull($responseContent['getOrgPlans'][$g]['plan']['totalUsage']['storage']);
        
        $this->assertArrayHasKey('bound', $responseContent['getOrgPlans'][$g]['plan']['totalUsage']['storage']);
        
        $this->assertNotNull($responseContent['getOrgPlans'][$g]['plan']['totalUsage']['storage']['bound']);
        
        $this->assertIsString($responseContent['getOrgPlans'][$g]['plan']['totalUsage']['storage']['bound']);
        
        $this->assertArrayHasKey('rateLimitation', $responseContent['getOrgPlans'][$g]['plan']);
        
        $this->assertNotNull($responseContent['getOrgPlans'][$g]['plan']['rateLimitation']);
        
        $this->assertArrayHasKey('apiCalls', $responseContent['getOrgPlans'][$g]['plan']['rateLimitation']);
        
        $this->assertNotNull($responseContent['getOrgPlans'][$g]['plan']['rateLimitation']['apiCalls']);
        
        $this->assertArrayHasKey('bound', $responseContent['getOrgPlans'][$g]['plan']['rateLimitation']['apiCalls']);
        
        $this->assertNotNull($responseContent['getOrgPlans'][$g]['plan']['rateLimitation']['apiCalls']['bound']);
        
        $this->assertIsInt($responseContent['getOrgPlans'][$g]['plan']['rateLimitation']['apiCalls']['bound']);
        
        $this->assertArrayHasKey('period', $responseContent['getOrgPlans'][$g]['plan']['rateLimitation']['apiCalls']);
        
        $this->assertNotNull($responseContent['getOrgPlans'][$g]['plan']['rateLimitation']['apiCalls']['period']);
        
        $this->assertContains($responseContent['getOrgPlans'][$g]['plan']['rateLimitation']['apiCalls']['period'], ['Day', 'Week', 'Month']);
        
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
        
        $this->assertArrayHasKey('usage', $responseContent['getOrgPlans'][$g]);
        
        $this->assertNotNull($responseContent['getOrgPlans'][$g]['usage']);
        
        $this->assertArrayHasKey('totalUsage', $responseContent['getOrgPlans'][$g]['usage']);
        
        $this->assertNotNull($responseContent['getOrgPlans'][$g]['usage']['totalUsage']);
        
        $this->assertArrayHasKey('storage', $responseContent['getOrgPlans'][$g]['usage']['totalUsage']);
        
        $this->assertNotNull($responseContent['getOrgPlans'][$g]['usage']['totalUsage']['storage']);
        
        $this->assertIsString($responseContent['getOrgPlans'][$g]['usage']['totalUsage']['storage']);
        
        $this->assertArrayHasKey('rateLimitation', $responseContent['getOrgPlans'][$g]['usage']);
        
        $this->assertNotNull($responseContent['getOrgPlans'][$g]['usage']['rateLimitation']);
        
        $this->assertArrayHasKey('apiCalls', $responseContent['getOrgPlans'][$g]['usage']['rateLimitation']);
        
        $this->assertNotNull($responseContent['getOrgPlans'][$g]['usage']['rateLimitation']['apiCalls']);
        
        $this->assertIsArray($responseContent['getOrgPlans'][$g]['usage']['rateLimitation']['apiCalls']);
        
        for($f = 0; $f < count($responseContent['getOrgPlans'][$g]['usage']['rateLimitation']['apiCalls']); $f++) {
        
        $this->assertNotNull($responseContent['getOrgPlans'][$g]['usage']['rateLimitation']['apiCalls'][$f]);
        
        $this->assertArrayHasKey('usage', $responseContent['getOrgPlans'][$g]['usage']['rateLimitation']['apiCalls'][$f]);
        
        $this->assertNotNull($responseContent['getOrgPlans'][$g]['usage']['rateLimitation']['apiCalls'][$f]['usage']);
        
        $this->assertIsInt($responseContent['getOrgPlans'][$g]['usage']['rateLimitation']['apiCalls'][$f]['usage']);
        
        $this->assertArrayHasKey('startedAt', $responseContent['getOrgPlans'][$g]['usage']['rateLimitation']['apiCalls'][$f]);
        
        $this->assertNotNull($responseContent['getOrgPlans'][$g]['usage']['rateLimitation']['apiCalls'][$f]['startedAt']);
        
        }
        
        }
        

    }
}