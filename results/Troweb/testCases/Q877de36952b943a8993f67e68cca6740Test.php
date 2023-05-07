<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q877de36952b943a8993f67e68cca6740Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  apiKeys {\n    key\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:41:05","updated_at":"2023-05-07 21:41:05","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('apiKeys', $responseContent);
        
        $this->assertNotNull($responseContent['apiKeys']);
        
        $this->assertIsArray($responseContent['apiKeys']);
        
        for($g = 0; $g < count($responseContent['apiKeys']); $g++) {
        
        $this->assertNotNull($responseContent['apiKeys'][$g]);
        
        $this->assertArrayHasKey('key', $responseContent['apiKeys'][$g]);
        
        $this->assertNotNull($responseContent['apiKeys'][$g]['key']);
        
        $this->assertIsString($responseContent['apiKeys'][$g]['key']);
        
        }
        

    }
}