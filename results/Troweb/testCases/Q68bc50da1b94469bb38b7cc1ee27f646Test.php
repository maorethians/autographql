<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q68bc50da1b94469bb38b7cc1ee27f646Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  getItems(ids: [\"642c2c8a66e87b0de367e7bc\"]) {\n    _id\n    title\n    parentId\n    externalId\n    subjects {\n      _id\n      title {\n        default\n      }\n      originId\n      ancestors {\n        _id\n      }\n    }\n    ancestors {\n      title\n      _id\n    }\n    isCollection\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:17:50","updated_at":"2023-05-07 21:17:50","times_called":1}
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
        
        $this->assertArrayHasKey('originId', $responseContent['getItems'][$g]['subjects'][$f]);
        
        if ($responseContent['getItems'][$g]['subjects'][$f]['originId']) {
        
        $this->assertIsString($responseContent['getItems'][$g]['subjects'][$f]['originId']);
        
        }
        
        $this->assertArrayHasKey('ancestors', $responseContent['getItems'][$g]['subjects'][$f]);
        
        $this->assertNotNull($responseContent['getItems'][$g]['subjects'][$f]['ancestors']);
        
        $this->assertIsArray($responseContent['getItems'][$g]['subjects'][$f]['ancestors']);
        
        for($e = 0; $e < count($responseContent['getItems'][$g]['subjects'][$f]['ancestors']); $e++) {
        
        $this->assertNotNull($responseContent['getItems'][$g]['subjects'][$f]['ancestors'][$e]);
        
        $this->assertArrayHasKey('_id', $responseContent['getItems'][$g]['subjects'][$f]['ancestors'][$e]);
        
        $this->assertNotNull($responseContent['getItems'][$g]['subjects'][$f]['ancestors'][$e]['_id']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('ancestors', $responseContent['getItems'][$g]);
        
        $this->assertNotNull($responseContent['getItems'][$g]['ancestors']);
        
        $this->assertIsArray($responseContent['getItems'][$g]['ancestors']);
        
        for($f = 0; $f < count($responseContent['getItems'][$g]['ancestors']); $f++) {
        
        $this->assertNotNull($responseContent['getItems'][$g]['ancestors'][$f]);
        
        $this->assertArrayHasKey('title', $responseContent['getItems'][$g]['ancestors'][$f]);
        
        $this->assertNotNull($responseContent['getItems'][$g]['ancestors'][$f]['title']);
        
        $this->assertIsString($responseContent['getItems'][$g]['ancestors'][$f]['title']);
        
        $this->assertArrayHasKey('_id', $responseContent['getItems'][$g]['ancestors'][$f]);
        
        $this->assertNotNull($responseContent['getItems'][$g]['ancestors'][$f]['_id']);
        
        }
        
        $this->assertArrayHasKey('isCollection', $responseContent['getItems'][$g]);
        
        $this->assertNotNull($responseContent['getItems'][$g]['isCollection']);
        
        $this->assertIsBool($responseContent['getItems'][$g]['isCollection']);
        
        }
        

    }
}