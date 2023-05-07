<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q0b2b8d884da44f21bcce10ed0c972780Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  blobMimeTypes {\n    blobType\n  }\n}\n","variables":{"query":{"match_all":{}},"sort":[{"_id":"desc"}]},"operation_name":null,"created_at":"2023-05-07 20:56:16","updated_at":"2023-05-07 20:56:16","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('blobMimeTypes', $responseContent);
        
        $this->assertNotNull($responseContent['blobMimeTypes']);
        
        $this->assertIsArray($responseContent['blobMimeTypes']);
        
        for($g = 0; $g < count($responseContent['blobMimeTypes']); $g++) {
        
        $this->assertNotNull($responseContent['blobMimeTypes'][$g]);
        
        $this->assertArrayHasKey('blobType', $responseContent['blobMimeTypes'][$g]);
        
        $this->assertNotNull($responseContent['blobMimeTypes'][$g]['blobType']);
        
        $this->assertContains($responseContent['blobMimeTypes'][$g]['blobType'], ['Archive', 'Audio', 'Image', 'EPUB', 'PDF', 'Presentation', 'SpreadSheet', 'Text', 'Video', 'WordDocument', 'Any']);
        
        }
        

    }
}