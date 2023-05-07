<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qce123110aa664c2bbbd6e0ebac99dcc0Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  getTreeNodes(treeId: \"6454b9160379e02c19d86a24\") {\n    _id\n    title {\n      default\n    }\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:34:09","updated_at":"2023-05-07 21:34:13","times_called":3}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('getTreeNodes', $responseContent);
        
        $this->assertNotNull($responseContent['getTreeNodes']);
        
        $this->assertIsArray($responseContent['getTreeNodes']);
        
        for($g = 0; $g < count($responseContent['getTreeNodes']); $g++) {
        
        $this->assertNotNull($responseContent['getTreeNodes'][$g]);
        
        $this->assertArrayHasKey('_id', $responseContent['getTreeNodes'][$g]);
        
        $this->assertNotNull($responseContent['getTreeNodes'][$g]['_id']);
        
        $this->assertArrayHasKey('title', $responseContent['getTreeNodes'][$g]);
        
        $this->assertNotNull($responseContent['getTreeNodes'][$g]['title']);
        
        $this->assertArrayHasKey('default', $responseContent['getTreeNodes'][$g]['title']);
        
        $this->assertNotNull($responseContent['getTreeNodes'][$g]['title']['default']);
        
        $this->assertIsString($responseContent['getTreeNodes'][$g]['title']['default']);
        
        }
        

    }
}