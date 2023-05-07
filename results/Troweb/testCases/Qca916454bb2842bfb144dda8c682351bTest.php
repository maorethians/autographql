<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qca916454bb2842bfb144dda8c682351bTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  pageLayouts {\n    _id\n    lastModified\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:18:05","updated_at":"2023-05-07 21:18:05","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('pageLayouts', $responseContent);
        
        $this->assertNotNull($responseContent['pageLayouts']);
        
        $this->assertIsArray($responseContent['pageLayouts']);
        
        for($g = 0; $g < count($responseContent['pageLayouts']); $g++) {
        
        $this->assertNotNull($responseContent['pageLayouts'][$g]);
        
        $this->assertArrayHasKey('_id', $responseContent['pageLayouts'][$g]);
        
        $this->assertNotNull($responseContent['pageLayouts'][$g]['_id']);
        
        $this->assertArrayHasKey('lastModified', $responseContent['pageLayouts'][$g]);
        
        $this->assertNotNull($responseContent['pageLayouts'][$g]['lastModified']);
        
        }
        

    }
}