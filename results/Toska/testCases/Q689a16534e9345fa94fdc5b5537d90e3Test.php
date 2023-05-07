<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q689a16534e9345fa94fdc5b5537d90e3Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  conferences {\n    series\n  }\n}\n","variables":null,"created_at":"2023-05-05 18:58:27","updated_at":"2023-05-05 18:58:27","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:3000/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('conferences', $responseContent);
        
        $this->assertNotNull($responseContent['conferences']);
        
        $this->assertIsArray($responseContent['conferences']);
        
        for($g = 0; $g < count($responseContent['conferences']); $g++) {
        
        $this->assertNotNull($responseContent['conferences'][$g]);
        
        $this->assertArrayHasKey('series', $responseContent['conferences'][$g]);
        
        $this->assertNotNull($responseContent['conferences'][$g]['series']);
        
        $this->assertIsString($responseContent['conferences'][$g]['series']);
        
        }
        

    }
}