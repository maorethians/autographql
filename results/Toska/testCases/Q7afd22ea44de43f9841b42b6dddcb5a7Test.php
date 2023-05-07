<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q7afd22ea44de43f9841b42b6dddcb5a7Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  conferences {\n    id\n    name\n    organizer {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    year\n    startDate\n    endDate\n    slogan\n    websiteUrl\n    locations {\n      name\n      about\n      city\n      address\n    }\n    organizers {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    mcs {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    partners {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    sponsors {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    goldSponsors {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    silverSponsors {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n  }\n}","variables":null,"created_at":"2023-05-05 18:24:16","updated_at":"2023-05-05 18:24:16","times_called":1}
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
        
        $this->assertArrayHasKey('organizers', $responseContent['conferences'][$g]);
        
        $this->assertNotNull($responseContent['conferences'][$g]['organizers']);
        
        $this->assertIsArray($responseContent['conferences'][$g]['organizers']);
        
        for($f = 0; $f < count($responseContent['conferences'][$g]['organizers']); $f++) {
        
        $this->assertNotNull($responseContent['conferences'][$g]['organizers'][$f]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conferences'][$g]['organizers'][$f]);
        
        if ($responseContent['conferences'][$g]['organizers'][$f]['aboutShort']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['organizers'][$f]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conferences'][$g]['organizers'][$f]);
        
        if ($responseContent['conferences'][$g]['organizers'][$f]['company']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['organizers'][$f]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conferences'][$g]['organizers'][$f]);
        
        if ($responseContent['conferences'][$g]['organizers'][$f]['tagline']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['organizers'][$f]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conferences'][$g]['organizers'][$f]);
        
        if ($responseContent['conferences'][$g]['organizers'][$f]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conferences'][$g]['organizers'][$f]['noPhotography']);
        
        }
        
        }
        
        $this->assertArrayHasKey('mcs', $responseContent['conferences'][$g]);
        
        if ($responseContent['conferences'][$g]['mcs']) {
        
        $this->assertIsArray($responseContent['conferences'][$g]['mcs']);
        
        for($f = 0; $f < count($responseContent['conferences'][$g]['mcs']); $f++) {
        
        $this->assertNotNull($responseContent['conferences'][$g]['mcs'][$f]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conferences'][$g]['mcs'][$f]);
        
        if ($responseContent['conferences'][$g]['mcs'][$f]['aboutShort']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['mcs'][$f]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conferences'][$g]['mcs'][$f]);
        
        if ($responseContent['conferences'][$g]['mcs'][$f]['company']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['mcs'][$f]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conferences'][$g]['mcs'][$f]);
        
        if ($responseContent['conferences'][$g]['mcs'][$f]['tagline']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['mcs'][$f]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conferences'][$g]['mcs'][$f]);
        
        if ($responseContent['conferences'][$g]['mcs'][$f]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conferences'][$g]['mcs'][$f]['noPhotography']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('partners', $responseContent['conferences'][$g]);
        
        if ($responseContent['conferences'][$g]['partners']) {
        
        $this->assertIsArray($responseContent['conferences'][$g]['partners']);
        
        for($f = 0; $f < count($responseContent['conferences'][$g]['partners']); $f++) {
        
        $this->assertNotNull($responseContent['conferences'][$g]['partners'][$f]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conferences'][$g]['partners'][$f]);
        
        if ($responseContent['conferences'][$g]['partners'][$f]['aboutShort']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['partners'][$f]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conferences'][$g]['partners'][$f]);
        
        if ($responseContent['conferences'][$g]['partners'][$f]['company']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['partners'][$f]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conferences'][$g]['partners'][$f]);
        
        if ($responseContent['conferences'][$g]['partners'][$f]['tagline']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['partners'][$f]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conferences'][$g]['partners'][$f]);
        
        if ($responseContent['conferences'][$g]['partners'][$f]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conferences'][$g]['partners'][$f]['noPhotography']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('sponsors', $responseContent['conferences'][$g]);
        
        $this->assertNotNull($responseContent['conferences'][$g]['sponsors']);
        
        $this->assertIsArray($responseContent['conferences'][$g]['sponsors']);
        
        for($f = 0; $f < count($responseContent['conferences'][$g]['sponsors']); $f++) {
        
        $this->assertNotNull($responseContent['conferences'][$g]['sponsors'][$f]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conferences'][$g]['sponsors'][$f]);
        
        if ($responseContent['conferences'][$g]['sponsors'][$f]['aboutShort']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['sponsors'][$f]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conferences'][$g]['sponsors'][$f]);
        
        if ($responseContent['conferences'][$g]['sponsors'][$f]['company']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['sponsors'][$f]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conferences'][$g]['sponsors'][$f]);
        
        if ($responseContent['conferences'][$g]['sponsors'][$f]['tagline']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['sponsors'][$f]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conferences'][$g]['sponsors'][$f]);
        
        if ($responseContent['conferences'][$g]['sponsors'][$f]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conferences'][$g]['sponsors'][$f]['noPhotography']);
        
        }
        
        }
        
        $this->assertArrayHasKey('goldSponsors', $responseContent['conferences'][$g]);
        
        if ($responseContent['conferences'][$g]['goldSponsors']) {
        
        $this->assertIsArray($responseContent['conferences'][$g]['goldSponsors']);
        
        for($f = 0; $f < count($responseContent['conferences'][$g]['goldSponsors']); $f++) {
        
        $this->assertNotNull($responseContent['conferences'][$g]['goldSponsors'][$f]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conferences'][$g]['goldSponsors'][$f]);
        
        if ($responseContent['conferences'][$g]['goldSponsors'][$f]['aboutShort']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['goldSponsors'][$f]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conferences'][$g]['goldSponsors'][$f]);
        
        if ($responseContent['conferences'][$g]['goldSponsors'][$f]['company']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['goldSponsors'][$f]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conferences'][$g]['goldSponsors'][$f]);
        
        if ($responseContent['conferences'][$g]['goldSponsors'][$f]['tagline']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['goldSponsors'][$f]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conferences'][$g]['goldSponsors'][$f]);
        
        if ($responseContent['conferences'][$g]['goldSponsors'][$f]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conferences'][$g]['goldSponsors'][$f]['noPhotography']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('silverSponsors', $responseContent['conferences'][$g]);
        
        if ($responseContent['conferences'][$g]['silverSponsors']) {
        
        $this->assertIsArray($responseContent['conferences'][$g]['silverSponsors']);
        
        for($f = 0; $f < count($responseContent['conferences'][$g]['silverSponsors']); $f++) {
        
        $this->assertNotNull($responseContent['conferences'][$g]['silverSponsors'][$f]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conferences'][$g]['silverSponsors'][$f]);
        
        if ($responseContent['conferences'][$g]['silverSponsors'][$f]['aboutShort']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['silverSponsors'][$f]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conferences'][$g]['silverSponsors'][$f]);
        
        if ($responseContent['conferences'][$g]['silverSponsors'][$f]['company']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['silverSponsors'][$f]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conferences'][$g]['silverSponsors'][$f]);
        
        if ($responseContent['conferences'][$g]['silverSponsors'][$f]['tagline']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['silverSponsors'][$f]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conferences'][$g]['silverSponsors'][$f]);
        
        if ($responseContent['conferences'][$g]['silverSponsors'][$f]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conferences'][$g]['silverSponsors'][$f]['noPhotography']);
        
        }
        
        }
        
        }
        
        }
        

    }
}