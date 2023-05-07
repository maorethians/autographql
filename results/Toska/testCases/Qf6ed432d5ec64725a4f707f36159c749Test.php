<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qf6ed432d5ec64725a4f707f36159c749Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  conference(id: \"freezing-edge-2020\") {\n    id\n    name\n    organizer {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    year\n    startDate\n    endDate\n    slogan\n    websiteUrl\n    locations {\n      name\n      about\n      city\n      address\n    }\n  }\n}","variables":null,"created_at":"2023-05-05 18:35:15","updated_at":"2023-05-05 18:35:15","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:3000/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('conference', $responseContent);
        
        $this->assertNotNull($responseContent['conference']);
        
        $this->assertArrayHasKey('id', $responseContent['conference']);
        
        $this->assertNotNull($responseContent['conference']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['conference']);
        
        $this->assertNotNull($responseContent['conference']['name']);
        
        $this->assertIsString($responseContent['conference']['name']);
        
        $this->assertArrayHasKey('organizer', $responseContent['conference']);
        
        $this->assertNotNull($responseContent['conference']['organizer']);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conference']['organizer']);
        
        if ($responseContent['conference']['organizer']['aboutShort']) {
        
        $this->assertIsString($responseContent['conference']['organizer']['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conference']['organizer']);
        
        if ($responseContent['conference']['organizer']['company']) {
        
        $this->assertIsString($responseContent['conference']['organizer']['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conference']['organizer']);
        
        if ($responseContent['conference']['organizer']['tagline']) {
        
        $this->assertIsString($responseContent['conference']['organizer']['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conference']['organizer']);
        
        if ($responseContent['conference']['organizer']['noPhotography']) {
        
        $this->assertIsBool($responseContent['conference']['organizer']['noPhotography']);
        
        }
        
        $this->assertArrayHasKey('year', $responseContent['conference']);
        
        $this->assertNotNull($responseContent['conference']['year']);
        
        $this->assertIsString($responseContent['conference']['year']);
        
        $this->assertArrayHasKey('startDate', $responseContent['conference']);
        
        $this->assertNotNull($responseContent['conference']['startDate']);
        
        $this->assertIsString($responseContent['conference']['startDate']);
        
        $this->assertArrayHasKey('endDate', $responseContent['conference']);
        
        $this->assertNotNull($responseContent['conference']['endDate']);
        
        $this->assertIsString($responseContent['conference']['endDate']);
        
        $this->assertArrayHasKey('slogan', $responseContent['conference']);
        
        $this->assertNotNull($responseContent['conference']['slogan']);
        
        $this->assertIsString($responseContent['conference']['slogan']);
        
        $this->assertArrayHasKey('websiteUrl', $responseContent['conference']);
        
        $this->assertNotNull($responseContent['conference']['websiteUrl']);
        
        $this->assertIsString($responseContent['conference']['websiteUrl']);
        
        $this->assertArrayHasKey('locations', $responseContent['conference']);
        
        if ($responseContent['conference']['locations']) {
        
        $this->assertIsArray($responseContent['conference']['locations']);
        
        for($g = 0; $g < count($responseContent['conference']['locations']); $g++) {
        
        $this->assertNotNull($responseContent['conference']['locations'][$g]);
        
        $this->assertArrayHasKey('name', $responseContent['conference']['locations'][$g]);
        
        if ($responseContent['conference']['locations'][$g]['name']) {
        
        $this->assertIsString($responseContent['conference']['locations'][$g]['name']);
        
        }
        
        $this->assertArrayHasKey('about', $responseContent['conference']['locations'][$g]);
        
        if ($responseContent['conference']['locations'][$g]['about']) {
        
        $this->assertIsString($responseContent['conference']['locations'][$g]['about']);
        
        }
        
        $this->assertArrayHasKey('city', $responseContent['conference']['locations'][$g]);
        
        if ($responseContent['conference']['locations'][$g]['city']) {
        
        $this->assertIsString($responseContent['conference']['locations'][$g]['city']);
        
        }
        
        $this->assertArrayHasKey('address', $responseContent['conference']['locations'][$g]);
        
        if ($responseContent['conference']['locations'][$g]['address']) {
        
        $this->assertIsString($responseContent['conference']['locations'][$g]['address']);
        
        }
        
        }
        
        }
        

    }
}