<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q88c4e0b66778479bb19c63b7c16165e7Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  conferences {\n    id\n    name\n    workshops {\n      description\n      day\n      begin\n      end\n    }\n    attendees {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n  }\n}","variables":null,"created_at":"2023-05-05 18:26:43","updated_at":"2023-05-05 18:26:43","times_called":1}
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
        
        }
        

    }
}