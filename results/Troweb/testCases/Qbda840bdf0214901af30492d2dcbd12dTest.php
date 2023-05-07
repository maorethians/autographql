<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qbda840bdf0214901af30492d2dcbd12dTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  internationalizationConfigs {\n    _id\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:10:24","updated_at":"2023-05-07 21:10:24","times_called":1}
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
        
        }
        

    }
}