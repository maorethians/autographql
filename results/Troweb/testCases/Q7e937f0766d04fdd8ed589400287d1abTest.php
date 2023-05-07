<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q7e937f0766d04fdd8ed589400287d1abTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  getPlugins {\n    name\n    description\n    readMe\n    official\n    category\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:25:32","updated_at":"2023-05-07 21:25:32","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('getPlugins', $responseContent);
        
        $this->assertNotNull($responseContent['getPlugins']);
        
        $this->assertIsArray($responseContent['getPlugins']);
        
        for($g = 0; $g < count($responseContent['getPlugins']); $g++) {
        
        $this->assertNotNull($responseContent['getPlugins'][$g]);
        
        $this->assertArrayHasKey('name', $responseContent['getPlugins'][$g]);
        
        $this->assertNotNull($responseContent['getPlugins'][$g]['name']);
        
        $this->assertIsString($responseContent['getPlugins'][$g]['name']);
        
        $this->assertArrayHasKey('description', $responseContent['getPlugins'][$g]);
        
        $this->assertNotNull($responseContent['getPlugins'][$g]['description']);
        
        $this->assertIsString($responseContent['getPlugins'][$g]['description']);
        
        $this->assertArrayHasKey('readMe', $responseContent['getPlugins'][$g]);
        
        if ($responseContent['getPlugins'][$g]['readMe']) {
        
        $this->assertIsString($responseContent['getPlugins'][$g]['readMe']);
        
        }
        
        $this->assertArrayHasKey('official', $responseContent['getPlugins'][$g]);
        
        $this->assertNotNull($responseContent['getPlugins'][$g]['official']);
        
        $this->assertContains($responseContent['getPlugins'][$g]['official'], ['Official', 'Community']);
        
        $this->assertArrayHasKey('category', $responseContent['getPlugins'][$g]);
        
        $this->assertNotNull($responseContent['getPlugins'][$g]['category']);
        
        $this->assertContains($responseContent['getPlugins'][$g]['category'], ['AI', 'Accessories', 'Importer']);
        
        }
        

    }
}