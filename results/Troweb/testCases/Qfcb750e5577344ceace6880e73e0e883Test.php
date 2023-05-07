<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qfcb750e5577344ceace6880e73e0e883Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"query search($query: JSON!, $sort: JSON!) {\n  search(limit: 10, offset: 0, query: $query, sort: $sort) {\n    items {\n      _id\n      title\n      schema {\n        _id\n      }\n      isCollection\n      parentId\n      externalId\n      ancestors {\n        title\n      }\n    }\n    total\n    limit\n    offset\n    totalRelation\n    aggregations\n    __typename\n  }\n}\n","variables":{"query":{"match_all":{}},"sort":[{"_id":"desc"}]},"operation_name":"search","created_at":"2023-05-07 20:49:05","updated_at":"2023-05-07 20:49:17","times_called":2}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('search', $responseContent);
        
        $this->assertNotNull($responseContent['search']);
        
        $this->assertEquals('SearchResults' , $responseContent['search']['__typename']);
        
        $this->assertArrayHasKey('items', $responseContent['search']);
        
        $this->assertNotNull($responseContent['search']['items']);
        
        $this->assertIsArray($responseContent['search']['items']);
        
        for($g = 0; $g < count($responseContent['search']['items']); $g++) {
        
        $this->assertNotNull($responseContent['search']['items'][$g]);
        
        $this->assertArrayHasKey('_id', $responseContent['search']['items'][$g]);
        
        $this->assertNotNull($responseContent['search']['items'][$g]['_id']);
        
        $this->assertArrayHasKey('title', $responseContent['search']['items'][$g]);
        
        $this->assertNotNull($responseContent['search']['items'][$g]['title']);
        
        $this->assertIsString($responseContent['search']['items'][$g]['title']);
        
        $this->assertArrayHasKey('schema', $responseContent['search']['items'][$g]);
        
        $this->assertNotNull($responseContent['search']['items'][$g]['schema']);
        
        $this->assertArrayHasKey('_id', $responseContent['search']['items'][$g]['schema']);
        
        $this->assertNotNull($responseContent['search']['items'][$g]['schema']['_id']);
        
        $this->assertArrayHasKey('isCollection', $responseContent['search']['items'][$g]);
        
        $this->assertNotNull($responseContent['search']['items'][$g]['isCollection']);
        
        $this->assertIsBool($responseContent['search']['items'][$g]['isCollection']);
        
        $this->assertArrayHasKey('parentId', $responseContent['search']['items'][$g]);
        
        if ($responseContent['search']['items'][$g]['parentId']) {
        
        }
        
        $this->assertArrayHasKey('externalId', $responseContent['search']['items'][$g]);
        
        if ($responseContent['search']['items'][$g]['externalId']) {
        
        $this->assertIsString($responseContent['search']['items'][$g]['externalId']);
        
        }
        
        $this->assertArrayHasKey('ancestors', $responseContent['search']['items'][$g]);
        
        $this->assertNotNull($responseContent['search']['items'][$g]['ancestors']);
        
        $this->assertIsArray($responseContent['search']['items'][$g]['ancestors']);
        
        for($f = 0; $f < count($responseContent['search']['items'][$g]['ancestors']); $f++) {
        
        $this->assertNotNull($responseContent['search']['items'][$g]['ancestors'][$f]);
        
        $this->assertArrayHasKey('title', $responseContent['search']['items'][$g]['ancestors'][$f]);
        
        $this->assertNotNull($responseContent['search']['items'][$g]['ancestors'][$f]['title']);
        
        $this->assertIsString($responseContent['search']['items'][$g]['ancestors'][$f]['title']);
        
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
        
        $this->assertArrayHasKey('totalRelation', $responseContent['search']);
        
        $this->assertNotNull($responseContent['search']['totalRelation']);
        
        $this->assertIsString($responseContent['search']['totalRelation']);
        
        $this->assertArrayHasKey('aggregations', $responseContent['search']);
        
        if ($responseContent['search']['aggregations']) {
        
        }
        

    }
}