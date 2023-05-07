<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qf1a73cd3b39d4dbcbc5a8f32eba2fb3cTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  authorityGroups {\n    _id\n    name\n    updatedAt\n    HTTPHeader\n    IP\n    UserGroup {\n      _id\n      fullname\n      email\n      lastname\n    }\n  }\n}\n","variables":{"query":{"match_all":{}},"sort":[{"_id":"desc"}]},"operation_name":null,"created_at":"2023-05-07 20:55:38","updated_at":"2023-05-07 20:55:38","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('authorityGroups', $responseContent);
        
        $this->assertNotNull($responseContent['authorityGroups']);
        
        $this->assertIsArray($responseContent['authorityGroups']);
        
        for($g = 0; $g < count($responseContent['authorityGroups']); $g++) {
        
        $this->assertNotNull($responseContent['authorityGroups'][$g]);
        
        $this->assertArrayHasKey('_id', $responseContent['authorityGroups'][$g]);
        
        $this->assertNotNull($responseContent['authorityGroups'][$g]['_id']);
        
        $this->assertArrayHasKey('name', $responseContent['authorityGroups'][$g]);
        
        $this->assertNotNull($responseContent['authorityGroups'][$g]['name']);
        
        $this->assertIsString($responseContent['authorityGroups'][$g]['name']);
        
        $this->assertArrayHasKey('updatedAt', $responseContent['authorityGroups'][$g]);
        
        $this->assertNotNull($responseContent['authorityGroups'][$g]['updatedAt']);
        
        $this->assertArrayHasKey('HTTPHeader', $responseContent['authorityGroups'][$g]);
        
        if ($responseContent['authorityGroups'][$g]['HTTPHeader']) {
        
        $this->assertIsArray($responseContent['authorityGroups'][$g]['HTTPHeader']);
        
        for($f = 0; $f < count($responseContent['authorityGroups'][$g]['HTTPHeader']); $f++) {
        
        $this->assertNotNull($responseContent['authorityGroups'][$g]['HTTPHeader'][$f]);
        
        }
        
        }
        
        $this->assertArrayHasKey('IP', $responseContent['authorityGroups'][$g]);
        
        if ($responseContent['authorityGroups'][$g]['IP']) {
        
        $this->assertIsArray($responseContent['authorityGroups'][$g]['IP']);
        
        for($f = 0; $f < count($responseContent['authorityGroups'][$g]['IP']); $f++) {
        
        $this->assertNotNull($responseContent['authorityGroups'][$g]['IP'][$f]);
        
        $this->assertIsString($responseContent['authorityGroups'][$g]['IP'][$f]);
        
        }
        
        }
        
        $this->assertArrayHasKey('UserGroup', $responseContent['authorityGroups'][$g]);
        
        if ($responseContent['authorityGroups'][$g]['UserGroup']) {
        
        $this->assertIsArray($responseContent['authorityGroups'][$g]['UserGroup']);
        
        for($f = 0; $f < count($responseContent['authorityGroups'][$g]['UserGroup']); $f++) {
        
        $this->assertNotNull($responseContent['authorityGroups'][$g]['UserGroup'][$f]);
        
        $this->assertArrayHasKey('_id', $responseContent['authorityGroups'][$g]['UserGroup'][$f]);
        
        $this->assertNotNull($responseContent['authorityGroups'][$g]['UserGroup'][$f]['_id']);
        
        $this->assertArrayHasKey('fullname', $responseContent['authorityGroups'][$g]['UserGroup'][$f]);
        
        if ($responseContent['authorityGroups'][$g]['UserGroup'][$f]['fullname']) {
        
        $this->assertIsString($responseContent['authorityGroups'][$g]['UserGroup'][$f]['fullname']);
        
        }
        
        $this->assertArrayHasKey('email', $responseContent['authorityGroups'][$g]['UserGroup'][$f]);
        
        $this->assertNotNull($responseContent['authorityGroups'][$g]['UserGroup'][$f]['email']);
        
        $this->assertIsString($responseContent['authorityGroups'][$g]['UserGroup'][$f]['email']);
        
        $this->assertArrayHasKey('lastname', $responseContent['authorityGroups'][$g]['UserGroup'][$f]);
        
        $this->assertNotNull($responseContent['authorityGroups'][$g]['UserGroup'][$f]['lastname']);
        
        $this->assertIsString($responseContent['authorityGroups'][$g]['UserGroup'][$f]['lastname']);
        
        }
        
        }
        
        }
        

    }
}