<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q5ed01cd66baf441388352910035ee267Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  internationalizationConfigs {\n    _id\n    isEnabled\n    isDefault\n    dictionaryName\n    displayName\n    baseDictionaryName\n    translations\n    dateFormat\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:12:38","updated_at":"2023-05-07 21:12:38","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('internationalizationConfigs', $responseContent);
        
        $this->assertNotNull($responseContent['internationalizationConfigs']);
        
        $this->assertIsArray($responseContent['internationalizationConfigs']);
        
        for($g = 0; $g < count($responseContent['internationalizationConfigs']); $g++) {
        
        $this->assertNotNull($responseContent['internationalizationConfigs'][$g]);
        
        $this->assertArrayHasKey('_id', $responseContent['internationalizationConfigs'][$g]);
        
        $this->assertNotNull($responseContent['internationalizationConfigs'][$g]['_id']);
        
        $this->assertArrayHasKey('isEnabled', $responseContent['internationalizationConfigs'][$g]);
        
        $this->assertNotNull($responseContent['internationalizationConfigs'][$g]['isEnabled']);
        
        $this->assertIsBool($responseContent['internationalizationConfigs'][$g]['isEnabled']);
        
        $this->assertArrayHasKey('isDefault', $responseContent['internationalizationConfigs'][$g]);
        
        $this->assertNotNull($responseContent['internationalizationConfigs'][$g]['isDefault']);
        
        $this->assertIsBool($responseContent['internationalizationConfigs'][$g]['isDefault']);
        
        $this->assertArrayHasKey('dictionaryName', $responseContent['internationalizationConfigs'][$g]);
        
        $this->assertNotNull($responseContent['internationalizationConfigs'][$g]['dictionaryName']);
        
        $this->assertIsString($responseContent['internationalizationConfigs'][$g]['dictionaryName']);
        
        $this->assertArrayHasKey('displayName', $responseContent['internationalizationConfigs'][$g]);
        
        $this->assertNotNull($responseContent['internationalizationConfigs'][$g]['displayName']);
        
        $this->assertIsString($responseContent['internationalizationConfigs'][$g]['displayName']);
        
        $this->assertArrayHasKey('baseDictionaryName', $responseContent['internationalizationConfigs'][$g]);
        
        if ($responseContent['internationalizationConfigs'][$g]['baseDictionaryName']) {
        
        $this->assertContains($responseContent['internationalizationConfigs'][$g]['baseDictionaryName'], ['enUS', 'fa', 'ar']);
        
        }
        
        $this->assertArrayHasKey('translations', $responseContent['internationalizationConfigs'][$g]);
        
        if ($responseContent['internationalizationConfigs'][$g]['translations']) {
        
        }
        
        $this->assertArrayHasKey('dateFormat', $responseContent['internationalizationConfigs'][$g]);
        
        if ($responseContent['internationalizationConfigs'][$g]['dateFormat']) {
        
        $this->assertIsString($responseContent['internationalizationConfigs'][$g]['dateFormat']);
        
        }
        
        }
        

    }
}