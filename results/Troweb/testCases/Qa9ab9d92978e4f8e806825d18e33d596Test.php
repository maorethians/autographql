<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qa9ab9d92978e4f8e806825d18e33d596Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  commonFields {\n    type\n    name\n    displayName {\n      default\n      alternatives {\n        displayName\n      }\n    }\n    description\n    multiValued\n    required\n    unique\n    uneditable\n    treeId\n    fields {\n      type\n    }\n    refSchema\n    source\n    schemaName\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:29:10","updated_at":"2023-05-07 21:29:10","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('commonFields', $responseContent);
        
        $this->assertNotNull($responseContent['commonFields']);
        
        $this->assertIsArray($responseContent['commonFields']);
        
        for($g = 0; $g < count($responseContent['commonFields']); $g++) {
        
        $this->assertNotNull($responseContent['commonFields'][$g]);
        
        $this->assertArrayHasKey('type', $responseContent['commonFields'][$g]);
        
        $this->assertNotNull($responseContent['commonFields'][$g]['type']);
        
        $this->assertContains($responseContent['commonFields'][$g]['type'], ['Object', 'TreeTag', 'Ref', 'Schema', 'Blob', 'NestedSchema', 'ObjectId', 'Int', 'Integer', 'Float', 'Decimal', 'Boolean', 'String', 'ShortText', 'LongText', 'DateTime', 'Date', 'Time', 'JSON', 'RichText', 'Duration']);
        
        $this->assertArrayHasKey('name', $responseContent['commonFields'][$g]);
        
        $this->assertNotNull($responseContent['commonFields'][$g]['name']);
        
        $this->assertIsString($responseContent['commonFields'][$g]['name']);
        
        $this->assertArrayHasKey('displayName', $responseContent['commonFields'][$g]);
        
        $this->assertNotNull($responseContent['commonFields'][$g]['displayName']);
        
        $this->assertArrayHasKey('default', $responseContent['commonFields'][$g]['displayName']);
        
        $this->assertNotNull($responseContent['commonFields'][$g]['displayName']['default']);
        
        $this->assertIsString($responseContent['commonFields'][$g]['displayName']['default']);
        
        $this->assertArrayHasKey('alternatives', $responseContent['commonFields'][$g]['displayName']);
        
        if ($responseContent['commonFields'][$g]['displayName']['alternatives']) {
        
        $this->assertIsArray($responseContent['commonFields'][$g]['displayName']['alternatives']);
        
        for($f = 0; $f < count($responseContent['commonFields'][$g]['displayName']['alternatives']); $f++) {
        
        $this->assertNotNull($responseContent['commonFields'][$g]['displayName']['alternatives'][$f]);
        
        $this->assertArrayHasKey('displayName', $responseContent['commonFields'][$g]['displayName']['alternatives'][$f]);
        
        $this->assertNotNull($responseContent['commonFields'][$g]['displayName']['alternatives'][$f]['displayName']);
        
        $this->assertIsString($responseContent['commonFields'][$g]['displayName']['alternatives'][$f]['displayName']);
        
        }
        
        }
        
        $this->assertArrayHasKey('description', $responseContent['commonFields'][$g]);
        
        if ($responseContent['commonFields'][$g]['description']) {
        
        $this->assertIsString($responseContent['commonFields'][$g]['description']);
        
        }
        
        $this->assertArrayHasKey('multiValued', $responseContent['commonFields'][$g]);
        
        if ($responseContent['commonFields'][$g]['multiValued']) {
        
        $this->assertIsBool($responseContent['commonFields'][$g]['multiValued']);
        
        }
        
        $this->assertArrayHasKey('required', $responseContent['commonFields'][$g]);
        
        if ($responseContent['commonFields'][$g]['required']) {
        
        $this->assertIsBool($responseContent['commonFields'][$g]['required']);
        
        }
        
        $this->assertArrayHasKey('unique', $responseContent['commonFields'][$g]);
        
        if ($responseContent['commonFields'][$g]['unique']) {
        
        $this->assertIsBool($responseContent['commonFields'][$g]['unique']);
        
        }
        
        $this->assertArrayHasKey('uneditable', $responseContent['commonFields'][$g]);
        
        if ($responseContent['commonFields'][$g]['uneditable']) {
        
        $this->assertIsBool($responseContent['commonFields'][$g]['uneditable']);
        
        }
        
        $this->assertArrayHasKey('treeId', $responseContent['commonFields'][$g]);
        
        if ($responseContent['commonFields'][$g]['treeId']) {
        
        }
        
        $this->assertArrayHasKey('fields', $responseContent['commonFields'][$g]);
        
        if ($responseContent['commonFields'][$g]['fields']) {
        
        $this->assertIsArray($responseContent['commonFields'][$g]['fields']);
        
        for($f = 0; $f < count($responseContent['commonFields'][$g]['fields']); $f++) {
        
        $this->assertNotNull($responseContent['commonFields'][$g]['fields'][$f]);
        
        $this->assertArrayHasKey('type', $responseContent['commonFields'][$g]['fields'][$f]);
        
        $this->assertNotNull($responseContent['commonFields'][$g]['fields'][$f]['type']);
        
        $this->assertContains($responseContent['commonFields'][$g]['fields'][$f]['type'], ['Object', 'TreeTag', 'Ref', 'Schema', 'Blob', 'NestedSchema', 'ObjectId', 'Int', 'Integer', 'Float', 'Decimal', 'Boolean', 'String', 'ShortText', 'LongText', 'DateTime', 'Date', 'Time', 'JSON', 'RichText', 'Duration']);
        
        }
        
        }
        
        $this->assertArrayHasKey('refSchema', $responseContent['commonFields'][$g]);
        
        if ($responseContent['commonFields'][$g]['refSchema']) {
        
        $this->assertIsString($responseContent['commonFields'][$g]['refSchema']);
        
        }
        
        $this->assertArrayHasKey('source', $responseContent['commonFields'][$g]);
        
        if ($responseContent['commonFields'][$g]['source']) {
        
        $this->assertContains($responseContent['commonFields'][$g]['source'], ['Default', 'System', 'User']);
        
        }
        
        $this->assertArrayHasKey('schemaName', $responseContent['commonFields'][$g]);
        
        if ($responseContent['commonFields'][$g]['schemaName']) {
        
        $this->assertIsString($responseContent['commonFields'][$g]['schemaName']);
        
        }
        
        }
        

    }
}