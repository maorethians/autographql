<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q829316b4c276439eb4519dc0aa56f440Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  orgInfo {\n    id\n    name\n    logo\n    isRestricted\n    internationalizationConfigs {\n      _id\n      displayName\n      isDefault\n      isRTL\n      displayName\n    }\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:22:56","updated_at":"2023-05-07 21:22:56","times_called":1}
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
        
        $this->assertArrayHasKey('displayName', $responseContent['orgInfo']['internationalizationConfigs'][$g]);
        
        $this->assertNotNull($responseContent['orgInfo']['internationalizationConfigs'][$g]['displayName']);
        
        $this->assertIsString($responseContent['orgInfo']['internationalizationConfigs'][$g]['displayName']);
        
        $this->assertArrayHasKey('isDefault', $responseContent['orgInfo']['internationalizationConfigs'][$g]);
        
        $this->assertNotNull($responseContent['orgInfo']['internationalizationConfigs'][$g]['isDefault']);
        
        $this->assertIsBool($responseContent['orgInfo']['internationalizationConfigs'][$g]['isDefault']);
        
        $this->assertArrayHasKey('isRTL', $responseContent['orgInfo']['internationalizationConfigs'][$g]);
        
        $this->assertNotNull($responseContent['orgInfo']['internationalizationConfigs'][$g]['isRTL']);
        
        $this->assertIsBool($responseContent['orgInfo']['internationalizationConfigs'][$g]['isRTL']);
        
        $this->assertArrayHasKey('displayName', $responseContent['orgInfo']['internationalizationConfigs'][$g]);
        
        $this->assertNotNull($responseContent['orgInfo']['internationalizationConfigs'][$g]['displayName']);
        
        $this->assertIsString($responseContent['orgInfo']['internationalizationConfigs'][$g]['displayName']);
        
        }
        

    }
}