<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qe61168fab71d4d279f305551b22086cfTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"\n{\n  contact(conferenceId: \"freezing-edge-2020\", contactName: \"Aapeli Haanpuu\") {\n    firstName\n  }\n}\n","variables":null,"created_at":"2023-05-05 18:44:28","updated_at":"2023-05-05 18:44:28","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:3000/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('contact', $responseContent);
        
        $this->assertNotNull($responseContent['contact']);
        
        $this->assertArrayHasKey('firstName', $responseContent['contact']);
        
        $this->assertNotNull($responseContent['contact']['firstName']);
        
        $this->assertIsString($responseContent['contact']['firstName']);
        

    }
}