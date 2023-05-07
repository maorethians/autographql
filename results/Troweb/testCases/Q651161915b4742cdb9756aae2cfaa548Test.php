<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q651161915b4742cdb9756aae2cfaa548Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  appInfo {\n    hash\n    date\n    __typename\n  }\n}\n","variables":{"query":{"match_all":{}},"sort":[{"_id":"desc"}]},"operation_name":null,"created_at":"2023-05-07 20:53:12","updated_at":"2023-05-07 20:53:12","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('appInfo', $responseContent);
        
        $this->assertNotNull($responseContent['appInfo']);
        
        $this->assertEquals('BuildInfo' , $responseContent['appInfo']['__typename']);
        
        $this->assertArrayHasKey('hash', $responseContent['appInfo']);
        
        $this->assertNotNull($responseContent['appInfo']['hash']);
        
        $this->assertIsString($responseContent['appInfo']['hash']);
        
        $this->assertArrayHasKey('date', $responseContent['appInfo']);
        
        $this->assertNotNull($responseContent['appInfo']['date']);
        
        $this->assertIsString($responseContent['appInfo']['date']);
        

    }
}