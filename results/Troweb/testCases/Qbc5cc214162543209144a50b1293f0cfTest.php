<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qbc5cc214162543209144a50b1293f0cfTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  getPlugins {\n    name\n    description\n    readMe\n    official\n    category\n    logo\n    publisher {\n      name\n      company\n      image\n    }\n    endpoint\n    pluginDeploymentConfig {\n      kind\n      maxItemConcurrency\n      triggers\n    }\n    config {\n      ioSchemas {\n        name\n        description\n        type\n      }\n    }\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:26:23","updated_at":"2023-05-07 21:26:23","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('getPlugins', $responseContent);
        
        $this->assertNotNull($responseContent['getPlugins']);
        
        $this->assertIsArray($responseContent['getPlugins']);
        
        for($g = 0; $g < count($responseContent['getPlugins']); $g++) {
        
        $this->assertNotNull($responseContent['getPlugins'][$g]);
        
        $this->assertArrayHasKey('name', $responseContent['getPlugins'][$g]);
        
        $this->assertNotNull($responseContent['getPlugins'][$g]['name']);
        
        $this->assertIsString($responseContent['getPlugins'][$g]['name']);
        
        $this->assertArrayHasKey('description', $responseContent['getPlugins'][$g]);
        
        $this->assertNotNull($responseContent['getPlugins'][$g]['description']);
        
        $this->assertIsString($responseContent['getPlugins'][$g]['description']);
        
        $this->assertArrayHasKey('readMe', $responseContent['getPlugins'][$g]);
        
        if ($responseContent['getPlugins'][$g]['readMe']) {
        
        $this->assertIsString($responseContent['getPlugins'][$g]['readMe']);
        
        }
        
        $this->assertArrayHasKey('official', $responseContent['getPlugins'][$g]);
        
        $this->assertNotNull($responseContent['getPlugins'][$g]['official']);
        
        $this->assertContains($responseContent['getPlugins'][$g]['official'], ['Official', 'Community']);
        
        $this->assertArrayHasKey('category', $responseContent['getPlugins'][$g]);
        
        $this->assertNotNull($responseContent['getPlugins'][$g]['category']);
        
        $this->assertContains($responseContent['getPlugins'][$g]['category'], ['AI', 'Accessories', 'Importer']);
        
        $this->assertArrayHasKey('logo', $responseContent['getPlugins'][$g]);
        
        $this->assertNotNull($responseContent['getPlugins'][$g]['logo']);
        
        $this->assertIsString($responseContent['getPlugins'][$g]['logo']);
        
        $this->assertArrayHasKey('publisher', $responseContent['getPlugins'][$g]);
        
        if ($responseContent['getPlugins'][$g]['publisher']) {
        
        $this->assertArrayHasKey('name', $responseContent['getPlugins'][$g]['publisher']);
        
        if ($responseContent['getPlugins'][$g]['publisher']['name']) {
        
        $this->assertIsString($responseContent['getPlugins'][$g]['publisher']['name']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['getPlugins'][$g]['publisher']);
        
        if ($responseContent['getPlugins'][$g]['publisher']['company']) {
        
        $this->assertIsString($responseContent['getPlugins'][$g]['publisher']['company']);
        
        }
        
        $this->assertArrayHasKey('image', $responseContent['getPlugins'][$g]['publisher']);
        
        if ($responseContent['getPlugins'][$g]['publisher']['image']) {
        
        $this->assertIsString($responseContent['getPlugins'][$g]['publisher']['image']);
        
        }
        
        }
        
        $this->assertArrayHasKey('endpoint', $responseContent['getPlugins'][$g]);
        
        if ($responseContent['getPlugins'][$g]['endpoint']) {
        
        $this->assertIsString($responseContent['getPlugins'][$g]['endpoint']);
        
        }
        
        $this->assertArrayHasKey('pluginDeploymentConfig', $responseContent['getPlugins'][$g]);
        
        $this->assertNotNull($responseContent['getPlugins'][$g]['pluginDeploymentConfig']);
        
        $this->assertArrayHasKey('kind', $responseContent['getPlugins'][$g]['pluginDeploymentConfig']);
        
        $this->assertNotNull($responseContent['getPlugins'][$g]['pluginDeploymentConfig']['kind']);
        
        $this->assertContains($responseContent['getPlugins'][$g]['pluginDeploymentConfig']['kind'], ['MicroCompDeploymentConfig', 'ServerlessDeploymentConfig']);
        
        $this->assertArrayHasKey('maxItemConcurrency', $responseContent['getPlugins'][$g]['pluginDeploymentConfig']);
        
        if ($responseContent['getPlugins'][$g]['pluginDeploymentConfig']['maxItemConcurrency']) {
        
        $this->assertIsInt($responseContent['getPlugins'][$g]['pluginDeploymentConfig']['maxItemConcurrency']);
        
        }
        
        $this->assertArrayHasKey('triggers', $responseContent['getPlugins'][$g]['pluginDeploymentConfig']);
        
        if ($responseContent['getPlugins'][$g]['pluginDeploymentConfig']['triggers']) {
        
        $this->assertIsArray($responseContent['getPlugins'][$g]['pluginDeploymentConfig']['triggers']);
        
        for($f = 0; $f < count($responseContent['getPlugins'][$g]['pluginDeploymentConfig']['triggers']); $f++) {
        
        $this->assertNotNull($responseContent['getPlugins'][$g]['pluginDeploymentConfig']['triggers'][$f]);
        
        $this->assertContains($responseContent['getPlugins'][$g]['pluginDeploymentConfig']['triggers'][$f], ['AfterCreate', 'AfterDelete', 'AfterUpdate', 'AfterUpsert', 'BeforeCreate', 'BeforeDelete', 'BeforeUpdate', 'BeforeUpsert']);
        
        }
        
        }
        
        $this->assertArrayHasKey('config', $responseContent['getPlugins'][$g]);
        
        $this->assertNotNull($responseContent['getPlugins'][$g]['config']);
        
        $this->assertArrayHasKey('ioSchemas', $responseContent['getPlugins'][$g]['config']);
        
        if ($responseContent['getPlugins'][$g]['config']['ioSchemas']) {
        
        $this->assertIsArray($responseContent['getPlugins'][$g]['config']['ioSchemas']);
        
        for($f = 0; $f < count($responseContent['getPlugins'][$g]['config']['ioSchemas']); $f++) {
        
        $this->assertNotNull($responseContent['getPlugins'][$g]['config']['ioSchemas'][$f]);
        
        $this->assertArrayHasKey('name', $responseContent['getPlugins'][$g]['config']['ioSchemas'][$f]);
        
        $this->assertNotNull($responseContent['getPlugins'][$g]['config']['ioSchemas'][$f]['name']);
        
        $this->assertIsString($responseContent['getPlugins'][$g]['config']['ioSchemas'][$f]['name']);
        
        $this->assertArrayHasKey('description', $responseContent['getPlugins'][$g]['config']['ioSchemas'][$f]);
        
        if ($responseContent['getPlugins'][$g]['config']['ioSchemas'][$f]['description']) {
        
        $this->assertIsString($responseContent['getPlugins'][$g]['config']['ioSchemas'][$f]['description']);
        
        }
        
        $this->assertArrayHasKey('type', $responseContent['getPlugins'][$g]['config']['ioSchemas'][$f]);
        
        $this->assertNotNull($responseContent['getPlugins'][$g]['config']['ioSchemas'][$f]['type']);
        
        $this->assertContains($responseContent['getPlugins'][$g]['config']['ioSchemas'][$f]['type'], ['Read', 'Write']);
        
        }
        
        }
        
        }
        

    }
}