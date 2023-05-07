<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q73d913589737419e9664d5beec0ecd46Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  schemas {\n    name\n    icon\n    description\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:31:25","updated_at":"2023-05-07 21:31:25","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('schemas', $responseContent);
        
        $this->assertNotNull($responseContent['schemas']);
        
        $this->assertIsArray($responseContent['schemas']);
        
        for($g = 0; $g < count($responseContent['schemas']); $g++) {
        
        $this->assertNotNull($responseContent['schemas'][$g]);
        
        $this->assertArrayHasKey('name', $responseContent['schemas'][$g]);
        
        $this->assertNotNull($responseContent['schemas'][$g]['name']);
        
        $this->assertArrayHasKey('icon', $responseContent['schemas'][$g]);
        
        if ($responseContent['schemas'][$g]['icon']) {
        
        $this->assertIsString($responseContent['schemas'][$g]['icon']);
        
        }
        
        $this->assertArrayHasKey('description', $responseContent['schemas'][$g]);
        
        $this->assertNotNull($responseContent['schemas'][$g]['description']);
        
        $this->assertIsString($responseContent['schemas'][$g]['description']);
        
        }
        

    }
}