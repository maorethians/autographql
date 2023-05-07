<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qe2c75c8ccb22490caa9b9d756043c089Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  schema(name: \"Aaa\") {\n    _id\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:29:35","updated_at":"2023-05-07 21:29:35","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('schema', $responseContent);
        
        if ($responseContent['schema']) {
        
        $this->assertArrayHasKey('_id', $responseContent['schema']);
        
        $this->assertNotNull($responseContent['schema']['_id']);
        
        }
        

    }
}