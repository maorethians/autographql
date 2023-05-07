<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qe93933fc0a1b40cbabf8e9be75da5898Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  getItems(ids: [\"000000000000000000000000\"]) {\n    _id\n    title\n    parentId\n    externalId\n    subjects {\n      _id\n      title {\n        default\n      }\n    }\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:16:59","updated_at":"2023-05-07 21:16:59","times_called":1}
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
        
        $this->assertArrayHasKey('parentId', $responseContent['getItems'][$g]);
        
        if ($responseContent['getItems'][$g]['parentId']) {
        
        }
        
        $this->assertArrayHasKey('externalId', $responseContent['getItems'][$g]);
        
        if ($responseContent['getItems'][$g]['externalId']) {
        
        $this->assertIsString($responseContent['getItems'][$g]['externalId']);
        
        }
        
        $this->assertArrayHasKey('subjects', $responseContent['getItems'][$g]);
        
        if ($responseContent['getItems'][$g]['subjects']) {
        
        $this->assertIsArray($responseContent['getItems'][$g]['subjects']);
        
        for($f = 0; $f < count($responseContent['getItems'][$g]['subjects']); $f++) {
        
        $this->assertNotNull($responseContent['getItems'][$g]['subjects'][$f]);
        
        $this->assertArrayHasKey('_id', $responseContent['getItems'][$g]['subjects'][$f]);
        
        $this->assertNotNull($responseContent['getItems'][$g]['subjects'][$f]['_id']);
        
        $this->assertArrayHasKey('title', $responseContent['getItems'][$g]['subjects'][$f]);
        
        $this->assertNotNull($responseContent['getItems'][$g]['subjects'][$f]['title']);
        
        $this->assertArrayHasKey('default', $responseContent['getItems'][$g]['subjects'][$f]['title']);
        
        $this->assertNotNull($responseContent['getItems'][$g]['subjects'][$f]['title']['default']);
        
        $this->assertIsString($responseContent['getItems'][$g]['subjects'][$f]['title']['default']);
        
        }
        
        }
        
        }
        

    }
}