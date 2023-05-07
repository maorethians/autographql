<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q580bc9f1d3ea44f8a9da53b46906a41eTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  getBlobUploadSignedUrl(\n    blobsInfo: {fileName: \"a.json\", fileSize: 1000, mimeType: \"application/gzip\"}\n    collectionId: \"000000000000000000000000\"\n  ) {\n    _id\n    fileName\n    blobType\n    url\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:01:08","updated_at":"2023-05-07 21:01:08","times_called":2}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('getBlobUploadSignedUrl', $responseContent);
        
        $this->assertNotNull($responseContent['getBlobUploadSignedUrl']);
        
        $this->assertIsArray($responseContent['getBlobUploadSignedUrl']);
        
        for($g = 0; $g < count($responseContent['getBlobUploadSignedUrl']); $g++) {
        
        $this->assertNotNull($responseContent['getBlobUploadSignedUrl'][$g]);
        
        $this->assertArrayHasKey('_id', $responseContent['getBlobUploadSignedUrl'][$g]);
        
        if ($responseContent['getBlobUploadSignedUrl'][$g]['_id']) {
        
        }
        
        $this->assertArrayHasKey('fileName', $responseContent['getBlobUploadSignedUrl'][$g]);
        
        $this->assertNotNull($responseContent['getBlobUploadSignedUrl'][$g]['fileName']);
        
        $this->assertIsString($responseContent['getBlobUploadSignedUrl'][$g]['fileName']);
        
        $this->assertArrayHasKey('blobType', $responseContent['getBlobUploadSignedUrl'][$g]);
        
        if ($responseContent['getBlobUploadSignedUrl'][$g]['blobType']) {
        
        $this->assertContains($responseContent['getBlobUploadSignedUrl'][$g]['blobType'], ['Archive', 'Audio', 'Image', 'EPUB', 'PDF', 'Presentation', 'SpreadSheet', 'Text', 'Video', 'WordDocument', 'Any']);
        
        }
        
        $this->assertArrayHasKey('url', $responseContent['getBlobUploadSignedUrl'][$g]);
        
        if ($responseContent['getBlobUploadSignedUrl'][$g]['url']) {
        
        $this->assertIsString($responseContent['getBlobUploadSignedUrl'][$g]['url']);
        
        }
        
        }
        

    }
}