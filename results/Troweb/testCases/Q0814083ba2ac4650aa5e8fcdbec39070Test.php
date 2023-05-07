<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q0814083ba2ac4650aa5e8fcdbec39070Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  pluginsOrgInstance {\n    _id\n    name\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:27:39","updated_at":"2023-05-07 21:27:39","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('pluginsOrgInstance', $responseContent);
        
        $this->assertNotNull($responseContent['pluginsOrgInstance']);
        
        $this->assertIsArray($responseContent['pluginsOrgInstance']);
        
        for($g = 0; $g < count($responseContent['pluginsOrgInstance']); $g++) {
        
        $this->assertNotNull($responseContent['pluginsOrgInstance'][$g]);
        
        $this->assertArrayHasKey('_id', $responseContent['pluginsOrgInstance'][$g]);
        
        $this->assertNotNull($responseContent['pluginsOrgInstance'][$g]['_id']);
        
        $this->assertArrayHasKey('name', $responseContent['pluginsOrgInstance'][$g]);
        
        $this->assertNotNull($responseContent['pluginsOrgInstance'][$g]['name']);
        
        $this->assertIsString($responseContent['pluginsOrgInstance'][$g]['name']);
        
        }
        

    }
}