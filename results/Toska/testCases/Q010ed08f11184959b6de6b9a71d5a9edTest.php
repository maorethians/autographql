<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q010ed08f11184959b6de6b9a71d5a9edTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  conferences {\n    id\n    name\n    workshopInstructors {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n  }\n}","variables":null,"created_at":"2023-05-05 18:40:21","updated_at":"2023-05-05 18:40:21","times_called":1}
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
        
        $this->assertArrayHasKey('workshopInstructors', $responseContent['conferences'][$g]);
        
        if ($responseContent['conferences'][$g]['workshopInstructors']) {
        
        $this->assertIsArray($responseContent['conferences'][$g]['workshopInstructors']);
        
        for($f = 0; $f < count($responseContent['conferences'][$g]['workshopInstructors']); $f++) {
        
        $this->assertNotNull($responseContent['conferences'][$g]['workshopInstructors'][$f]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conferences'][$g]['workshopInstructors'][$f]);
        
        if ($responseContent['conferences'][$g]['workshopInstructors'][$f]['aboutShort']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['workshopInstructors'][$f]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conferences'][$g]['workshopInstructors'][$f]);
        
        if ($responseContent['conferences'][$g]['workshopInstructors'][$f]['company']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['workshopInstructors'][$f]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conferences'][$g]['workshopInstructors'][$f]);
        
        if ($responseContent['conferences'][$g]['workshopInstructors'][$f]['tagline']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['workshopInstructors'][$f]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conferences'][$g]['workshopInstructors'][$f]);
        
        if ($responseContent['conferences'][$g]['workshopInstructors'][$f]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conferences'][$g]['workshopInstructors'][$f]['noPhotography']);
        
        }
        
        }
        
        }
        
        }
        

    }
}