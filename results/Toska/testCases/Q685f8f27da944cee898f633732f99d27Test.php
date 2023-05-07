<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q685f8f27da944cee898f633732f99d27Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  themes {\n    id\n    fonts {\n      primary\n      secondary\n      variants {\n        family\n        weight\n        style\n        fileName\n        href\n      }\n    }\n    textures {\n      url\n      title\n      style {\n        backgroundSize\n      }\n    }\n    colors {\n      primary\n      secondary\n      text\n      background\n    }\n    logos\n  }\n}\n","variables":null,"created_at":"2023-05-05 19:01:20","updated_at":"2023-05-05 19:01:20","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:3000/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('themes', $responseContent);
        
        $this->assertNotNull($responseContent['themes']);
        
        $this->assertIsArray($responseContent['themes']);
        
        for($g = 0; $g < count($responseContent['themes']); $g++) {
        
        $this->assertNotNull($responseContent['themes'][$g]);
        
        $this->assertArrayHasKey('id', $responseContent['themes'][$g]);
        
        $this->assertNotNull($responseContent['themes'][$g]['id']);
        
        $this->assertArrayHasKey('fonts', $responseContent['themes'][$g]);
        
        $this->assertNotNull($responseContent['themes'][$g]['fonts']);
        
        $this->assertArrayHasKey('primary', $responseContent['themes'][$g]['fonts']);
        
        $this->assertNotNull($responseContent['themes'][$g]['fonts']['primary']);
        
        $this->assertIsString($responseContent['themes'][$g]['fonts']['primary']);
        
        $this->assertArrayHasKey('secondary', $responseContent['themes'][$g]['fonts']);
        
        $this->assertNotNull($responseContent['themes'][$g]['fonts']['secondary']);
        
        $this->assertIsString($responseContent['themes'][$g]['fonts']['secondary']);
        
        $this->assertArrayHasKey('variants', $responseContent['themes'][$g]['fonts']);
        
        $this->assertNotNull($responseContent['themes'][$g]['fonts']['variants']);
        
        $this->assertIsArray($responseContent['themes'][$g]['fonts']['variants']);
        
        for($f = 0; $f < count($responseContent['themes'][$g]['fonts']['variants']); $f++) {
        
        $this->assertNotNull($responseContent['themes'][$g]['fonts']['variants'][$f]);
        
        $this->assertArrayHasKey('family', $responseContent['themes'][$g]['fonts']['variants'][$f]);
        
        if ($responseContent['themes'][$g]['fonts']['variants'][$f]['family']) {
        
        $this->assertIsString($responseContent['themes'][$g]['fonts']['variants'][$f]['family']);
        
        }
        
        $this->assertArrayHasKey('weight', $responseContent['themes'][$g]['fonts']['variants'][$f]);
        
        if ($responseContent['themes'][$g]['fonts']['variants'][$f]['weight']) {
        
        $this->assertIsString($responseContent['themes'][$g]['fonts']['variants'][$f]['weight']);
        
        }
        
        $this->assertArrayHasKey('style', $responseContent['themes'][$g]['fonts']['variants'][$f]);
        
        if ($responseContent['themes'][$g]['fonts']['variants'][$f]['style']) {
        
        $this->assertIsString($responseContent['themes'][$g]['fonts']['variants'][$f]['style']);
        
        }
        
        $this->assertArrayHasKey('fileName', $responseContent['themes'][$g]['fonts']['variants'][$f]);
        
        if ($responseContent['themes'][$g]['fonts']['variants'][$f]['fileName']) {
        
        $this->assertIsString($responseContent['themes'][$g]['fonts']['variants'][$f]['fileName']);
        
        }
        
        $this->assertArrayHasKey('href', $responseContent['themes'][$g]['fonts']['variants'][$f]);
        
        if ($responseContent['themes'][$g]['fonts']['variants'][$f]['href']) {
        
        $this->assertIsString($responseContent['themes'][$g]['fonts']['variants'][$f]['href']);
        
        }
        
        }
        
        $this->assertArrayHasKey('textures', $responseContent['themes'][$g]);
        
        $this->assertNotNull($responseContent['themes'][$g]['textures']);
        
        $this->assertIsArray($responseContent['themes'][$g]['textures']);
        
        for($f = 0; $f < count($responseContent['themes'][$g]['textures']); $f++) {
        
        $this->assertNotNull($responseContent['themes'][$g]['textures'][$f]);
        
        $this->assertArrayHasKey('url', $responseContent['themes'][$g]['textures'][$f]);
        
        $this->assertNotNull($responseContent['themes'][$g]['textures'][$f]['url']);
        
        $this->assertIsString($responseContent['themes'][$g]['textures'][$f]['url']);
        
        $this->assertArrayHasKey('title', $responseContent['themes'][$g]['textures'][$f]);
        
        if ($responseContent['themes'][$g]['textures'][$f]['title']) {
        
        $this->assertIsString($responseContent['themes'][$g]['textures'][$f]['title']);
        
        }
        
        $this->assertArrayHasKey('style', $responseContent['themes'][$g]['textures'][$f]);
        
        if ($responseContent['themes'][$g]['textures'][$f]['style']) {
        
        $this->assertArrayHasKey('backgroundSize', $responseContent['themes'][$g]['textures'][$f]['style']);
        
        $this->assertNotNull($responseContent['themes'][$g]['textures'][$f]['style']['backgroundSize']);
        
        $this->assertIsString($responseContent['themes'][$g]['textures'][$f]['style']['backgroundSize']);
        
        }
        
        }
        
        $this->assertArrayHasKey('colors', $responseContent['themes'][$g]);
        
        $this->assertNotNull($responseContent['themes'][$g]['colors']);
        
        $this->assertArrayHasKey('primary', $responseContent['themes'][$g]['colors']);
        
        $this->assertNotNull($responseContent['themes'][$g]['colors']['primary']);
        
        $this->assertIsString($responseContent['themes'][$g]['colors']['primary']);
        
        $this->assertArrayHasKey('secondary', $responseContent['themes'][$g]['colors']);
        
        $this->assertNotNull($responseContent['themes'][$g]['colors']['secondary']);
        
        $this->assertIsString($responseContent['themes'][$g]['colors']['secondary']);
        
        $this->assertArrayHasKey('text', $responseContent['themes'][$g]['colors']);
        
        $this->assertNotNull($responseContent['themes'][$g]['colors']['text']);
        
        $this->assertIsString($responseContent['themes'][$g]['colors']['text']);
        
        $this->assertArrayHasKey('background', $responseContent['themes'][$g]['colors']);
        
        $this->assertNotNull($responseContent['themes'][$g]['colors']['background']);
        
        $this->assertIsString($responseContent['themes'][$g]['colors']['background']);
        
        $this->assertArrayHasKey('logos', $responseContent['themes'][$g]);
        
        $this->assertNotNull($responseContent['themes'][$g]['logos']);
        
        }
        

    }
}