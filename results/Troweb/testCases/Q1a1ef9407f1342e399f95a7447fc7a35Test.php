<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q1a1ef9407f1342e399f95a7447fc7a35Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  getBranding(includePredefinedBranding: true) {\n    page\n    theme\n    section\n    brandingConfigs {\n      isDefault\n      dictionaryName\n      configs\n    }\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:02:11","updated_at":"2023-05-07 21:02:16","times_called":2}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('getBranding', $responseContent);
        
        $this->assertNotNull($responseContent['getBranding']);
        
        $this->assertIsArray($responseContent['getBranding']);
        
        for($g = 0; $g < count($responseContent['getBranding']); $g++) {
        
        $this->assertNotNull($responseContent['getBranding'][$g]);
        
        $this->assertArrayHasKey('page', $responseContent['getBranding'][$g]);
        
        if ($responseContent['getBranding'][$g]['page']) {
        
        $this->assertContains($responseContent['getBranding'][$g]['page'], ['Home']);
        
        }
        
        $this->assertArrayHasKey('theme', $responseContent['getBranding'][$g]);
        
        if ($responseContent['getBranding'][$g]['theme']) {
        
        $this->assertContains($responseContent['getBranding'][$g]['theme'], ['Default']);
        
        }
        
        $this->assertArrayHasKey('section', $responseContent['getBranding'][$g]);
        
        if ($responseContent['getBranding'][$g]['section']) {
        
        $this->assertContains($responseContent['getBranding'][$g]['section'], ['Footer']);
        
        }
        
        $this->assertArrayHasKey('brandingConfigs', $responseContent['getBranding'][$g]);
        
        $this->assertNotNull($responseContent['getBranding'][$g]['brandingConfigs']);
        
        $this->assertIsArray($responseContent['getBranding'][$g]['brandingConfigs']);
        
        for($f = 0; $f < count($responseContent['getBranding'][$g]['brandingConfigs']); $f++) {
        
        $this->assertNotNull($responseContent['getBranding'][$g]['brandingConfigs'][$f]);
        
        $this->assertArrayHasKey('isDefault', $responseContent['getBranding'][$g]['brandingConfigs'][$f]);
        
        if ($responseContent['getBranding'][$g]['brandingConfigs'][$f]['isDefault']) {
        
        $this->assertIsBool($responseContent['getBranding'][$g]['brandingConfigs'][$f]['isDefault']);
        
        }
        
        $this->assertArrayHasKey('dictionaryName', $responseContent['getBranding'][$g]['brandingConfigs'][$f]);
        
        if ($responseContent['getBranding'][$g]['brandingConfigs'][$f]['dictionaryName']) {
        
        $this->assertIsString($responseContent['getBranding'][$g]['brandingConfigs'][$f]['dictionaryName']);
        
        }
        
        $this->assertArrayHasKey('configs', $responseContent['getBranding'][$g]['brandingConfigs'][$f]);
        
        $this->assertNotNull($responseContent['getBranding'][$g]['brandingConfigs'][$f]['configs']);
        
        }
        
        }
        

    }
}