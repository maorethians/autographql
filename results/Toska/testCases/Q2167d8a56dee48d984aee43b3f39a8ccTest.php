<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q2167d8a56dee48d984aee43b3f39a8ccTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  conferences {\n    id\n    name\n    organizer {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    year\n    startDate\n    endDate\n    slogan\n    websiteUrl\n    locations {\n      name\n      about\n      city\n      address\n    }\n  }\n}","variables":null,"created_at":"2023-05-05 18:22:58","updated_at":"2023-05-05 18:23:00","times_called":2}
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
        
        $this->assertArrayHasKey('id', $responseContent['conferences'][$g]);
        
        $this->assertNotNull($responseContent['conferences'][$g]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['conferences'][$g]);
        
        $this->assertNotNull($responseContent['conferences'][$g]['name']);
        
        $this->assertIsString($responseContent['conferences'][$g]['name']);
        
        $this->assertArrayHasKey('organizer', $responseContent['conferences'][$g]);
        
        $this->assertNotNull($responseContent['conferences'][$g]['organizer']);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conferences'][$g]['organizer']);
        
        if ($responseContent['conferences'][$g]['organizer']['aboutShort']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['organizer']['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conferences'][$g]['organizer']);
        
        if ($responseContent['conferences'][$g]['organizer']['company']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['organizer']['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conferences'][$g]['organizer']);
        
        if ($responseContent['conferences'][$g]['organizer']['tagline']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['organizer']['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conferences'][$g]['organizer']);
        
        if ($responseContent['conferences'][$g]['organizer']['noPhotography']) {
        
        $this->assertIsBool($responseContent['conferences'][$g]['organizer']['noPhotography']);
        
        }
        
        $this->assertArrayHasKey('year', $responseContent['conferences'][$g]);
        
        $this->assertNotNull($responseContent['conferences'][$g]['year']);
        
        $this->assertIsString($responseContent['conferences'][$g]['year']);
        
        $this->assertArrayHasKey('startDate', $responseContent['conferences'][$g]);
        
        $this->assertNotNull($responseContent['conferences'][$g]['startDate']);
        
        $this->assertIsString($responseContent['conferences'][$g]['startDate']);
        
        $this->assertArrayHasKey('endDate', $responseContent['conferences'][$g]);
        
        $this->assertNotNull($responseContent['conferences'][$g]['endDate']);
        
        $this->assertIsString($responseContent['conferences'][$g]['endDate']);
        
        $this->assertArrayHasKey('slogan', $responseContent['conferences'][$g]);
        
        $this->assertNotNull($responseContent['conferences'][$g]['slogan']);
        
        $this->assertIsString($responseContent['conferences'][$g]['slogan']);
        
        $this->assertArrayHasKey('websiteUrl', $responseContent['conferences'][$g]);
        
        $this->assertNotNull($responseContent['conferences'][$g]['websiteUrl']);
        
        $this->assertIsString($responseContent['conferences'][$g]['websiteUrl']);
        
        $this->assertArrayHasKey('locations', $responseContent['conferences'][$g]);
        
        if ($responseContent['conferences'][$g]['locations']) {
        
        $this->assertIsArray($responseContent['conferences'][$g]['locations']);
        
        for($f = 0; $f < count($responseContent['conferences'][$g]['locations']); $f++) {
        
        $this->assertNotNull($responseContent['conferences'][$g]['locations'][$f]);
        
        $this->assertArrayHasKey('name', $responseContent['conferences'][$g]['locations'][$f]);
        
        if ($responseContent['conferences'][$g]['locations'][$f]['name']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['locations'][$f]['name']);
        
        }
        
        $this->assertArrayHasKey('about', $responseContent['conferences'][$g]['locations'][$f]);
        
        if ($responseContent['conferences'][$g]['locations'][$f]['about']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['locations'][$f]['about']);
        
        }
        
        $this->assertArrayHasKey('city', $responseContent['conferences'][$g]['locations'][$f]);
        
        if ($responseContent['conferences'][$g]['locations'][$f]['city']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['locations'][$f]['city']);
        
        }
        
        $this->assertArrayHasKey('address', $responseContent['conferences'][$g]['locations'][$f]);
        
        if ($responseContent['conferences'][$g]['locations'][$f]['address']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['locations'][$f]['address']);
        
        }
        
        }
        
        }
        
        }
        

    }
}