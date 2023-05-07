<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q2617ad49a497405aa741a7c34765cce2Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  conference(id: \"freezing-edge-2020\") {\n    id\n    name\n    organizer {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    year\n    startDate\n    endDate\n    slogan\n    websiteUrl\n    locations {\n      name\n      about\n      city\n      address\n    }\n    mcs {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    partners {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    sponsors {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    goldSponsors {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    silverSponsors {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n  }\n}","variables":null,"created_at":"2023-05-05 18:35:44","updated_at":"2023-05-05 18:35:44","times_called":1}
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
        
        $this->assertArrayHasKey('mcs', $responseContent['conference']);
        
        if ($responseContent['conference']['mcs']) {
        
        $this->assertIsArray($responseContent['conference']['mcs']);
        
        for($g = 0; $g < count($responseContent['conference']['mcs']); $g++) {
        
        $this->assertNotNull($responseContent['conference']['mcs'][$g]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conference']['mcs'][$g]);
        
        if ($responseContent['conference']['mcs'][$g]['aboutShort']) {
        
        $this->assertIsString($responseContent['conference']['mcs'][$g]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conference']['mcs'][$g]);
        
        if ($responseContent['conference']['mcs'][$g]['company']) {
        
        $this->assertIsString($responseContent['conference']['mcs'][$g]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conference']['mcs'][$g]);
        
        if ($responseContent['conference']['mcs'][$g]['tagline']) {
        
        $this->assertIsString($responseContent['conference']['mcs'][$g]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conference']['mcs'][$g]);
        
        if ($responseContent['conference']['mcs'][$g]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conference']['mcs'][$g]['noPhotography']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('partners', $responseContent['conference']);
        
        if ($responseContent['conference']['partners']) {
        
        $this->assertIsArray($responseContent['conference']['partners']);
        
        for($g = 0; $g < count($responseContent['conference']['partners']); $g++) {
        
        $this->assertNotNull($responseContent['conference']['partners'][$g]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conference']['partners'][$g]);
        
        if ($responseContent['conference']['partners'][$g]['aboutShort']) {
        
        $this->assertIsString($responseContent['conference']['partners'][$g]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conference']['partners'][$g]);
        
        if ($responseContent['conference']['partners'][$g]['company']) {
        
        $this->assertIsString($responseContent['conference']['partners'][$g]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conference']['partners'][$g]);
        
        if ($responseContent['conference']['partners'][$g]['tagline']) {
        
        $this->assertIsString($responseContent['conference']['partners'][$g]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conference']['partners'][$g]);
        
        if ($responseContent['conference']['partners'][$g]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conference']['partners'][$g]['noPhotography']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('sponsors', $responseContent['conference']);
        
        $this->assertNotNull($responseContent['conference']['sponsors']);
        
        $this->assertIsArray($responseContent['conference']['sponsors']);
        
        for($g = 0; $g < count($responseContent['conference']['sponsors']); $g++) {
        
        $this->assertNotNull($responseContent['conference']['sponsors'][$g]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conference']['sponsors'][$g]);
        
        if ($responseContent['conference']['sponsors'][$g]['aboutShort']) {
        
        $this->assertIsString($responseContent['conference']['sponsors'][$g]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conference']['sponsors'][$g]);
        
        if ($responseContent['conference']['sponsors'][$g]['company']) {
        
        $this->assertIsString($responseContent['conference']['sponsors'][$g]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conference']['sponsors'][$g]);
        
        if ($responseContent['conference']['sponsors'][$g]['tagline']) {
        
        $this->assertIsString($responseContent['conference']['sponsors'][$g]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conference']['sponsors'][$g]);
        
        if ($responseContent['conference']['sponsors'][$g]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conference']['sponsors'][$g]['noPhotography']);
        
        }
        
        }
        
        $this->assertArrayHasKey('goldSponsors', $responseContent['conference']);
        
        if ($responseContent['conference']['goldSponsors']) {
        
        $this->assertIsArray($responseContent['conference']['goldSponsors']);
        
        for($g = 0; $g < count($responseContent['conference']['goldSponsors']); $g++) {
        
        $this->assertNotNull($responseContent['conference']['goldSponsors'][$g]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conference']['goldSponsors'][$g]);
        
        if ($responseContent['conference']['goldSponsors'][$g]['aboutShort']) {
        
        $this->assertIsString($responseContent['conference']['goldSponsors'][$g]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conference']['goldSponsors'][$g]);
        
        if ($responseContent['conference']['goldSponsors'][$g]['company']) {
        
        $this->assertIsString($responseContent['conference']['goldSponsors'][$g]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conference']['goldSponsors'][$g]);
        
        if ($responseContent['conference']['goldSponsors'][$g]['tagline']) {
        
        $this->assertIsString($responseContent['conference']['goldSponsors'][$g]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conference']['goldSponsors'][$g]);
        
        if ($responseContent['conference']['goldSponsors'][$g]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conference']['goldSponsors'][$g]['noPhotography']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('silverSponsors', $responseContent['conference']);
        
        if ($responseContent['conference']['silverSponsors']) {
        
        $this->assertIsArray($responseContent['conference']['silverSponsors']);
        
        for($g = 0; $g < count($responseContent['conference']['silverSponsors']); $g++) {
        
        $this->assertNotNull($responseContent['conference']['silverSponsors'][$g]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conference']['silverSponsors'][$g]);
        
        if ($responseContent['conference']['silverSponsors'][$g]['aboutShort']) {
        
        $this->assertIsString($responseContent['conference']['silverSponsors'][$g]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conference']['silverSponsors'][$g]);
        
        if ($responseContent['conference']['silverSponsors'][$g]['company']) {
        
        $this->assertIsString($responseContent['conference']['silverSponsors'][$g]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conference']['silverSponsors'][$g]);
        
        if ($responseContent['conference']['silverSponsors'][$g]['tagline']) {
        
        $this->assertIsString($responseContent['conference']['silverSponsors'][$g]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conference']['silverSponsors'][$g]);
        
        if ($responseContent['conference']['silverSponsors'][$g]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conference']['silverSponsors'][$g]['noPhotography']);
        
        }
        
        }
        
        }
        

    }
}