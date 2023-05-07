<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q80d5f73697ba43c2a9e68a00387caeddTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  applicationAppearance {\n    explore {\n      results {\n        view {\n          list {\n            enabled\n            showStatus\n          }\n          grid {\n            enabled\n          }\n        }\n      }\n    }\n    search {\n      facets {\n        commonFacets {\n          fieldName\n        }\n        schemas {\n          schemaName\n          sortBy\n        }\n      }\n    }\n  }\n}\n","variables":{"query":{"match_all":{}},"sort":[{"_id":"desc"}]},"operation_name":null,"created_at":"2023-05-07 20:54:34","updated_at":"2023-05-07 20:54:34","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('applicationAppearance', $responseContent);
        
        if ($responseContent['applicationAppearance']) {
        
        $this->assertArrayHasKey('explore', $responseContent['applicationAppearance']);
        
        if ($responseContent['applicationAppearance']['explore']) {
        
        $this->assertArrayHasKey('results', $responseContent['applicationAppearance']['explore']);
        
        if ($responseContent['applicationAppearance']['explore']['results']) {
        
        $this->assertArrayHasKey('view', $responseContent['applicationAppearance']['explore']['results']);
        
        if ($responseContent['applicationAppearance']['explore']['results']['view']) {
        
        $this->assertArrayHasKey('list', $responseContent['applicationAppearance']['explore']['results']['view']);
        
        if ($responseContent['applicationAppearance']['explore']['results']['view']['list']) {
        
        $this->assertArrayHasKey('enabled', $responseContent['applicationAppearance']['explore']['results']['view']['list']);
        
        if ($responseContent['applicationAppearance']['explore']['results']['view']['list']['enabled']) {
        
        $this->assertIsBool($responseContent['applicationAppearance']['explore']['results']['view']['list']['enabled']);
        
        }
        
        $this->assertArrayHasKey('showStatus', $responseContent['applicationAppearance']['explore']['results']['view']['list']);
        
        if ($responseContent['applicationAppearance']['explore']['results']['view']['list']['showStatus']) {
        
        $this->assertIsBool($responseContent['applicationAppearance']['explore']['results']['view']['list']['showStatus']);
        
        }
        
        }
        
        $this->assertArrayHasKey('grid', $responseContent['applicationAppearance']['explore']['results']['view']);
        
        if ($responseContent['applicationAppearance']['explore']['results']['view']['grid']) {
        
        $this->assertArrayHasKey('enabled', $responseContent['applicationAppearance']['explore']['results']['view']['grid']);
        
        if ($responseContent['applicationAppearance']['explore']['results']['view']['grid']['enabled']) {
        
        $this->assertIsBool($responseContent['applicationAppearance']['explore']['results']['view']['grid']['enabled']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('search', $responseContent['applicationAppearance']);
        
        if ($responseContent['applicationAppearance']['search']) {
        
        $this->assertArrayHasKey('facets', $responseContent['applicationAppearance']['search']);
        
        if ($responseContent['applicationAppearance']['search']['facets']) {
        
        $this->assertArrayHasKey('commonFacets', $responseContent['applicationAppearance']['search']['facets']);
        
        if ($responseContent['applicationAppearance']['search']['facets']['commonFacets']) {
        
        $this->assertIsArray($responseContent['applicationAppearance']['search']['facets']['commonFacets']);
        
        for($g = 0; $g < count($responseContent['applicationAppearance']['search']['facets']['commonFacets']); $g++) {
        
        $this->assertNotNull($responseContent['applicationAppearance']['search']['facets']['commonFacets'][$g]);
        
        $this->assertArrayHasKey('fieldName', $responseContent['applicationAppearance']['search']['facets']['commonFacets'][$g]);
        
        $this->assertNotNull($responseContent['applicationAppearance']['search']['facets']['commonFacets'][$g]['fieldName']);
        
        $this->assertIsString($responseContent['applicationAppearance']['search']['facets']['commonFacets'][$g]['fieldName']);
        
        }
        
        }
        
        $this->assertArrayHasKey('schemas', $responseContent['applicationAppearance']['search']['facets']);
        
        if ($responseContent['applicationAppearance']['search']['facets']['schemas']) {
        
        $this->assertIsArray($responseContent['applicationAppearance']['search']['facets']['schemas']);
        
        for($g = 0; $g < count($responseContent['applicationAppearance']['search']['facets']['schemas']); $g++) {
        
        $this->assertNotNull($responseContent['applicationAppearance']['search']['facets']['schemas'][$g]);
        
        $this->assertArrayHasKey('schemaName', $responseContent['applicationAppearance']['search']['facets']['schemas'][$g]);
        
        $this->assertNotNull($responseContent['applicationAppearance']['search']['facets']['schemas'][$g]['schemaName']);
        
        $this->assertIsString($responseContent['applicationAppearance']['search']['facets']['schemas'][$g]['schemaName']);
        
        $this->assertArrayHasKey('sortBy', $responseContent['applicationAppearance']['search']['facets']['schemas'][$g]);
        
        if ($responseContent['applicationAppearance']['search']['facets']['schemas'][$g]['sortBy']) {
        
        $this->assertIsArray($responseContent['applicationAppearance']['search']['facets']['schemas'][$g]['sortBy']);
        
        for($f = 0; $f < count($responseContent['applicationAppearance']['search']['facets']['schemas'][$g]['sortBy']); $f++) {
        
        $this->assertNotNull($responseContent['applicationAppearance']['search']['facets']['schemas'][$g]['sortBy'][$f]);
        
        $this->assertIsString($responseContent['applicationAppearance']['search']['facets']['schemas'][$g]['sortBy'][$f]);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}