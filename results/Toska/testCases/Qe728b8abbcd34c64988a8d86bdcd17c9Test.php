<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qe728b8abbcd34c64988a8d86bdcd17c9Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  conference(id: \"freezing-edge-2020\") {\n    id\n    name\n    organizer {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n  }\n}","variables":null,"created_at":"2023-05-05 18:34:49","updated_at":"2023-05-05 18:34:49","times_called":1}
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
        

    }
}