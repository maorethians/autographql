<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q3dde367702064f489a6910f8fd179ca0Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  schedule(conferenceId:\"freezing-edge-2020\",day: \"Monday\") {\n    day\n  }\n}\n","variables":null,"created_at":"2023-05-05 18:58:06","updated_at":"2023-05-05 18:58:06","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:3000/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('schedule', $responseContent);
        
        $this->assertNotNull($responseContent['schedule']);
        
        $this->assertArrayHasKey('day', $responseContent['schedule']);
        
        $this->assertNotNull($responseContent['schedule']['day']);
        
        $this->assertIsString($responseContent['schedule']['day']);
        

    }
}