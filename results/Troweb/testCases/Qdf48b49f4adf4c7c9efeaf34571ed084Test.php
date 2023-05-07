<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qdf48b49f4adf4c7c9efeaf34571ed084Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  schema(name: \"Aaa\") {\n    _id\n    icon\n    name\n    displayName {\n      default\n    }\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:29:51","updated_at":"2023-05-07 21:29:51","times_called":1}
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
        
        }
        

    }
}