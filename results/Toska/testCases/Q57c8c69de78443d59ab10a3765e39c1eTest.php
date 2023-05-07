<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q57c8c69de78443d59ab10a3765e39c1eTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  conference(id: \"freezing-edge-2020\") {\n    id\n    name\n    talks {\n      description\n      day\n      begin\n      end\n    }\n    workshops {\n      description\n      day\n      begin\n      end\n    }\n    attendees {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    keynotes {\n      description\n      day\n      begin\n      end\n    }\n    \n  }\n}","variables":null,"created_at":"2023-05-05 18:37:38","updated_at":"2023-05-05 18:37:38","times_called":1}
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
        
        $this->assertArrayHasKey('talks', $responseContent['conference']);
        
        if ($responseContent['conference']['talks']) {
        
        $this->assertIsArray($responseContent['conference']['talks']);
        
        for($g = 0; $g < count($responseContent['conference']['talks']); $g++) {
        
        $this->assertNotNull($responseContent['conference']['talks'][$g]);
        
        $this->assertArrayHasKey('description', $responseContent['conference']['talks'][$g]);
        
        if ($responseContent['conference']['talks'][$g]['description']) {
        
        $this->assertIsString($responseContent['conference']['talks'][$g]['description']);
        
        }
        
        $this->assertArrayHasKey('day', $responseContent['conference']['talks'][$g]);
        
        if ($responseContent['conference']['talks'][$g]['day']) {
        
        $this->assertIsString($responseContent['conference']['talks'][$g]['day']);
        
        }
        
        $this->assertArrayHasKey('begin', $responseContent['conference']['talks'][$g]);
        
        if ($responseContent['conference']['talks'][$g]['begin']) {
        
        $this->assertIsString($responseContent['conference']['talks'][$g]['begin']);
        
        }
        
        $this->assertArrayHasKey('end', $responseContent['conference']['talks'][$g]);
        
        if ($responseContent['conference']['talks'][$g]['end']) {
        
        $this->assertIsString($responseContent['conference']['talks'][$g]['end']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('workshops', $responseContent['conference']);
        
        if ($responseContent['conference']['workshops']) {
        
        $this->assertIsArray($responseContent['conference']['workshops']);
        
        for($g = 0; $g < count($responseContent['conference']['workshops']); $g++) {
        
        $this->assertNotNull($responseContent['conference']['workshops'][$g]);
        
        $this->assertArrayHasKey('description', $responseContent['conference']['workshops'][$g]);
        
        if ($responseContent['conference']['workshops'][$g]['description']) {
        
        $this->assertIsString($responseContent['conference']['workshops'][$g]['description']);
        
        }
        
        $this->assertArrayHasKey('day', $responseContent['conference']['workshops'][$g]);
        
        if ($responseContent['conference']['workshops'][$g]['day']) {
        
        $this->assertIsString($responseContent['conference']['workshops'][$g]['day']);
        
        }
        
        $this->assertArrayHasKey('begin', $responseContent['conference']['workshops'][$g]);
        
        if ($responseContent['conference']['workshops'][$g]['begin']) {
        
        $this->assertIsString($responseContent['conference']['workshops'][$g]['begin']);
        
        }
        
        $this->assertArrayHasKey('end', $responseContent['conference']['workshops'][$g]);
        
        if ($responseContent['conference']['workshops'][$g]['end']) {
        
        $this->assertIsString($responseContent['conference']['workshops'][$g]['end']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('attendees', $responseContent['conference']);
        
        $this->assertNotNull($responseContent['conference']['attendees']);
        
        $this->assertIsArray($responseContent['conference']['attendees']);
        
        for($g = 0; $g < count($responseContent['conference']['attendees']); $g++) {
        
        $this->assertNotNull($responseContent['conference']['attendees'][$g]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conference']['attendees'][$g]);
        
        if ($responseContent['conference']['attendees'][$g]['aboutShort']) {
        
        $this->assertIsString($responseContent['conference']['attendees'][$g]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conference']['attendees'][$g]);
        
        if ($responseContent['conference']['attendees'][$g]['company']) {
        
        $this->assertIsString($responseContent['conference']['attendees'][$g]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conference']['attendees'][$g]);
        
        if ($responseContent['conference']['attendees'][$g]['tagline']) {
        
        $this->assertIsString($responseContent['conference']['attendees'][$g]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conference']['attendees'][$g]);
        
        if ($responseContent['conference']['attendees'][$g]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conference']['attendees'][$g]['noPhotography']);
        
        }
        
        }
        
        $this->assertArrayHasKey('keynotes', $responseContent['conference']);
        
        $this->assertNotNull($responseContent['conference']['keynotes']);
        
        $this->assertIsArray($responseContent['conference']['keynotes']);
        
        for($g = 0; $g < count($responseContent['conference']['keynotes']); $g++) {
        
        $this->assertNotNull($responseContent['conference']['keynotes'][$g]);
        
        $this->assertArrayHasKey('description', $responseContent['conference']['keynotes'][$g]);
        
        if ($responseContent['conference']['keynotes'][$g]['description']) {
        
        $this->assertIsString($responseContent['conference']['keynotes'][$g]['description']);
        
        }
        
        $this->assertArrayHasKey('day', $responseContent['conference']['keynotes'][$g]);
        
        if ($responseContent['conference']['keynotes'][$g]['day']) {
        
        $this->assertIsString($responseContent['conference']['keynotes'][$g]['day']);
        
        }
        
        $this->assertArrayHasKey('begin', $responseContent['conference']['keynotes'][$g]);
        
        if ($responseContent['conference']['keynotes'][$g]['begin']) {
        
        $this->assertIsString($responseContent['conference']['keynotes'][$g]['begin']);
        
        }
        
        $this->assertArrayHasKey('end', $responseContent['conference']['keynotes'][$g]);
        
        if ($responseContent['conference']['keynotes'][$g]['end']) {
        
        $this->assertIsString($responseContent['conference']['keynotes'][$g]['end']);
        
        }
        
        }
        

    }
}