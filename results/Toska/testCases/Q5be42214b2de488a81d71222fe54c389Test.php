<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q5be42214b2de488a81d71222fe54c389Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  conferences {\n    id\n    name\n    organizer {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    year\n  }\n}","variables":null,"created_at":"2023-05-05 18:21:38","updated_at":"2023-05-05 18:21:40","times_called":2}
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
        
        }
        

    }
}