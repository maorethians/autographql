<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qffb1cc39ae6345f4934c62b9e8f4961dTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  orgInfo {\n    id\n    name\n    logo\n    isRestricted\n    internationalizationConfigs {\n      _id\n    }\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:22:45","updated_at":"2023-05-07 21:22:45","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('orgInfo', $responseContent);
        
        $this->assertNotNull($responseContent['orgInfo']);
        
        $this->assertArrayHasKey('id', $responseContent['orgInfo']);
        
        $this->assertNotNull($responseContent['orgInfo']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['orgInfo']);
        
        $this->assertNotNull($responseContent['orgInfo']['name']);
        
        $this->assertIsString($responseContent['orgInfo']['name']);
        
        $this->assertArrayHasKey('logo', $responseContent['orgInfo']);
        
        if ($responseContent['orgInfo']['logo']) {
        
        $this->assertIsString($responseContent['orgInfo']['logo']);
        
        }
        
        $this->assertArrayHasKey('isRestricted', $responseContent['orgInfo']);
        
        if ($responseContent['orgInfo']['isRestricted']) {
        
        $this->assertIsBool($responseContent['orgInfo']['isRestricted']);
        
        }
        
        $this->assertArrayHasKey('internationalizationConfigs', $responseContent['orgInfo']);
        
        $this->assertNotNull($responseContent['orgInfo']['internationalizationConfigs']);
        
        $this->assertIsArray($responseContent['orgInfo']['internationalizationConfigs']);
        
        for($g = 0; $g < count($responseContent['orgInfo']['internationalizationConfigs']); $g++) {
        
        $this->assertNotNull($responseContent['orgInfo']['internationalizationConfigs'][$g]);
        
        $this->assertArrayHasKey('_id', $responseContent['orgInfo']['internationalizationConfigs'][$g]);
        
        $this->assertNotNull($responseContent['orgInfo']['internationalizationConfigs'][$g]['_id']);
        
        }
        

    }
}