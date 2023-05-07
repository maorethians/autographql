<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q12f18f920d9e443d8d0d7bc0b0ebf0a1Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  tree(_id: \"6454b9160379e02c19d86a24\") {\n    _id\n    name {\n      default\n    }\n    description\n    isPublished\n    nodes {\n      _id\n      title {\n        default\n      }\n      originId\n    }\n    rootNodesId\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:39:28","updated_at":"2023-05-07 21:39:28","times_called":1}
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
        
        $this->assertArrayHasKey('nodes', $responseContent['tree']);
        
        $this->assertNotNull($responseContent['tree']['nodes']);
        
        $this->assertIsArray($responseContent['tree']['nodes']);
        
        for($g = 0; $g < count($responseContent['tree']['nodes']); $g++) {
        
        $this->assertNotNull($responseContent['tree']['nodes'][$g]);
        
        $this->assertArrayHasKey('_id', $responseContent['tree']['nodes'][$g]);
        
        $this->assertNotNull($responseContent['tree']['nodes'][$g]['_id']);
        
        $this->assertArrayHasKey('title', $responseContent['tree']['nodes'][$g]);
        
        $this->assertNotNull($responseContent['tree']['nodes'][$g]['title']);
        
        $this->assertArrayHasKey('default', $responseContent['tree']['nodes'][$g]['title']);
        
        $this->assertNotNull($responseContent['tree']['nodes'][$g]['title']['default']);
        
        $this->assertIsString($responseContent['tree']['nodes'][$g]['title']['default']);
        
        $this->assertArrayHasKey('originId', $responseContent['tree']['nodes'][$g]);
        
        if ($responseContent['tree']['nodes'][$g]['originId']) {
        
        $this->assertIsString($responseContent['tree']['nodes'][$g]['originId']);
        
        }
        
        }
        
        $this->assertArrayHasKey('rootNodesId', $responseContent['tree']);
        
        $this->assertNotNull($responseContent['tree']['rootNodesId']);
        
        $this->assertIsArray($responseContent['tree']['rootNodesId']);
        
        for($g = 0; $g < count($responseContent['tree']['rootNodesId']); $g++) {
        
        $this->assertNotNull($responseContent['tree']['rootNodesId'][$g]);
        
        }
        

    }
}