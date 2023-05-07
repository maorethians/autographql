<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qd2dc22a36870436aa69104acf94f945bTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  authorityGroups {\n    _id\n    name\n  }\n}\n","variables":{"query":{"match_all":{}},"sort":[{"_id":"desc"}]},"operation_name":null,"created_at":"2023-05-07 20:55:18","updated_at":"2023-05-07 20:55:18","times_called":3}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('authorityGroups', $responseContent);
        
        $this->assertNotNull($responseContent['authorityGroups']);
        
        $this->assertIsArray($responseContent['authorityGroups']);
        
        for($g = 0; $g < count($responseContent['authorityGroups']); $g++) {
        
        $this->assertNotNull($responseContent['authorityGroups'][$g]);
        
        $this->assertArrayHasKey('_id', $responseContent['authorityGroups'][$g]);
        
        $this->assertNotNull($responseContent['authorityGroups'][$g]['_id']);
        
        $this->assertArrayHasKey('name', $responseContent['authorityGroups'][$g]);
        
        $this->assertNotNull($responseContent['authorityGroups'][$g]['name']);
        
        $this->assertIsString($responseContent['authorityGroups'][$g]['name']);
        
        }
        

    }
}