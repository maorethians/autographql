<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qe9edd8dbc70d42419d8c18f3a5fc8cceTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  getItems(ids: [\"000000000000000000000000\"]) {\n    _id\n    title\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:13:38","updated_at":"2023-05-07 21:13:38","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('getItems', $responseContent);
        
        $this->assertNotNull($responseContent['getItems']);
        
        $this->assertIsArray($responseContent['getItems']);
        
        for($g = 0; $g < count($responseContent['getItems']); $g++) {
        
        $this->assertNotNull($responseContent['getItems'][$g]);
        
        $this->assertArrayHasKey('_id', $responseContent['getItems'][$g]);
        
        $this->assertNotNull($responseContent['getItems'][$g]['_id']);
        
        $this->assertArrayHasKey('title', $responseContent['getItems'][$g]);
        
        $this->assertNotNull($responseContent['getItems'][$g]['title']);
        
        $this->assertIsString($responseContent['getItems'][$g]['title']);
        
        }
        

    }
}