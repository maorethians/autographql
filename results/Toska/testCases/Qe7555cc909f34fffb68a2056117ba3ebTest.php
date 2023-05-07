<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qe7555cc909f34fffb68a2056117ba3ebTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  theme(conferenceId: \"freezing-edge-2020\") {\n    id\n  }\n}\n","variables":null,"created_at":"2023-05-05 19:03:40","updated_at":"2023-05-05 19:03:40","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:3000/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('theme', $responseContent);
        
        $this->assertNotNull($responseContent['theme']);
        
        $this->assertArrayHasKey('id', $responseContent['theme']);
        
        $this->assertNotNull($responseContent['theme']['id']);
        

    }
}