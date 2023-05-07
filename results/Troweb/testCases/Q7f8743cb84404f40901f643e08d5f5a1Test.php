<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q7f8743cb84404f40901f643e08d5f5a1Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  getBranding(includePredefinedBranding: false) {\n    page\n    section\n    theme\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:01:46","updated_at":"2023-05-07 21:01:46","times_called":1}
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
        
        $this->assertArrayHasKey('section', $responseContent['getBranding'][$g]);
        
        if ($responseContent['getBranding'][$g]['section']) {
        
        $this->assertContains($responseContent['getBranding'][$g]['section'], ['Footer']);
        
        }
        
        $this->assertArrayHasKey('theme', $responseContent['getBranding'][$g]);
        
        if ($responseContent['getBranding'][$g]['theme']) {
        
        $this->assertContains($responseContent['getBranding'][$g]['theme'], ['Default']);
        
        }
        
        }
        

    }
}