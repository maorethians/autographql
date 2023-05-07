<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qe8e74cdeeff340d09ca22f715bc09b0aTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  sponsors {\n    firstName\n    lastName\n    name\n    keywords\n    location {\n      name\n      about\n      city\n      address\n    }\n    talks {\n      description\n      day\n      begin\n      end\n    }\n    workshops {\n      description\n      day\n      begin\n      end\n    }\n    noPhotography\n  }\n}\n","variables":null,"created_at":"2023-05-05 18:50:48","updated_at":"2023-05-05 18:56:06","times_called":2}
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
        
        $this->assertArrayHasKey('keywords', $responseContent['sponsors'][$g]);
        
        if ($responseContent['sponsors'][$g]['keywords']) {
        
        $this->assertIsArray($responseContent['sponsors'][$g]['keywords']);
        
        for($f = 0; $f < count($responseContent['sponsors'][$g]['keywords']); $f++) {
        
        $this->assertNotNull($responseContent['sponsors'][$g]['keywords'][$f]);
        
        $this->assertIsString($responseContent['sponsors'][$g]['keywords'][$f]);
        
        }
        
        }
        
        $this->assertArrayHasKey('location', $responseContent['sponsors'][$g]);
        
        $this->assertNotNull($responseContent['sponsors'][$g]['location']);
        
        $this->assertArrayHasKey('name', $responseContent['sponsors'][$g]['location']);
        
        if ($responseContent['sponsors'][$g]['location']['name']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['location']['name']);
        
        }
        
        $this->assertArrayHasKey('about', $responseContent['sponsors'][$g]['location']);
        
        if ($responseContent['sponsors'][$g]['location']['about']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['location']['about']);
        
        }
        
        $this->assertArrayHasKey('city', $responseContent['sponsors'][$g]['location']);
        
        if ($responseContent['sponsors'][$g]['location']['city']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['location']['city']);
        
        }
        
        $this->assertArrayHasKey('address', $responseContent['sponsors'][$g]['location']);
        
        if ($responseContent['sponsors'][$g]['location']['address']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['location']['address']);
        
        }
        
        $this->assertArrayHasKey('talks', $responseContent['sponsors'][$g]);
        
        if ($responseContent['sponsors'][$g]['talks']) {
        
        $this->assertIsArray($responseContent['sponsors'][$g]['talks']);
        
        for($f = 0; $f < count($responseContent['sponsors'][$g]['talks']); $f++) {
        
        $this->assertNotNull($responseContent['sponsors'][$g]['talks'][$f]);
        
        $this->assertArrayHasKey('description', $responseContent['sponsors'][$g]['talks'][$f]);
        
        if ($responseContent['sponsors'][$g]['talks'][$f]['description']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['talks'][$f]['description']);
        
        }
        
        $this->assertArrayHasKey('day', $responseContent['sponsors'][$g]['talks'][$f]);
        
        if ($responseContent['sponsors'][$g]['talks'][$f]['day']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['talks'][$f]['day']);
        
        }
        
        $this->assertArrayHasKey('begin', $responseContent['sponsors'][$g]['talks'][$f]);
        
        if ($responseContent['sponsors'][$g]['talks'][$f]['begin']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['talks'][$f]['begin']);
        
        }
        
        $this->assertArrayHasKey('end', $responseContent['sponsors'][$g]['talks'][$f]);
        
        if ($responseContent['sponsors'][$g]['talks'][$f]['end']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['talks'][$f]['end']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('workshops', $responseContent['sponsors'][$g]);
        
        if ($responseContent['sponsors'][$g]['workshops']) {
        
        $this->assertIsArray($responseContent['sponsors'][$g]['workshops']);
        
        for($f = 0; $f < count($responseContent['sponsors'][$g]['workshops']); $f++) {
        
        $this->assertNotNull($responseContent['sponsors'][$g]['workshops'][$f]);
        
        $this->assertArrayHasKey('description', $responseContent['sponsors'][$g]['workshops'][$f]);
        
        if ($responseContent['sponsors'][$g]['workshops'][$f]['description']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['workshops'][$f]['description']);
        
        }
        
        $this->assertArrayHasKey('day', $responseContent['sponsors'][$g]['workshops'][$f]);
        
        if ($responseContent['sponsors'][$g]['workshops'][$f]['day']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['workshops'][$f]['day']);
        
        }
        
        $this->assertArrayHasKey('begin', $responseContent['sponsors'][$g]['workshops'][$f]);
        
        if ($responseContent['sponsors'][$g]['workshops'][$f]['begin']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['workshops'][$f]['begin']);
        
        }
        
        $this->assertArrayHasKey('end', $responseContent['sponsors'][$g]['workshops'][$f]);
        
        if ($responseContent['sponsors'][$g]['workshops'][$f]['end']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['workshops'][$f]['end']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['sponsors'][$g]);
        
        if ($responseContent['sponsors'][$g]['noPhotography']) {
        
        $this->assertIsBool($responseContent['sponsors'][$g]['noPhotography']);
        
        }
        
        }
        

    }
}