<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q91ed43c5d95e4ffb8b97f95a8f7386f1Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  series(id: \"future-frontend\") {\n    id\n  }\n}\n","variables":null,"created_at":"2023-05-05 18:59:49","updated_at":"2023-05-05 18:59:49","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:3000/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('series', $responseContent);
        
        $this->assertNotNull($responseContent['series']);
        
        $this->assertArrayHasKey('id', $responseContent['series']);
        
        $this->assertNotNull($responseContent['series']['id']);
        

    }
}