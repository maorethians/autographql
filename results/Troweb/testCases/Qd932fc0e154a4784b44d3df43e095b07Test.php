<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qd932fc0e154a4784b44d3df43e095b07Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  canImport(collectionId: \"642c2c8a66e87b0de367e7bc\")\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:25:03","updated_at":"2023-05-07 21:25:03","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('canImport', $responseContent);
        
        $this->assertNotNull($responseContent['canImport']);
        
        $this->assertIsBool($responseContent['canImport']);
        

    }
}