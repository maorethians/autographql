<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qd713496ecea24e41a82298d27bdd6707Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  getPlans {\n    _id\n    name\n    description\n    totalUsage {\n      storage {\n        bound\n      }\n    }\n    rateLimitation {\n      apiCalls {\n        bound\n        period\n      }\n    }\n    featuresAccessibility {\n      authorization\n      apiKeys {\n        bound\n      }\n    }\n    subscriptionPlans {\n      _id\n      active\n      amount\n      currency\n      interval\n      intervalCount\n    }\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:24:15","updated_at":"2023-05-07 21:24:15","times_called":1}
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
        
        $this->assertArrayHasKey('rateLimitation', $responseContent['getPlans'][$g]);
        
        $this->assertNotNull($responseContent['getPlans'][$g]['rateLimitation']);
        
        $this->assertArrayHasKey('apiCalls', $responseContent['getPlans'][$g]['rateLimitation']);
        
        $this->assertNotNull($responseContent['getPlans'][$g]['rateLimitation']['apiCalls']);
        
        $this->assertArrayHasKey('bound', $responseContent['getPlans'][$g]['rateLimitation']['apiCalls']);
        
        $this->assertNotNull($responseContent['getPlans'][$g]['rateLimitation']['apiCalls']['bound']);
        
        $this->assertIsInt($responseContent['getPlans'][$g]['rateLimitation']['apiCalls']['bound']);
        
        $this->assertArrayHasKey('period', $responseContent['getPlans'][$g]['rateLimitation']['apiCalls']);
        
        $this->assertNotNull($responseContent['getPlans'][$g]['rateLimitation']['apiCalls']['period']);
        
        $this->assertContains($responseContent['getPlans'][$g]['rateLimitation']['apiCalls']['period'], ['Day', 'Week', 'Month']);
        
        $this->assertArrayHasKey('featuresAccessibility', $responseContent['getPlans'][$g]);
        
        $this->assertNotNull($responseContent['getPlans'][$g]['featuresAccessibility']);
        
        $this->assertArrayHasKey('authorization', $responseContent['getPlans'][$g]['featuresAccessibility']);
        
        $this->assertNotNull($responseContent['getPlans'][$g]['featuresAccessibility']['authorization']);
        
        $this->assertIsInt($responseContent['getPlans'][$g]['featuresAccessibility']['authorization']);
        
        $this->assertArrayHasKey('apiKeys', $responseContent['getPlans'][$g]['featuresAccessibility']);
        
        if ($responseContent['getPlans'][$g]['featuresAccessibility']['apiKeys']) {
        
        $this->assertArrayHasKey('bound', $responseContent['getPlans'][$g]['featuresAccessibility']['apiKeys']);
        
        $this->assertNotNull($responseContent['getPlans'][$g]['featuresAccessibility']['apiKeys']['bound']);
        
        $this->assertIsInt($responseContent['getPlans'][$g]['featuresAccessibility']['apiKeys']['bound']);
        
        }
        
        $this->assertArrayHasKey('subscriptionPlans', $responseContent['getPlans'][$g]);
        
        $this->assertNotNull($responseContent['getPlans'][$g]['subscriptionPlans']);
        
        $this->assertIsArray($responseContent['getPlans'][$g]['subscriptionPlans']);
        
        for($f = 0; $f < count($responseContent['getPlans'][$g]['subscriptionPlans']); $f++) {
        
        $this->assertNotNull($responseContent['getPlans'][$g]['subscriptionPlans'][$f]);
        
        $this->assertArrayHasKey('_id', $responseContent['getPlans'][$g]['subscriptionPlans'][$f]);
        
        $this->assertNotNull($responseContent['getPlans'][$g]['subscriptionPlans'][$f]['_id']);
        
        $this->assertArrayHasKey('active', $responseContent['getPlans'][$g]['subscriptionPlans'][$f]);
        
        $this->assertNotNull($responseContent['getPlans'][$g]['subscriptionPlans'][$f]['active']);
        
        $this->assertIsBool($responseContent['getPlans'][$g]['subscriptionPlans'][$f]['active']);
        
        $this->assertArrayHasKey('amount', $responseContent['getPlans'][$g]['subscriptionPlans'][$f]);
        
        $this->assertNotNull($responseContent['getPlans'][$g]['subscriptionPlans'][$f]['amount']);
        
        $this->assertIsInt($responseContent['getPlans'][$g]['subscriptionPlans'][$f]['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['getPlans'][$g]['subscriptionPlans'][$f]);
        
        $this->assertNotNull($responseContent['getPlans'][$g]['subscriptionPlans'][$f]['currency']);
        
        $this->assertIsString($responseContent['getPlans'][$g]['subscriptionPlans'][$f]['currency']);
        
        $this->assertArrayHasKey('interval', $responseContent['getPlans'][$g]['subscriptionPlans'][$f]);
        
        $this->assertNotNull($responseContent['getPlans'][$g]['subscriptionPlans'][$f]['interval']);
        
        $this->assertIsString($responseContent['getPlans'][$g]['subscriptionPlans'][$f]['interval']);
        
        $this->assertArrayHasKey('intervalCount', $responseContent['getPlans'][$g]['subscriptionPlans'][$f]);
        
        $this->assertNotNull($responseContent['getPlans'][$g]['subscriptionPlans'][$f]['intervalCount']);
        
        $this->assertIsInt($responseContent['getPlans'][$g]['subscriptionPlans'][$f]['intervalCount']);
        
        }
        
        }
        

    }
}