<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q90c56bd263d54d09a0d7b7bd4a58e21aTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  conference(id: \"freezing-edge-2020\") {\n    id\n    name\n    speakers {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n  }\n}","variables":null,"created_at":"2023-05-05 18:39:39","updated_at":"2023-05-05 18:39:39","times_called":1}
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
        
        $this->assertArrayHasKey('speakers', $responseContent['conference']);
        
        if ($responseContent['conference']['speakers']) {
        
        $this->assertIsArray($responseContent['conference']['speakers']);
        
        for($g = 0; $g < count($responseContent['conference']['speakers']); $g++) {
        
        $this->assertNotNull($responseContent['conference']['speakers'][$g]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conference']['speakers'][$g]);
        
        if ($responseContent['conference']['speakers'][$g]['aboutShort']) {
        
        $this->assertIsString($responseContent['conference']['speakers'][$g]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conference']['speakers'][$g]);
        
        if ($responseContent['conference']['speakers'][$g]['company']) {
        
        $this->assertIsString($responseContent['conference']['speakers'][$g]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conference']['speakers'][$g]);
        
        if ($responseContent['conference']['speakers'][$g]['tagline']) {
        
        $this->assertIsString($responseContent['conference']['speakers'][$g]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conference']['speakers'][$g]);
        
        if ($responseContent['conference']['speakers'][$g]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conference']['speakers'][$g]['noPhotography']);
        
        }
        
        }
        
        }
        

    }
}