<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q151bad19c2d341028a501d66495857d0Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  users {\n    _id\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:43:05","updated_at":"2023-05-07 21:43:05","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('users', $responseContent);
        
        $this->assertNotNull($responseContent['users']);
        
        $this->assertIsArray($responseContent['users']);
        
        for($g = 0; $g < count($responseContent['users']); $g++) {
        
        $this->assertNotNull($responseContent['users'][$g]);
        
        $this->assertArrayHasKey('_id', $responseContent['users'][$g]);
        
        $this->assertNotNull($responseContent['users'][$g]['_id']);
        
        }
        

    }
}