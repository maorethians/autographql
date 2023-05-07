<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q66d4c07acbe940b4978d0951468f40cbTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  getTreeNodes(treeId: \"6454d7a0afe0c90a4cf3c502\") {\n    _id\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:32:15","updated_at":"2023-05-07 21:32:15","times_called":1}
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
        
        }
        

    }
}