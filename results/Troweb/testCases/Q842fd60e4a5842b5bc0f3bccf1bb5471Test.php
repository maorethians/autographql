<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q842fd60e4a5842b5bc0f3bccf1bb5471Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  commonFields {\n    type\n    name\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:28:07","updated_at":"2023-05-07 21:28:07","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('commonFields', $responseContent);
        
        $this->assertNotNull($responseContent['commonFields']);
        
        $this->assertIsArray($responseContent['commonFields']);
        
        for($g = 0; $g < count($responseContent['commonFields']); $g++) {
        
        $this->assertNotNull($responseContent['commonFields'][$g]);
        
        $this->assertArrayHasKey('type', $responseContent['commonFields'][$g]);
        
        $this->assertNotNull($responseContent['commonFields'][$g]['type']);
        
        $this->assertContains($responseContent['commonFields'][$g]['type'], ['Object', 'TreeTag', 'Ref', 'Schema', 'Blob', 'NestedSchema', 'ObjectId', 'Int', 'Integer', 'Float', 'Decimal', 'Boolean', 'String', 'ShortText', 'LongText', 'DateTime', 'Date', 'Time', 'JSON', 'RichText', 'Duration']);
        
        $this->assertArrayHasKey('name', $responseContent['commonFields'][$g]);
        
        $this->assertNotNull($responseContent['commonFields'][$g]['name']);
        
        $this->assertIsString($responseContent['commonFields'][$g]['name']);
        
        }
        

    }
}