<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q36b9793a49ac4165867398473bb36437Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  people {\n    firstName\n    name\n    about\n    aboutShort\n    company\n  }\n}","variables":null,"created_at":"2023-05-05 18:41:39","updated_at":"2023-05-05 18:41:39","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:3000/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('people', $responseContent);
        
        $this->assertNotNull($responseContent['people']);
        
        $this->assertIsArray($responseContent['people']);
        
        for($g = 0; $g < count($responseContent['people']); $g++) {
        
        $this->assertNotNull($responseContent['people'][$g]);
        
        $this->assertArrayHasKey('firstName', $responseContent['people'][$g]);
        
        $this->assertNotNull($responseContent['people'][$g]['firstName']);
        
        $this->assertIsString($responseContent['people'][$g]['firstName']);
        
        $this->assertArrayHasKey('name', $responseContent['people'][$g]);
        
        $this->assertNotNull($responseContent['people'][$g]['name']);
        
        $this->assertIsString($responseContent['people'][$g]['name']);
        
        $this->assertArrayHasKey('about', $responseContent['people'][$g]);
        
        $this->assertNotNull($responseContent['people'][$g]['about']);
        
        $this->assertIsString($responseContent['people'][$g]['about']);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['people'][$g]);
        
        if ($responseContent['people'][$g]['aboutShort']) {
        
        $this->assertIsString($responseContent['people'][$g]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['people'][$g]);
        
        if ($responseContent['people'][$g]['company']) {
        
        $this->assertIsString($responseContent['people'][$g]['company']);
        
        }
        
        }
        

    }
}