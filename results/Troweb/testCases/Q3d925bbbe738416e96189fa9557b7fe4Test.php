<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q3d925bbbe738416e96189fa9557b7fe4Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  getBlobUploadSignedUrl(\n    blobsInfo: {fileName: \"a.json\", fileSize: 1000, mimeType: \"application/gzip\"}\n    collectionId: \"000000000000000000000000\"\n  ) {\n    _id\n  }\n}\n","variables":{"query":{"match_all":{}},"sort":[{"_id":"desc"}]},"operation_name":null,"created_at":"2023-05-07 20:59:55","updated_at":"2023-05-07 20:59:55","times_called":1}
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
        
        }
        

    }
}