<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q520518654ced4e38b4b459b0f250baa3Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  trees {\n    _id\n    isPublished\n    rootNodesId\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:40:48","updated_at":"2023-05-07 21:40:48","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('trees', $responseContent);
        
        $this->assertNotNull($responseContent['trees']);
        
        $this->assertIsArray($responseContent['trees']);
        
        for($g = 0; $g < count($responseContent['trees']); $g++) {
        
        $this->assertNotNull($responseContent['trees'][$g]);
        
        $this->assertArrayHasKey('_id', $responseContent['trees'][$g]);
        
        $this->assertNotNull($responseContent['trees'][$g]['_id']);
        
        $this->assertArrayHasKey('isPublished', $responseContent['trees'][$g]);
        
        $this->assertNotNull($responseContent['trees'][$g]['isPublished']);
        
        $this->assertIsBool($responseContent['trees'][$g]['isPublished']);
        
        $this->assertArrayHasKey('rootNodesId', $responseContent['trees'][$g]);
        
        $this->assertNotNull($responseContent['trees'][$g]['rootNodesId']);
        
        $this->assertIsArray($responseContent['trees'][$g]['rootNodesId']);
        
        for($f = 0; $f < count($responseContent['trees'][$g]['rootNodesId']); $f++) {
        
        $this->assertNotNull($responseContent['trees'][$g]['rootNodesId'][$f]);
        
        }
        
        }
        

    }
}