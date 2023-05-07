<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qc5dd1569a3a94dd79baf064711ee8b3eTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  schema(name: \"Aaa\") {\n    _id\n    icon\n    name\n    displayName {\n      default\n    }\n    appearance {\n      sections {\n        name\n        fields {\n          name\n        }\n      }\n    }\n    description\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:30:08","updated_at":"2023-05-07 21:30:08","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('schema', $responseContent);
        
        if ($responseContent['schema']) {
        
        $this->assertArrayHasKey('_id', $responseContent['schema']);
        
        $this->assertNotNull($responseContent['schema']['_id']);
        
        $this->assertArrayHasKey('icon', $responseContent['schema']);
        
        if ($responseContent['schema']['icon']) {
        
        $this->assertIsString($responseContent['schema']['icon']);
        
        }
        
        $this->assertArrayHasKey('name', $responseContent['schema']);
        
        $this->assertNotNull($responseContent['schema']['name']);
        
        $this->assertArrayHasKey('displayName', $responseContent['schema']);
        
        $this->assertNotNull($responseContent['schema']['displayName']);
        
        $this->assertArrayHasKey('default', $responseContent['schema']['displayName']);
        
        $this->assertNotNull($responseContent['schema']['displayName']['default']);
        
        $this->assertIsString($responseContent['schema']['displayName']['default']);
        
        $this->assertArrayHasKey('appearance', $responseContent['schema']);
        
        $this->assertNotNull($responseContent['schema']['appearance']);
        
        $this->assertArrayHasKey('sections', $responseContent['schema']['appearance']);
        
        $this->assertNotNull($responseContent['schema']['appearance']['sections']);
        
        $this->assertIsArray($responseContent['schema']['appearance']['sections']);
        
        for($g = 0; $g < count($responseContent['schema']['appearance']['sections']); $g++) {
        
        $this->assertNotNull($responseContent['schema']['appearance']['sections'][$g]);
        
        $this->assertArrayHasKey('name', $responseContent['schema']['appearance']['sections'][$g]);
        
        $this->assertNotNull($responseContent['schema']['appearance']['sections'][$g]['name']);
        
        $this->assertArrayHasKey('fields', $responseContent['schema']['appearance']['sections'][$g]);
        
        $this->assertNotNull($responseContent['schema']['appearance']['sections'][$g]['fields']);
        
        $this->assertIsArray($responseContent['schema']['appearance']['sections'][$g]['fields']);
        
        for($f = 0; $f < count($responseContent['schema']['appearance']['sections'][$g]['fields']); $f++) {
        
        $this->assertNotNull($responseContent['schema']['appearance']['sections'][$g]['fields'][$f]);
        
        $this->assertArrayHasKey('name', $responseContent['schema']['appearance']['sections'][$g]['fields'][$f]);
        
        $this->assertNotNull($responseContent['schema']['appearance']['sections'][$g]['fields'][$f]['name']);
        
        }
        
        }
        
        $this->assertArrayHasKey('description', $responseContent['schema']);
        
        $this->assertNotNull($responseContent['schema']['description']);
        
        $this->assertIsString($responseContent['schema']['description']);
        
        }
        

    }
}