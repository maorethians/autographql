<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q6dd0012a9e114b8ebb531a72fefd36deTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  getAppData {\n    recentlyViewed {\n      items {\n        title\n        isCollection\n        parentId\n        schema {\n          _id\n        }\n        ancestors {\n          title\n          _id\n        }\n      }\n      __typename\n    }\n  }\n}\n","variables":{"query":{"match_all":{}},"sort":[{"_id":"desc"}]},"operation_name":null,"created_at":"2023-05-07 20:52:34","updated_at":"2023-05-07 20:52:34","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('getAppData', $responseContent);
        
        if ($responseContent['getAppData']) {
        
        $this->assertArrayHasKey('recentlyViewed', $responseContent['getAppData']);
        
        if ($responseContent['getAppData']['recentlyViewed']) {
        
        $this->assertEquals('AppDataRecentlyViewed' , $responseContent['getAppData']['recentlyViewed']['__typename']);
        
        $this->assertArrayHasKey('items', $responseContent['getAppData']['recentlyViewed']);
        
        $this->assertNotNull($responseContent['getAppData']['recentlyViewed']['items']);
        
        $this->assertIsArray($responseContent['getAppData']['recentlyViewed']['items']);
        
        for($g = 0; $g < count($responseContent['getAppData']['recentlyViewed']['items']); $g++) {
        
        $this->assertNotNull($responseContent['getAppData']['recentlyViewed']['items'][$g]);
        
        $this->assertArrayHasKey('title', $responseContent['getAppData']['recentlyViewed']['items'][$g]);
        
        $this->assertNotNull($responseContent['getAppData']['recentlyViewed']['items'][$g]['title']);
        
        $this->assertIsString($responseContent['getAppData']['recentlyViewed']['items'][$g]['title']);
        
        $this->assertArrayHasKey('isCollection', $responseContent['getAppData']['recentlyViewed']['items'][$g]);
        
        $this->assertNotNull($responseContent['getAppData']['recentlyViewed']['items'][$g]['isCollection']);
        
        $this->assertIsBool($responseContent['getAppData']['recentlyViewed']['items'][$g]['isCollection']);
        
        $this->assertArrayHasKey('parentId', $responseContent['getAppData']['recentlyViewed']['items'][$g]);
        
        if ($responseContent['getAppData']['recentlyViewed']['items'][$g]['parentId']) {
        
        }
        
        $this->assertArrayHasKey('schema', $responseContent['getAppData']['recentlyViewed']['items'][$g]);
        
        $this->assertNotNull($responseContent['getAppData']['recentlyViewed']['items'][$g]['schema']);
        
        $this->assertArrayHasKey('_id', $responseContent['getAppData']['recentlyViewed']['items'][$g]['schema']);
        
        $this->assertNotNull($responseContent['getAppData']['recentlyViewed']['items'][$g]['schema']['_id']);
        
        $this->assertArrayHasKey('ancestors', $responseContent['getAppData']['recentlyViewed']['items'][$g]);
        
        $this->assertNotNull($responseContent['getAppData']['recentlyViewed']['items'][$g]['ancestors']);
        
        $this->assertIsArray($responseContent['getAppData']['recentlyViewed']['items'][$g]['ancestors']);
        
        for($f = 0; $f < count($responseContent['getAppData']['recentlyViewed']['items'][$g]['ancestors']); $f++) {
        
        $this->assertNotNull($responseContent['getAppData']['recentlyViewed']['items'][$g]['ancestors'][$f]);
        
        $this->assertArrayHasKey('title', $responseContent['getAppData']['recentlyViewed']['items'][$g]['ancestors'][$f]);
        
        $this->assertNotNull($responseContent['getAppData']['recentlyViewed']['items'][$g]['ancestors'][$f]['title']);
        
        $this->assertIsString($responseContent['getAppData']['recentlyViewed']['items'][$g]['ancestors'][$f]['title']);
        
        $this->assertArrayHasKey('_id', $responseContent['getAppData']['recentlyViewed']['items'][$g]['ancestors'][$f]);
        
        $this->assertNotNull($responseContent['getAppData']['recentlyViewed']['items'][$g]['ancestors'][$f]['_id']);
        
        }
        
        }
        
        }
        
        }
        

    }
}