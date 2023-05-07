<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q294151287f204e39bd6ae5604e258d40Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  me {\n    isAdmin\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:41:19","updated_at":"2023-05-07 21:41:19","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('me', $responseContent);
        
        $this->assertNotNull($responseContent['me']);
        
        $this->assertArrayHasKey('isAdmin', $responseContent['me']);
        
        $this->assertNotNull($responseContent['me']['isAdmin']);
        
        $this->assertIsBool($responseContent['me']['isAdmin']);
        

    }
}