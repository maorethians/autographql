<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q0ca40c29210243798d61bfeacdd93b3aTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  conferences {\n    id\n    name\n    series\n    allSpeakers {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    speakers {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n  }\n}","variables":null,"created_at":"2023-05-05 18:25:24","updated_at":"2023-05-05 18:25:24","times_called":1}
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
        
        $this->assertArrayHasKey('series', $responseContent['conferences'][$g]);
        
        $this->assertNotNull($responseContent['conferences'][$g]['series']);
        
        $this->assertIsString($responseContent['conferences'][$g]['series']);
        
        $this->assertArrayHasKey('allSpeakers', $responseContent['conferences'][$g]);
        
        if ($responseContent['conferences'][$g]['allSpeakers']) {
        
        $this->assertIsArray($responseContent['conferences'][$g]['allSpeakers']);
        
        for($f = 0; $f < count($responseContent['conferences'][$g]['allSpeakers']); $f++) {
        
        $this->assertNotNull($responseContent['conferences'][$g]['allSpeakers'][$f]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conferences'][$g]['allSpeakers'][$f]);
        
        if ($responseContent['conferences'][$g]['allSpeakers'][$f]['aboutShort']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['allSpeakers'][$f]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conferences'][$g]['allSpeakers'][$f]);
        
        if ($responseContent['conferences'][$g]['allSpeakers'][$f]['company']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['allSpeakers'][$f]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conferences'][$g]['allSpeakers'][$f]);
        
        if ($responseContent['conferences'][$g]['allSpeakers'][$f]['tagline']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['allSpeakers'][$f]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conferences'][$g]['allSpeakers'][$f]);
        
        if ($responseContent['conferences'][$g]['allSpeakers'][$f]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conferences'][$g]['allSpeakers'][$f]['noPhotography']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('speakers', $responseContent['conferences'][$g]);
        
        if ($responseContent['conferences'][$g]['speakers']) {
        
        $this->assertIsArray($responseContent['conferences'][$g]['speakers']);
        
        for($f = 0; $f < count($responseContent['conferences'][$g]['speakers']); $f++) {
        
        $this->assertNotNull($responseContent['conferences'][$g]['speakers'][$f]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conferences'][$g]['speakers'][$f]);
        
        if ($responseContent['conferences'][$g]['speakers'][$f]['aboutShort']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['speakers'][$f]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conferences'][$g]['speakers'][$f]);
        
        if ($responseContent['conferences'][$g]['speakers'][$f]['company']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['speakers'][$f]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conferences'][$g]['speakers'][$f]);
        
        if ($responseContent['conferences'][$g]['speakers'][$f]['tagline']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['speakers'][$f]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conferences'][$g]['speakers'][$f]);
        
        if ($responseContent['conferences'][$g]['speakers'][$f]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conferences'][$g]['speakers'][$f]['noPhotography']);
        
        }
        
        }
        
        }
        
        }
        

    }
}