<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q905ef16fd0eb40ce9ea8a8b036014a70Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  schemas {\n    name\n    icon\n    displayName {\n      default\n    }\n    appearance {\n      sections {\n        name\n        fields {\n          name\n        }\n      }\n    }\n    description\n    fields {\n      type\n      name\n    }\n    childrenSchemas {\n      _id\n      name\n    }\n    validators\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:31:05","updated_at":"2023-05-07 21:31:05","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('schemas', $responseContent);
        
        $this->assertNotNull($responseContent['schemas']);
        
        $this->assertIsArray($responseContent['schemas']);
        
        for($g = 0; $g < count($responseContent['schemas']); $g++) {
        
        $this->assertNotNull($responseContent['schemas'][$g]);
        
        $this->assertArrayHasKey('name', $responseContent['schemas'][$g]);
        
        $this->assertNotNull($responseContent['schemas'][$g]['name']);
        
        $this->assertArrayHasKey('icon', $responseContent['schemas'][$g]);
        
        if ($responseContent['schemas'][$g]['icon']) {
        
        $this->assertIsString($responseContent['schemas'][$g]['icon']);
        
        }
        
        $this->assertArrayHasKey('displayName', $responseContent['schemas'][$g]);
        
        $this->assertNotNull($responseContent['schemas'][$g]['displayName']);
        
        $this->assertArrayHasKey('default', $responseContent['schemas'][$g]['displayName']);
        
        $this->assertNotNull($responseContent['schemas'][$g]['displayName']['default']);
        
        $this->assertIsString($responseContent['schemas'][$g]['displayName']['default']);
        
        $this->assertArrayHasKey('appearance', $responseContent['schemas'][$g]);
        
        $this->assertNotNull($responseContent['schemas'][$g]['appearance']);
        
        $this->assertArrayHasKey('sections', $responseContent['schemas'][$g]['appearance']);
        
        $this->assertNotNull($responseContent['schemas'][$g]['appearance']['sections']);
        
        $this->assertIsArray($responseContent['schemas'][$g]['appearance']['sections']);
        
        for($f = 0; $f < count($responseContent['schemas'][$g]['appearance']['sections']); $f++) {
        
        $this->assertNotNull($responseContent['schemas'][$g]['appearance']['sections'][$f]);
        
        $this->assertArrayHasKey('name', $responseContent['schemas'][$g]['appearance']['sections'][$f]);
        
        $this->assertNotNull($responseContent['schemas'][$g]['appearance']['sections'][$f]['name']);
        
        $this->assertArrayHasKey('fields', $responseContent['schemas'][$g]['appearance']['sections'][$f]);
        
        $this->assertNotNull($responseContent['schemas'][$g]['appearance']['sections'][$f]['fields']);
        
        $this->assertIsArray($responseContent['schemas'][$g]['appearance']['sections'][$f]['fields']);
        
        for($e = 0; $e < count($responseContent['schemas'][$g]['appearance']['sections'][$f]['fields']); $e++) {
        
        $this->assertNotNull($responseContent['schemas'][$g]['appearance']['sections'][$f]['fields'][$e]);
        
        $this->assertArrayHasKey('name', $responseContent['schemas'][$g]['appearance']['sections'][$f]['fields'][$e]);
        
        $this->assertNotNull($responseContent['schemas'][$g]['appearance']['sections'][$f]['fields'][$e]['name']);
        
        }
        
        }
        
        $this->assertArrayHasKey('description', $responseContent['schemas'][$g]);
        
        $this->assertNotNull($responseContent['schemas'][$g]['description']);
        
        $this->assertIsString($responseContent['schemas'][$g]['description']);
        
        $this->assertArrayHasKey('fields', $responseContent['schemas'][$g]);
        
        $this->assertNotNull($responseContent['schemas'][$g]['fields']);
        
        $this->assertIsArray($responseContent['schemas'][$g]['fields']);
        
        for($f = 0; $f < count($responseContent['schemas'][$g]['fields']); $f++) {
        
        $this->assertNotNull($responseContent['schemas'][$g]['fields'][$f]);
        
        $this->assertArrayHasKey('type', $responseContent['schemas'][$g]['fields'][$f]);
        
        $this->assertNotNull($responseContent['schemas'][$g]['fields'][$f]['type']);
        
        $this->assertContains($responseContent['schemas'][$g]['fields'][$f]['type'], ['Object', 'TreeTag', 'Ref', 'Schema', 'Blob', 'NestedSchema', 'ObjectId', 'Int', 'Integer', 'Float', 'Decimal', 'Boolean', 'String', 'ShortText', 'LongText', 'DateTime', 'Date', 'Time', 'JSON', 'RichText', 'Duration']);
        
        $this->assertArrayHasKey('name', $responseContent['schemas'][$g]['fields'][$f]);
        
        $this->assertNotNull($responseContent['schemas'][$g]['fields'][$f]['name']);
        
        $this->assertIsString($responseContent['schemas'][$g]['fields'][$f]['name']);
        
        }
        
        $this->assertArrayHasKey('childrenSchemas', $responseContent['schemas'][$g]);
        
        if ($responseContent['schemas'][$g]['childrenSchemas']) {
        
        $this->assertIsArray($responseContent['schemas'][$g]['childrenSchemas']);
        
        for($f = 0; $f < count($responseContent['schemas'][$g]['childrenSchemas']); $f++) {
        
        $this->assertNotNull($responseContent['schemas'][$g]['childrenSchemas'][$f]);
        
        $this->assertArrayHasKey('_id', $responseContent['schemas'][$g]['childrenSchemas'][$f]);
        
        $this->assertNotNull($responseContent['schemas'][$g]['childrenSchemas'][$f]['_id']);
        
        $this->assertArrayHasKey('name', $responseContent['schemas'][$g]['childrenSchemas'][$f]);
        
        $this->assertNotNull($responseContent['schemas'][$g]['childrenSchemas'][$f]['name']);
        
        }
        
        }
        
        $this->assertArrayHasKey('validators', $responseContent['schemas'][$g]);
        
        if ($responseContent['schemas'][$g]['validators']) {
        
        }
        
        }
        

    }
}