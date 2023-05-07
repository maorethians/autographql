<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qce3ec13539294092a931004e1a9f4ff5Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  blobMimeTypes {\n    blobType\n    mimeTypes\n  }\n}\n","variables":{"query":{"match_all":{}},"sort":[{"_id":"desc"}]},"operation_name":null,"created_at":"2023-05-07 20:56:19","updated_at":"2023-05-07 20:56:19","times_called":1}
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
        
        $this->assertArrayHasKey('mimeTypes', $responseContent['blobMimeTypes'][$g]);
        
        $this->assertNotNull($responseContent['blobMimeTypes'][$g]['mimeTypes']);
        
        $this->assertIsArray($responseContent['blobMimeTypes'][$g]['mimeTypes']);
        
        for($f = 0; $f < count($responseContent['blobMimeTypes'][$g]['mimeTypes']); $f++) {
        
        $this->assertNotNull($responseContent['blobMimeTypes'][$g]['mimeTypes'][$f]);
        
        $this->assertIsString($responseContent['blobMimeTypes'][$g]['mimeTypes'][$f]);
        
        }
        
        }
        

    }
}