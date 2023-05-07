<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qf7fadf9b67ce4b19abca31c212da131fTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  pluginsOrgInstance {\n    _id\n    name\n    config {\n      ioSchemas {\n        name\n      }\n    }\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:27:49","updated_at":"2023-05-07 21:27:49","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('pluginsOrgInstance', $responseContent);
        
        $this->assertNotNull($responseContent['pluginsOrgInstance']);
        
        $this->assertIsArray($responseContent['pluginsOrgInstance']);
        
        for($g = 0; $g < count($responseContent['pluginsOrgInstance']); $g++) {
        
        $this->assertNotNull($responseContent['pluginsOrgInstance'][$g]);
        
        $this->assertArrayHasKey('_id', $responseContent['pluginsOrgInstance'][$g]);
        
        $this->assertNotNull($responseContent['pluginsOrgInstance'][$g]['_id']);
        
        $this->assertArrayHasKey('name', $responseContent['pluginsOrgInstance'][$g]);
        
        $this->assertNotNull($responseContent['pluginsOrgInstance'][$g]['name']);
        
        $this->assertIsString($responseContent['pluginsOrgInstance'][$g]['name']);
        
        $this->assertArrayHasKey('config', $responseContent['pluginsOrgInstance'][$g]);
        
        $this->assertNotNull($responseContent['pluginsOrgInstance'][$g]['config']);
        
        $this->assertArrayHasKey('ioSchemas', $responseContent['pluginsOrgInstance'][$g]['config']);
        
        if ($responseContent['pluginsOrgInstance'][$g]['config']['ioSchemas']) {
        
        $this->assertIsArray($responseContent['pluginsOrgInstance'][$g]['config']['ioSchemas']);
        
        for($f = 0; $f < count($responseContent['pluginsOrgInstance'][$g]['config']['ioSchemas']); $f++) {
        
        $this->assertNotNull($responseContent['pluginsOrgInstance'][$g]['config']['ioSchemas'][$f]);
        
        $this->assertArrayHasKey('name', $responseContent['pluginsOrgInstance'][$g]['config']['ioSchemas'][$f]);
        
        $this->assertNotNull($responseContent['pluginsOrgInstance'][$g]['config']['ioSchemas'][$f]['name']);
        
        $this->assertIsString($responseContent['pluginsOrgInstance'][$g]['config']['ioSchemas'][$f]['name']);
        
        }
        
        }
        
        }
        

    }
}