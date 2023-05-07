<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qa98a442c866c4aab8bc7f958b3297b86Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  allSeries {\n    id\n    name\n    conferences {\n      id\n    } \n  }\n}\n","variables":null,"created_at":"2023-05-05 18:59:15","updated_at":"2023-05-05 18:59:15","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:3000/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('allSeries', $responseContent);
        
        $this->assertNotNull($responseContent['allSeries']);
        
        $this->assertIsArray($responseContent['allSeries']);
        
        for($g = 0; $g < count($responseContent['allSeries']); $g++) {
        
        $this->assertNotNull($responseContent['allSeries'][$g]);
        
        $this->assertArrayHasKey('id', $responseContent['allSeries'][$g]);
        
        $this->assertNotNull($responseContent['allSeries'][$g]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['allSeries'][$g]);
        
        $this->assertNotNull($responseContent['allSeries'][$g]['name']);
        
        $this->assertIsString($responseContent['allSeries'][$g]['name']);
        
        $this->assertArrayHasKey('conferences', $responseContent['allSeries'][$g]);
        
        $this->assertNotNull($responseContent['allSeries'][$g]['conferences']);
        
        $this->assertIsArray($responseContent['allSeries'][$g]['conferences']);
        
        for($f = 0; $f < count($responseContent['allSeries'][$g]['conferences']); $f++) {
        
        $this->assertNotNull($responseContent['allSeries'][$g]['conferences'][$f]);
        
        $this->assertArrayHasKey('id', $responseContent['allSeries'][$g]['conferences'][$f]);
        
        $this->assertNotNull($responseContent['allSeries'][$g]['conferences'][$f]['id']);
        
        }
        
        }
        

    }
}