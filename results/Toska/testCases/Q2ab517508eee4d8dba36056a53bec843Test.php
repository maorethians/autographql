<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q2ab517508eee4d8dba36056a53bec843Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  conferences {\n    id\n    name\n    workshops {\n      description\n      day\n      begin\n      end\n    }\n    attendees {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    keynotes {\n      description\n      day\n      begin\n      end\n    }\n    fullTalks {\n      description\n      day\n      begin\n      end\n    }\n  }\n}","variables":null,"created_at":"2023-05-05 18:26:54","updated_at":"2023-05-05 18:26:54","times_called":1}
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
        
        $this->assertArrayHasKey('workshops', $responseContent['conferences'][$g]);
        
        if ($responseContent['conferences'][$g]['workshops']) {
        
        $this->assertIsArray($responseContent['conferences'][$g]['workshops']);
        
        for($f = 0; $f < count($responseContent['conferences'][$g]['workshops']); $f++) {
        
        $this->assertNotNull($responseContent['conferences'][$g]['workshops'][$f]);
        
        $this->assertArrayHasKey('description', $responseContent['conferences'][$g]['workshops'][$f]);
        
        if ($responseContent['conferences'][$g]['workshops'][$f]['description']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['workshops'][$f]['description']);
        
        }
        
        $this->assertArrayHasKey('day', $responseContent['conferences'][$g]['workshops'][$f]);
        
        if ($responseContent['conferences'][$g]['workshops'][$f]['day']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['workshops'][$f]['day']);
        
        }
        
        $this->assertArrayHasKey('begin', $responseContent['conferences'][$g]['workshops'][$f]);
        
        if ($responseContent['conferences'][$g]['workshops'][$f]['begin']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['workshops'][$f]['begin']);
        
        }
        
        $this->assertArrayHasKey('end', $responseContent['conferences'][$g]['workshops'][$f]);
        
        if ($responseContent['conferences'][$g]['workshops'][$f]['end']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['workshops'][$f]['end']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('attendees', $responseContent['conferences'][$g]);
        
        $this->assertNotNull($responseContent['conferences'][$g]['attendees']);
        
        $this->assertIsArray($responseContent['conferences'][$g]['attendees']);
        
        for($f = 0; $f < count($responseContent['conferences'][$g]['attendees']); $f++) {
        
        $this->assertNotNull($responseContent['conferences'][$g]['attendees'][$f]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conferences'][$g]['attendees'][$f]);
        
        if ($responseContent['conferences'][$g]['attendees'][$f]['aboutShort']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['attendees'][$f]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conferences'][$g]['attendees'][$f]);
        
        if ($responseContent['conferences'][$g]['attendees'][$f]['company']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['attendees'][$f]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conferences'][$g]['attendees'][$f]);
        
        if ($responseContent['conferences'][$g]['attendees'][$f]['tagline']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['attendees'][$f]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conferences'][$g]['attendees'][$f]);
        
        if ($responseContent['conferences'][$g]['attendees'][$f]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conferences'][$g]['attendees'][$f]['noPhotography']);
        
        }
        
        }
        
        $this->assertArrayHasKey('keynotes', $responseContent['conferences'][$g]);
        
        $this->assertNotNull($responseContent['conferences'][$g]['keynotes']);
        
        $this->assertIsArray($responseContent['conferences'][$g]['keynotes']);
        
        for($f = 0; $f < count($responseContent['conferences'][$g]['keynotes']); $f++) {
        
        $this->assertNotNull($responseContent['conferences'][$g]['keynotes'][$f]);
        
        $this->assertArrayHasKey('description', $responseContent['conferences'][$g]['keynotes'][$f]);
        
        if ($responseContent['conferences'][$g]['keynotes'][$f]['description']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['keynotes'][$f]['description']);
        
        }
        
        $this->assertArrayHasKey('day', $responseContent['conferences'][$g]['keynotes'][$f]);
        
        if ($responseContent['conferences'][$g]['keynotes'][$f]['day']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['keynotes'][$f]['day']);
        
        }
        
        $this->assertArrayHasKey('begin', $responseContent['conferences'][$g]['keynotes'][$f]);
        
        if ($responseContent['conferences'][$g]['keynotes'][$f]['begin']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['keynotes'][$f]['begin']);
        
        }
        
        $this->assertArrayHasKey('end', $responseContent['conferences'][$g]['keynotes'][$f]);
        
        if ($responseContent['conferences'][$g]['keynotes'][$f]['end']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['keynotes'][$f]['end']);
        
        }
        
        }
        
        $this->assertArrayHasKey('fullTalks', $responseContent['conferences'][$g]);
        
        $this->assertNotNull($responseContent['conferences'][$g]['fullTalks']);
        
        $this->assertIsArray($responseContent['conferences'][$g]['fullTalks']);
        
        for($f = 0; $f < count($responseContent['conferences'][$g]['fullTalks']); $f++) {
        
        $this->assertNotNull($responseContent['conferences'][$g]['fullTalks'][$f]);
        
        $this->assertArrayHasKey('description', $responseContent['conferences'][$g]['fullTalks'][$f]);
        
        if ($responseContent['conferences'][$g]['fullTalks'][$f]['description']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['fullTalks'][$f]['description']);
        
        }
        
        $this->assertArrayHasKey('day', $responseContent['conferences'][$g]['fullTalks'][$f]);
        
        if ($responseContent['conferences'][$g]['fullTalks'][$f]['day']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['fullTalks'][$f]['day']);
        
        }
        
        $this->assertArrayHasKey('begin', $responseContent['conferences'][$g]['fullTalks'][$f]);
        
        if ($responseContent['conferences'][$g]['fullTalks'][$f]['begin']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['fullTalks'][$f]['begin']);
        
        }
        
        $this->assertArrayHasKey('end', $responseContent['conferences'][$g]['fullTalks'][$f]);
        
        if ($responseContent['conferences'][$g]['fullTalks'][$f]['end']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['fullTalks'][$f]['end']);
        
        }
        
        }
        
        }
        

    }
}