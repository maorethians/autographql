<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q666aa9f0f7e14df7b8ad9caaddfda25dTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  locations {\n    name\n    talks {\n      description\n      day\n      begin\n      end\n    }\n    workshops {\n      description\n      day\n      begin\n      end\n    }\n  }\n}\n","variables":null,"created_at":"2023-05-05 18:47:56","updated_at":"2023-05-05 18:47:56","times_called":1}
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
        
        $this->assertArrayHasKey('name', $responseContent['locations'][$g]);
        
        $this->assertNotNull($responseContent['locations'][$g]['name']);
        
        $this->assertIsString($responseContent['locations'][$g]['name']);
        
        $this->assertArrayHasKey('talks', $responseContent['locations'][$g]);
        
        if ($responseContent['locations'][$g]['talks']) {
        
        $this->assertIsArray($responseContent['locations'][$g]['talks']);
        
        for($f = 0; $f < count($responseContent['locations'][$g]['talks']); $f++) {
        
        $this->assertNotNull($responseContent['locations'][$g]['talks'][$f]);
        
        $this->assertArrayHasKey('description', $responseContent['locations'][$g]['talks'][$f]);
        
        if ($responseContent['locations'][$g]['talks'][$f]['description']) {
        
        $this->assertIsString($responseContent['locations'][$g]['talks'][$f]['description']);
        
        }
        
        $this->assertArrayHasKey('day', $responseContent['locations'][$g]['talks'][$f]);
        
        if ($responseContent['locations'][$g]['talks'][$f]['day']) {
        
        $this->assertIsString($responseContent['locations'][$g]['talks'][$f]['day']);
        
        }
        
        $this->assertArrayHasKey('begin', $responseContent['locations'][$g]['talks'][$f]);
        
        if ($responseContent['locations'][$g]['talks'][$f]['begin']) {
        
        $this->assertIsString($responseContent['locations'][$g]['talks'][$f]['begin']);
        
        }
        
        $this->assertArrayHasKey('end', $responseContent['locations'][$g]['talks'][$f]);
        
        if ($responseContent['locations'][$g]['talks'][$f]['end']) {
        
        $this->assertIsString($responseContent['locations'][$g]['talks'][$f]['end']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('workshops', $responseContent['locations'][$g]);
        
        if ($responseContent['locations'][$g]['workshops']) {
        
        $this->assertIsArray($responseContent['locations'][$g]['workshops']);
        
        for($f = 0; $f < count($responseContent['locations'][$g]['workshops']); $f++) {
        
        $this->assertNotNull($responseContent['locations'][$g]['workshops'][$f]);
        
        $this->assertArrayHasKey('description', $responseContent['locations'][$g]['workshops'][$f]);
        
        if ($responseContent['locations'][$g]['workshops'][$f]['description']) {
        
        $this->assertIsString($responseContent['locations'][$g]['workshops'][$f]['description']);
        
        }
        
        $this->assertArrayHasKey('day', $responseContent['locations'][$g]['workshops'][$f]);
        
        if ($responseContent['locations'][$g]['workshops'][$f]['day']) {
        
        $this->assertIsString($responseContent['locations'][$g]['workshops'][$f]['day']);
        
        }
        
        $this->assertArrayHasKey('begin', $responseContent['locations'][$g]['workshops'][$f]);
        
        if ($responseContent['locations'][$g]['workshops'][$f]['begin']) {
        
        $this->assertIsString($responseContent['locations'][$g]['workshops'][$f]['begin']);
        
        }
        
        $this->assertArrayHasKey('end', $responseContent['locations'][$g]['workshops'][$f]);
        
        if ($responseContent['locations'][$g]['workshops'][$f]['end']) {
        
        $this->assertIsString($responseContent['locations'][$g]['workshops'][$f]['end']);
        
        }
        
        }
        
        }
        
        }
        

    }
}