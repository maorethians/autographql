<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q8003e7facc4849f8aa4a5f4b7933c421Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  getTreeNodes(treeId: \"6454b9160379e02c19d86a24\") {\n    _id\n    title {\n      default\n    }\n    originId\n    treeId\n    children {\n      _id\n      title {\n        default\n      }\n    }\n    ancestors {\n      _id\n    }\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:36:40","updated_at":"2023-05-07 21:36:40","times_called":1}
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
        
        $this->assertArrayHasKey('originId', $responseContent['getTreeNodes'][$g]);
        
        if ($responseContent['getTreeNodes'][$g]['originId']) {
        
        $this->assertIsString($responseContent['getTreeNodes'][$g]['originId']);
        
        }
        
        $this->assertArrayHasKey('treeId', $responseContent['getTreeNodes'][$g]);
        
        $this->assertNotNull($responseContent['getTreeNodes'][$g]['treeId']);
        
        $this->assertArrayHasKey('children', $responseContent['getTreeNodes'][$g]);
        
        if ($responseContent['getTreeNodes'][$g]['children']) {
        
        $this->assertIsArray($responseContent['getTreeNodes'][$g]['children']);
        
        for($f = 0; $f < count($responseContent['getTreeNodes'][$g]['children']); $f++) {
        
        $this->assertNotNull($responseContent['getTreeNodes'][$g]['children'][$f]);
        
        $this->assertArrayHasKey('_id', $responseContent['getTreeNodes'][$g]['children'][$f]);
        
        $this->assertNotNull($responseContent['getTreeNodes'][$g]['children'][$f]['_id']);
        
        $this->assertArrayHasKey('title', $responseContent['getTreeNodes'][$g]['children'][$f]);
        
        $this->assertNotNull($responseContent['getTreeNodes'][$g]['children'][$f]['title']);
        
        $this->assertArrayHasKey('default', $responseContent['getTreeNodes'][$g]['children'][$f]['title']);
        
        $this->assertNotNull($responseContent['getTreeNodes'][$g]['children'][$f]['title']['default']);
        
        $this->assertIsString($responseContent['getTreeNodes'][$g]['children'][$f]['title']['default']);
        
        }
        
        }
        
        $this->assertArrayHasKey('ancestors', $responseContent['getTreeNodes'][$g]);
        
        $this->assertNotNull($responseContent['getTreeNodes'][$g]['ancestors']);
        
        $this->assertIsArray($responseContent['getTreeNodes'][$g]['ancestors']);
        
        for($f = 0; $f < count($responseContent['getTreeNodes'][$g]['ancestors']); $f++) {
        
        $this->assertNotNull($responseContent['getTreeNodes'][$g]['ancestors'][$f]);
        
        $this->assertArrayHasKey('_id', $responseContent['getTreeNodes'][$g]['ancestors'][$f]);
        
        $this->assertNotNull($responseContent['getTreeNodes'][$g]['ancestors'][$f]['_id']);
        
        }
        
        }
        

    }
}