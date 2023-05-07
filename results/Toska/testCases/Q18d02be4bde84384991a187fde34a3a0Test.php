<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q18d02be4bde84384991a187fde34a3a0Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  sponsors {\n    firstName\n    lastName\n    name\n    about\n    aboutShort\n  }\n}\n","variables":null,"created_at":"2023-05-05 18:49:18","updated_at":"2023-05-05 18:49:18","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:3000/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('sponsors', $responseContent);
        
        $this->assertNotNull($responseContent['sponsors']);
        
        $this->assertIsArray($responseContent['sponsors']);
        
        for($g = 0; $g < count($responseContent['sponsors']); $g++) {
        
        $this->assertNotNull($responseContent['sponsors'][$g]);
        
        $this->assertArrayHasKey('firstName', $responseContent['sponsors'][$g]);
        
        $this->assertNotNull($responseContent['sponsors'][$g]['firstName']);
        
        $this->assertIsString($responseContent['sponsors'][$g]['firstName']);
        
        $this->assertArrayHasKey('lastName', $responseContent['sponsors'][$g]);
        
        $this->assertNotNull($responseContent['sponsors'][$g]['lastName']);
        
        $this->assertIsString($responseContent['sponsors'][$g]['lastName']);
        
        $this->assertArrayHasKey('name', $responseContent['sponsors'][$g]);
        
        $this->assertNotNull($responseContent['sponsors'][$g]['name']);
        
        $this->assertIsString($responseContent['sponsors'][$g]['name']);
        
        $this->assertArrayHasKey('about', $responseContent['sponsors'][$g]);
        
        $this->assertNotNull($responseContent['sponsors'][$g]['about']);
        
        $this->assertIsString($responseContent['sponsors'][$g]['about']);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['sponsors'][$g]);
        
        if ($responseContent['sponsors'][$g]['aboutShort']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['aboutShort']);
        
        }
        
        }
        

    }
}