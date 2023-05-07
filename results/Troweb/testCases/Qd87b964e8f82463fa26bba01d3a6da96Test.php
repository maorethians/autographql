<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qd87b964e8f82463fa26bba01d3a6da96Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  tree(_id: \"6454b9160379e02c19d86a24\") {\n    _id\n    name {\n      default\n    }\n    description\n    isPublished\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:38:06","updated_at":"2023-05-07 21:38:06","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('tree', $responseContent);
        
        $this->assertNotNull($responseContent['tree']);
        
        $this->assertArrayHasKey('_id', $responseContent['tree']);
        
        $this->assertNotNull($responseContent['tree']['_id']);
        
        $this->assertArrayHasKey('name', $responseContent['tree']);
        
        $this->assertNotNull($responseContent['tree']['name']);
        
        $this->assertArrayHasKey('default', $responseContent['tree']['name']);
        
        $this->assertNotNull($responseContent['tree']['name']['default']);
        
        $this->assertIsString($responseContent['tree']['name']['default']);
        
        $this->assertArrayHasKey('description', $responseContent['tree']);
        
        if ($responseContent['tree']['description']) {
        
        $this->assertIsString($responseContent['tree']['description']);
        
        }
        
        $this->assertArrayHasKey('isPublished', $responseContent['tree']);
        
        $this->assertNotNull($responseContent['tree']['isPublished']);
        
        $this->assertIsBool($responseContent['tree']['isPublished']);
        

    }
}