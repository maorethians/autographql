<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q432e7e1c34104a2e8d99f94faf0413efTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  items {\n    total\n    items {\n      title\n      isCollection\n      parentId\n      externalId\n      _id\n      subjects {\n        _id\n      }\n    }\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:44:05","updated_at":"2023-05-07 21:44:05","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('items', $responseContent);
        
        $this->assertNotNull($responseContent['items']);
        
        $this->assertArrayHasKey('total', $responseContent['items']);
        
        $this->assertNotNull($responseContent['items']['total']);
        
        $this->assertIsInt($responseContent['items']['total']);
        
        $this->assertArrayHasKey('items', $responseContent['items']);
        
        $this->assertNotNull($responseContent['items']['items']);
        
        $this->assertIsArray($responseContent['items']['items']);
        
        for($g = 0; $g < count($responseContent['items']['items']); $g++) {
        
        $this->assertNotNull($responseContent['items']['items'][$g]);
        
        $this->assertArrayHasKey('title', $responseContent['items']['items'][$g]);
        
        $this->assertNotNull($responseContent['items']['items'][$g]['title']);
        
        $this->assertIsString($responseContent['items']['items'][$g]['title']);
        
        $this->assertArrayHasKey('isCollection', $responseContent['items']['items'][$g]);
        
        $this->assertNotNull($responseContent['items']['items'][$g]['isCollection']);
        
        $this->assertIsBool($responseContent['items']['items'][$g]['isCollection']);
        
        $this->assertArrayHasKey('parentId', $responseContent['items']['items'][$g]);
        
        if ($responseContent['items']['items'][$g]['parentId']) {
        
        }
        
        $this->assertArrayHasKey('externalId', $responseContent['items']['items'][$g]);
        
        if ($responseContent['items']['items'][$g]['externalId']) {
        
        $this->assertIsString($responseContent['items']['items'][$g]['externalId']);
        
        }
        
        $this->assertArrayHasKey('_id', $responseContent['items']['items'][$g]);
        
        $this->assertNotNull($responseContent['items']['items'][$g]['_id']);
        
        $this->assertArrayHasKey('subjects', $responseContent['items']['items'][$g]);
        
        if ($responseContent['items']['items'][$g]['subjects']) {
        
        $this->assertIsArray($responseContent['items']['items'][$g]['subjects']);
        
        for($f = 0; $f < count($responseContent['items']['items'][$g]['subjects']); $f++) {
        
        $this->assertNotNull($responseContent['items']['items'][$g]['subjects'][$f]);
        
        $this->assertArrayHasKey('_id', $responseContent['items']['items'][$g]['subjects'][$f]);
        
        $this->assertNotNull($responseContent['items']['items'][$g]['subjects'][$f]['_id']);
        
        }
        
        }
        
        }
        

    }
}