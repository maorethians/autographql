<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qa0c44f8530a9485080c546b989adb5ccTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  getInvoices {\n    _id\n    currency\n    number\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:31:47","updated_at":"2023-05-07 21:31:47","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('getInvoices', $responseContent);
        
        $this->assertNotNull($responseContent['getInvoices']);
        
        $this->assertIsArray($responseContent['getInvoices']);
        
        for($g = 0; $g < count($responseContent['getInvoices']); $g++) {
        
        $this->assertNotNull($responseContent['getInvoices'][$g]);
        
        $this->assertArrayHasKey('_id', $responseContent['getInvoices'][$g]);
        
        $this->assertNotNull($responseContent['getInvoices'][$g]['_id']);
        
        $this->assertArrayHasKey('currency', $responseContent['getInvoices'][$g]);
        
        $this->assertNotNull($responseContent['getInvoices'][$g]['currency']);
        
        $this->assertIsString($responseContent['getInvoices'][$g]['currency']);
        
        $this->assertArrayHasKey('number', $responseContent['getInvoices'][$g]);
        
        $this->assertNotNull($responseContent['getInvoices'][$g]['number']);
        
        $this->assertIsInt($responseContent['getInvoices'][$g]['number']);
        
        }
        

    }
}