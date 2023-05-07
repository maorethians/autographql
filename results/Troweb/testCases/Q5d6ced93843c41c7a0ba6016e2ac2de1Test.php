<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q5d6ced93843c41c7a0ba6016e2ac2de1Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  translationsOfEnabledInternationalizationConfig(dictionaryName: \"fa\")\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:13:07","updated_at":"2023-05-07 21:13:07","times_called":1}
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