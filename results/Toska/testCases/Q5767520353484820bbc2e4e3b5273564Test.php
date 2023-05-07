<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q5767520353484820bbc2e4e3b5273564Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  themes {\n    id\n  }\n}\n","variables":null,"created_at":"2023-05-05 19:00:13","updated_at":"2023-05-05 19:00:13","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:3000/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('themes', $responseContent);
        
        $this->assertNotNull($responseContent['themes']);
        
        $this->assertIsArray($responseContent['themes']);
        
        for($g = 0; $g < count($responseContent['themes']); $g++) {
        
        $this->assertNotNull($responseContent['themes'][$g]);
        
        $this->assertArrayHasKey('id', $responseContent['themes'][$g]);
        
        $this->assertNotNull($responseContent['themes'][$g]['id']);
        
        }
        

    }
}