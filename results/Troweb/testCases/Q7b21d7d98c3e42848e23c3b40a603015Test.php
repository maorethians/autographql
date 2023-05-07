<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q7b21d7d98c3e42848e23c3b40a603015Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  canImport(collectionId: \"000000000000000000000000\")\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:25:09","updated_at":"2023-05-07 21:25:09","times_called":1}
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