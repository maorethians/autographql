<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q48b79d7788b341e7b46b91414fb738f4Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  conferences {\n    schedules {\n      description\n    }\n  }\n}\n","variables":null,"created_at":"2023-05-05 18:57:02","updated_at":"2023-05-05 18:57:02","times_called":1}
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
        
        $this->assertArrayHasKey('schedules', $responseContent['conferences'][$g]);
        
        $this->assertNotNull($responseContent['conferences'][$g]['schedules']);
        
        $this->assertIsArray($responseContent['conferences'][$g]['schedules']);
        
        for($f = 0; $f < count($responseContent['conferences'][$g]['schedules']); $f++) {
        
        $this->assertNotNull($responseContent['conferences'][$g]['schedules'][$f]);
        
        $this->assertArrayHasKey('description', $responseContent['conferences'][$g]['schedules'][$f]);
        
        if ($responseContent['conferences'][$g]['schedules'][$f]['description']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['schedules'][$f]['description']);
        
        }
        
        }
        
        }
        

    }
}