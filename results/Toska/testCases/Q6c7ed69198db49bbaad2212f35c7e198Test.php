<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q6c7ed69198db49bbaad2212f35c7e198Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  people {\n    firstName\n    name\n    keywords\n    location {\n      name\n      about\n      city\n      address\n    }\n    talks {\n      description\n      day\n      begin\n      end\n    }\n    workshops {\n      description\n      day\n      begin\n      end\n    }\n  }\n}\n","variables":null,"created_at":"2023-05-05 18:42:37","updated_at":"2023-05-05 18:42:37","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:3000/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('people', $responseContent);
        
        $this->assertNotNull($responseContent['people']);
        
        $this->assertIsArray($responseContent['people']);
        
        for($g = 0; $g < count($responseContent['people']); $g++) {
        
        $this->assertNotNull($responseContent['people'][$g]);
        
        $this->assertArrayHasKey('firstName', $responseContent['people'][$g]);
        
        $this->assertNotNull($responseContent['people'][$g]['firstName']);
        
        $this->assertIsString($responseContent['people'][$g]['firstName']);
        
        $this->assertArrayHasKey('name', $responseContent['people'][$g]);
        
        $this->assertNotNull($responseContent['people'][$g]['name']);
        
        $this->assertIsString($responseContent['people'][$g]['name']);
        
        $this->assertArrayHasKey('keywords', $responseContent['people'][$g]);
        
        if ($responseContent['people'][$g]['keywords']) {
        
        $this->assertIsArray($responseContent['people'][$g]['keywords']);
        
        for($f = 0; $f < count($responseContent['people'][$g]['keywords']); $f++) {
        
        $this->assertNotNull($responseContent['people'][$g]['keywords'][$f]);
        
        $this->assertIsString($responseContent['people'][$g]['keywords'][$f]);
        
        }
        
        }
        
        $this->assertArrayHasKey('location', $responseContent['people'][$g]);
        
        $this->assertNotNull($responseContent['people'][$g]['location']);
        
        $this->assertArrayHasKey('name', $responseContent['people'][$g]['location']);
        
        if ($responseContent['people'][$g]['location']['name']) {
        
        $this->assertIsString($responseContent['people'][$g]['location']['name']);
        
        }
        
        $this->assertArrayHasKey('about', $responseContent['people'][$g]['location']);
        
        if ($responseContent['people'][$g]['location']['about']) {
        
        $this->assertIsString($responseContent['people'][$g]['location']['about']);
        
        }
        
        $this->assertArrayHasKey('city', $responseContent['people'][$g]['location']);
        
        if ($responseContent['people'][$g]['location']['city']) {
        
        $this->assertIsString($responseContent['people'][$g]['location']['city']);
        
        }
        
        $this->assertArrayHasKey('address', $responseContent['people'][$g]['location']);
        
        if ($responseContent['people'][$g]['location']['address']) {
        
        $this->assertIsString($responseContent['people'][$g]['location']['address']);
        
        }
        
        $this->assertArrayHasKey('talks', $responseContent['people'][$g]);
        
        if ($responseContent['people'][$g]['talks']) {
        
        $this->assertIsArray($responseContent['people'][$g]['talks']);
        
        for($f = 0; $f < count($responseContent['people'][$g]['talks']); $f++) {
        
        $this->assertNotNull($responseContent['people'][$g]['talks'][$f]);
        
        $this->assertArrayHasKey('description', $responseContent['people'][$g]['talks'][$f]);
        
        if ($responseContent['people'][$g]['talks'][$f]['description']) {
        
        $this->assertIsString($responseContent['people'][$g]['talks'][$f]['description']);
        
        }
        
        $this->assertArrayHasKey('day', $responseContent['people'][$g]['talks'][$f]);
        
        if ($responseContent['people'][$g]['talks'][$f]['day']) {
        
        $this->assertIsString($responseContent['people'][$g]['talks'][$f]['day']);
        
        }
        
        $this->assertArrayHasKey('begin', $responseContent['people'][$g]['talks'][$f]);
        
        if ($responseContent['people'][$g]['talks'][$f]['begin']) {
        
        $this->assertIsString($responseContent['people'][$g]['talks'][$f]['begin']);
        
        }
        
        $this->assertArrayHasKey('end', $responseContent['people'][$g]['talks'][$f]);
        
        if ($responseContent['people'][$g]['talks'][$f]['end']) {
        
        $this->assertIsString($responseContent['people'][$g]['talks'][$f]['end']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('workshops', $responseContent['people'][$g]);
        
        if ($responseContent['people'][$g]['workshops']) {
        
        $this->assertIsArray($responseContent['people'][$g]['workshops']);
        
        for($f = 0; $f < count($responseContent['people'][$g]['workshops']); $f++) {
        
        $this->assertNotNull($responseContent['people'][$g]['workshops'][$f]);
        
        $this->assertArrayHasKey('description', $responseContent['people'][$g]['workshops'][$f]);
        
        if ($responseContent['people'][$g]['workshops'][$f]['description']) {
        
        $this->assertIsString($responseContent['people'][$g]['workshops'][$f]['description']);
        
        }
        
        $this->assertArrayHasKey('day', $responseContent['people'][$g]['workshops'][$f]);
        
        if ($responseContent['people'][$g]['workshops'][$f]['day']) {
        
        $this->assertIsString($responseContent['people'][$g]['workshops'][$f]['day']);
        
        }
        
        $this->assertArrayHasKey('begin', $responseContent['people'][$g]['workshops'][$f]);
        
        if ($responseContent['people'][$g]['workshops'][$f]['begin']) {
        
        $this->assertIsString($responseContent['people'][$g]['workshops'][$f]['begin']);
        
        }
        
        $this->assertArrayHasKey('end', $responseContent['people'][$g]['workshops'][$f]);
        
        if ($responseContent['people'][$g]['workshops'][$f]['end']) {
        
        $this->assertIsString($responseContent['people'][$g]['workshops'][$f]['end']);
        
        }
        
        }
        
        }
        
        }
        

    }
}