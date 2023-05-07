<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q3e59619aed6f490abf2671df8a5393fbTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  users {\n    _id\n    email\n    firstname\n    lastname\n    fullname\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:43:13","updated_at":"2023-05-07 21:43:13","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('users', $responseContent);
        
        $this->assertNotNull($responseContent['users']);
        
        $this->assertIsArray($responseContent['users']);
        
        for($g = 0; $g < count($responseContent['users']); $g++) {
        
        $this->assertNotNull($responseContent['users'][$g]);
        
        $this->assertArrayHasKey('_id', $responseContent['users'][$g]);
        
        $this->assertNotNull($responseContent['users'][$g]['_id']);
        
        $this->assertArrayHasKey('email', $responseContent['users'][$g]);
        
        $this->assertNotNull($responseContent['users'][$g]['email']);
        
        $this->assertIsString($responseContent['users'][$g]['email']);
        
        $this->assertArrayHasKey('firstname', $responseContent['users'][$g]);
        
        $this->assertNotNull($responseContent['users'][$g]['firstname']);
        
        $this->assertIsString($responseContent['users'][$g]['firstname']);
        
        $this->assertArrayHasKey('lastname', $responseContent['users'][$g]);
        
        $this->assertNotNull($responseContent['users'][$g]['lastname']);
        
        $this->assertIsString($responseContent['users'][$g]['lastname']);
        
        $this->assertArrayHasKey('fullname', $responseContent['users'][$g]);
        
        if ($responseContent['users'][$g]['fullname']) {
        
        $this->assertIsString($responseContent['users'][$g]['fullname']);
        
        }
        
        }
        

    }
}