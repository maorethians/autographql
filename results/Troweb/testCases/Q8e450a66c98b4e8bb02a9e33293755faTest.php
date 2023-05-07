<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q8e450a66c98b4e8bb02a9e33293755faTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"query search($query: JSON!, $sort: JSON!) {\n  search(limit: 10, offset: 0, query: $query, sort: $sort) {\n    items {\n      _id\n      subjects {\n        _id\n      }\n    }\n    total\n    limit\n    offset\n  }\n}\n","variables":{"query":{"match_all":{}},"sort":[{"_id":"desc"}]},"operation_name":"search","created_at":"2023-05-07 20:47:24","updated_at":"2023-05-07 20:47:24","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('search', $responseContent);
        
        $this->assertNotNull($responseContent['search']);
        
        $this->assertArrayHasKey('items', $responseContent['search']);
        
        $this->assertNotNull($responseContent['search']['items']);
        
        $this->assertIsArray($responseContent['search']['items']);
        
        for($g = 0; $g < count($responseContent['search']['items']); $g++) {
        
        $this->assertNotNull($responseContent['search']['items'][$g]);
        
        $this->assertArrayHasKey('_id', $responseContent['search']['items'][$g]);
        
        $this->assertNotNull($responseContent['search']['items'][$g]['_id']);
        
        $this->assertArrayHasKey('subjects', $responseContent['search']['items'][$g]);
        
        if ($responseContent['search']['items'][$g]['subjects']) {
        
        $this->assertIsArray($responseContent['search']['items'][$g]['subjects']);
        
        for($f = 0; $f < count($responseContent['search']['items'][$g]['subjects']); $f++) {
        
        $this->assertNotNull($responseContent['search']['items'][$g]['subjects'][$f]);
        
        $this->assertArrayHasKey('_id', $responseContent['search']['items'][$g]['subjects'][$f]);
        
        $this->assertNotNull($responseContent['search']['items'][$g]['subjects'][$f]['_id']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('total', $responseContent['search']);
        
        $this->assertNotNull($responseContent['search']['total']);
        
        $this->assertIsInt($responseContent['search']['total']);
        
        $this->assertArrayHasKey('limit', $responseContent['search']);
        
        $this->assertNotNull($responseContent['search']['limit']);
        
        $this->assertIsInt($responseContent['search']['limit']);
        
        $this->assertArrayHasKey('offset', $responseContent['search']);
        
        $this->assertNotNull($responseContent['search']['offset']);
        
        $this->assertIsInt($responseContent['search']['offset']);
        

    }
}