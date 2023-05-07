<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qad4bdd1ee5294a8a8fe8da9a6e054dbaTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  conference(id: \"freezing-edge-2020\") {\n    id\n    name\n    workshopInstructors {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n  }\n}","variables":null,"created_at":"2023-05-05 18:40:07","updated_at":"2023-05-05 18:40:07","times_called":1}
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
        
        $this->assertArrayHasKey('workshopInstructors', $responseContent['conference']);
        
        if ($responseContent['conference']['workshopInstructors']) {
        
        $this->assertIsArray($responseContent['conference']['workshopInstructors']);
        
        for($g = 0; $g < count($responseContent['conference']['workshopInstructors']); $g++) {
        
        $this->assertNotNull($responseContent['conference']['workshopInstructors'][$g]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conference']['workshopInstructors'][$g]);
        
        if ($responseContent['conference']['workshopInstructors'][$g]['aboutShort']) {
        
        $this->assertIsString($responseContent['conference']['workshopInstructors'][$g]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conference']['workshopInstructors'][$g]);
        
        if ($responseContent['conference']['workshopInstructors'][$g]['company']) {
        
        $this->assertIsString($responseContent['conference']['workshopInstructors'][$g]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conference']['workshopInstructors'][$g]);
        
        if ($responseContent['conference']['workshopInstructors'][$g]['tagline']) {
        
        $this->assertIsString($responseContent['conference']['workshopInstructors'][$g]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conference']['workshopInstructors'][$g]);
        
        if ($responseContent['conference']['workshopInstructors'][$g]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conference']['workshopInstructors'][$g]['noPhotography']);
        
        }
        
        }
        
        }
        

    }
}