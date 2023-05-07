<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qd23499ff19ad42cdb2e9d3086a87a6b5Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  translationsOfEnabledInternationalizationConfig(dictionaryName: \"ar\")\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:13:04","updated_at":"2023-05-07 21:13:04","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('translationsOfEnabledInternationalizationConfig', $responseContent);
        
        if ($responseContent['translationsOfEnabledInternationalizationConfig']) {
        
        }
        

    }
}