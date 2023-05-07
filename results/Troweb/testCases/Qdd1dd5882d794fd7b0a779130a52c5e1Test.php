<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qdd1dd5882d794fd7b0a779130a52c5e1Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  orgInfo {\n    id\n    name\n    logo\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:22:38","updated_at":"2023-05-07 21:22:38","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('orgInfo', $responseContent);
        
        $this->assertNotNull($responseContent['orgInfo']);
        
        $this->assertArrayHasKey('id', $responseContent['orgInfo']);
        
        $this->assertNotNull($responseContent['orgInfo']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['orgInfo']);
        
        $this->assertNotNull($responseContent['orgInfo']['name']);
        
        $this->assertIsString($responseContent['orgInfo']['name']);
        
        $this->assertArrayHasKey('logo', $responseContent['orgInfo']);
        
        if ($responseContent['orgInfo']['logo']) {
        
        $this->assertIsString($responseContent['orgInfo']['logo']);
        
        }
        

    }
}