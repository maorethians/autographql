<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q464d21115dea415b9626c7e020f2fe8cTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  locations {\n    location {\n      name\n      about\n      city\n      address\n    }\n  }\n}\n","variables":null,"created_at":"2023-05-05 18:46:44","updated_at":"2023-05-05 18:46:44","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:3000/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('locations', $responseContent);
        
        $this->assertNotNull($responseContent['locations']);
        
        $this->assertIsArray($responseContent['locations']);
        
        for($g = 0; $g < count($responseContent['locations']); $g++) {
        
        $this->assertNotNull($responseContent['locations'][$g]);
        
        $this->assertArrayHasKey('location', $responseContent['locations'][$g]);
        
        $this->assertNotNull($responseContent['locations'][$g]['location']);
        
        $this->assertArrayHasKey('name', $responseContent['locations'][$g]['location']);
        
        if ($responseContent['locations'][$g]['location']['name']) {
        
        $this->assertIsString($responseContent['locations'][$g]['location']['name']);
        
        }
        
        $this->assertArrayHasKey('about', $responseContent['locations'][$g]['location']);
        
        if ($responseContent['locations'][$g]['location']['about']) {
        
        $this->assertIsString($responseContent['locations'][$g]['location']['about']);
        
        }
        
        $this->assertArrayHasKey('city', $responseContent['locations'][$g]['location']);
        
        if ($responseContent['locations'][$g]['location']['city']) {
        
        $this->assertIsString($responseContent['locations'][$g]['location']['city']);
        
        }
        
        $this->assertArrayHasKey('address', $responseContent['locations'][$g]['location']);
        
        if ($responseContent['locations'][$g]['location']['address']) {
        
        $this->assertIsString($responseContent['locations'][$g]['location']['address']);
        
        }
        
        }
        

    }
}