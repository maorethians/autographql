<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qf75c8778ce4c4926b7d091e4dc37fbf5Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  series(id: \"future-frontend\") {\n    id\n    name\n    conferences {\n      id\n    }\n  }\n}\n","variables":null,"created_at":"2023-05-05 18:59:56","updated_at":"2023-05-05 18:59:56","times_called":1}
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
        
        $this->assertArrayHasKey('name', $responseContent['series']);
        
        $this->assertNotNull($responseContent['series']['name']);
        
        $this->assertIsString($responseContent['series']['name']);
        
        $this->assertArrayHasKey('conferences', $responseContent['series']);
        
        $this->assertNotNull($responseContent['series']['conferences']);
        
        $this->assertIsArray($responseContent['series']['conferences']);
        
        for($g = 0; $g < count($responseContent['series']['conferences']); $g++) {
        
        $this->assertNotNull($responseContent['series']['conferences'][$g]);
        
        $this->assertArrayHasKey('id', $responseContent['series']['conferences'][$g]);
        
        $this->assertNotNull($responseContent['series']['conferences'][$g]['id']);
        
        }
        

    }
}