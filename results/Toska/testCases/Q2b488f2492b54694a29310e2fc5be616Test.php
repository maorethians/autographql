<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q2b488f2492b54694a29310e2fc5be616Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  conferences {\n    id\n    name\n    allSpeakers {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    speakers {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    keynoteSpeakers {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    fullTalkSpeakers {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    lightningTalkSpeakers {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    workshopInstructors {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    \n  }\n}","variables":null,"created_at":"2023-05-05 18:26:10","updated_at":"2023-05-05 18:26:10","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:3000/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('conferences', $responseContent);
        
        $this->assertNotNull($responseContent['conferences']);
        
        $this->assertIsArray($responseContent['conferences']);
        
        for($g = 0; $g < count($responseContent['conferences']); $g++) {
        
        $this->assertNotNull($responseContent['conferences'][$g]);
        
        $this->assertArrayHasKey('id', $responseContent['conferences'][$g]);
        
        $this->assertNotNull($responseContent['conferences'][$g]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['conferences'][$g]);
        
        $this->assertNotNull($responseContent['conferences'][$g]['name']);
        
        $this->assertIsString($responseContent['conferences'][$g]['name']);
        
        $this->assertArrayHasKey('allSpeakers', $responseContent['conferences'][$g]);
        
        if ($responseContent['conferences'][$g]['allSpeakers']) {
        
        $this->assertIsArray($responseContent['conferences'][$g]['allSpeakers']);
        
        for($f = 0; $f < count($responseContent['conferences'][$g]['allSpeakers']); $f++) {
        
        $this->assertNotNull($responseContent['conferences'][$g]['allSpeakers'][$f]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conferences'][$g]['allSpeakers'][$f]);
        
        if ($responseContent['conferences'][$g]['allSpeakers'][$f]['aboutShort']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['allSpeakers'][$f]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conferences'][$g]['allSpeakers'][$f]);
        
        if ($responseContent['conferences'][$g]['allSpeakers'][$f]['company']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['allSpeakers'][$f]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conferences'][$g]['allSpeakers'][$f]);
        
        if ($responseContent['conferences'][$g]['allSpeakers'][$f]['tagline']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['allSpeakers'][$f]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conferences'][$g]['allSpeakers'][$f]);
        
        if ($responseContent['conferences'][$g]['allSpeakers'][$f]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conferences'][$g]['allSpeakers'][$f]['noPhotography']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('speakers', $responseContent['conferences'][$g]);
        
        if ($responseContent['conferences'][$g]['speakers']) {
        
        $this->assertIsArray($responseContent['conferences'][$g]['speakers']);
        
        for($f = 0; $f < count($responseContent['conferences'][$g]['speakers']); $f++) {
        
        $this->assertNotNull($responseContent['conferences'][$g]['speakers'][$f]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conferences'][$g]['speakers'][$f]);
        
        if ($responseContent['conferences'][$g]['speakers'][$f]['aboutShort']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['speakers'][$f]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conferences'][$g]['speakers'][$f]);
        
        if ($responseContent['conferences'][$g]['speakers'][$f]['company']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['speakers'][$f]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conferences'][$g]['speakers'][$f]);
        
        if ($responseContent['conferences'][$g]['speakers'][$f]['tagline']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['speakers'][$f]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conferences'][$g]['speakers'][$f]);
        
        if ($responseContent['conferences'][$g]['speakers'][$f]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conferences'][$g]['speakers'][$f]['noPhotography']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('keynoteSpeakers', $responseContent['conferences'][$g]);
        
        if ($responseContent['conferences'][$g]['keynoteSpeakers']) {
        
        $this->assertIsArray($responseContent['conferences'][$g]['keynoteSpeakers']);
        
        for($f = 0; $f < count($responseContent['conferences'][$g]['keynoteSpeakers']); $f++) {
        
        $this->assertNotNull($responseContent['conferences'][$g]['keynoteSpeakers'][$f]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conferences'][$g]['keynoteSpeakers'][$f]);
        
        if ($responseContent['conferences'][$g]['keynoteSpeakers'][$f]['aboutShort']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['keynoteSpeakers'][$f]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conferences'][$g]['keynoteSpeakers'][$f]);
        
        if ($responseContent['conferences'][$g]['keynoteSpeakers'][$f]['company']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['keynoteSpeakers'][$f]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conferences'][$g]['keynoteSpeakers'][$f]);
        
        if ($responseContent['conferences'][$g]['keynoteSpeakers'][$f]['tagline']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['keynoteSpeakers'][$f]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conferences'][$g]['keynoteSpeakers'][$f]);
        
        if ($responseContent['conferences'][$g]['keynoteSpeakers'][$f]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conferences'][$g]['keynoteSpeakers'][$f]['noPhotography']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('fullTalkSpeakers', $responseContent['conferences'][$g]);
        
        if ($responseContent['conferences'][$g]['fullTalkSpeakers']) {
        
        $this->assertIsArray($responseContent['conferences'][$g]['fullTalkSpeakers']);
        
        for($f = 0; $f < count($responseContent['conferences'][$g]['fullTalkSpeakers']); $f++) {
        
        $this->assertNotNull($responseContent['conferences'][$g]['fullTalkSpeakers'][$f]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conferences'][$g]['fullTalkSpeakers'][$f]);
        
        if ($responseContent['conferences'][$g]['fullTalkSpeakers'][$f]['aboutShort']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['fullTalkSpeakers'][$f]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conferences'][$g]['fullTalkSpeakers'][$f]);
        
        if ($responseContent['conferences'][$g]['fullTalkSpeakers'][$f]['company']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['fullTalkSpeakers'][$f]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conferences'][$g]['fullTalkSpeakers'][$f]);
        
        if ($responseContent['conferences'][$g]['fullTalkSpeakers'][$f]['tagline']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['fullTalkSpeakers'][$f]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conferences'][$g]['fullTalkSpeakers'][$f]);
        
        if ($responseContent['conferences'][$g]['fullTalkSpeakers'][$f]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conferences'][$g]['fullTalkSpeakers'][$f]['noPhotography']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('lightningTalkSpeakers', $responseContent['conferences'][$g]);
        
        if ($responseContent['conferences'][$g]['lightningTalkSpeakers']) {
        
        $this->assertIsArray($responseContent['conferences'][$g]['lightningTalkSpeakers']);
        
        for($f = 0; $f < count($responseContent['conferences'][$g]['lightningTalkSpeakers']); $f++) {
        
        $this->assertNotNull($responseContent['conferences'][$g]['lightningTalkSpeakers'][$f]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conferences'][$g]['lightningTalkSpeakers'][$f]);
        
        if ($responseContent['conferences'][$g]['lightningTalkSpeakers'][$f]['aboutShort']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['lightningTalkSpeakers'][$f]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conferences'][$g]['lightningTalkSpeakers'][$f]);
        
        if ($responseContent['conferences'][$g]['lightningTalkSpeakers'][$f]['company']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['lightningTalkSpeakers'][$f]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conferences'][$g]['lightningTalkSpeakers'][$f]);
        
        if ($responseContent['conferences'][$g]['lightningTalkSpeakers'][$f]['tagline']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['lightningTalkSpeakers'][$f]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conferences'][$g]['lightningTalkSpeakers'][$f]);
        
        if ($responseContent['conferences'][$g]['lightningTalkSpeakers'][$f]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conferences'][$g]['lightningTalkSpeakers'][$f]['noPhotography']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('workshopInstructors', $responseContent['conferences'][$g]);
        
        if ($responseContent['conferences'][$g]['workshopInstructors']) {
        
        $this->assertIsArray($responseContent['conferences'][$g]['workshopInstructors']);
        
        for($f = 0; $f < count($responseContent['conferences'][$g]['workshopInstructors']); $f++) {
        
        $this->assertNotNull($responseContent['conferences'][$g]['workshopInstructors'][$f]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conferences'][$g]['workshopInstructors'][$f]);
        
        if ($responseContent['conferences'][$g]['workshopInstructors'][$f]['aboutShort']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['workshopInstructors'][$f]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conferences'][$g]['workshopInstructors'][$f]);
        
        if ($responseContent['conferences'][$g]['workshopInstructors'][$f]['company']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['workshopInstructors'][$f]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conferences'][$g]['workshopInstructors'][$f]);
        
        if ($responseContent['conferences'][$g]['workshopInstructors'][$f]['tagline']) {
        
        $this->assertIsString($responseContent['conferences'][$g]['workshopInstructors'][$f]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conferences'][$g]['workshopInstructors'][$f]);
        
        if ($responseContent['conferences'][$g]['workshopInstructors'][$f]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conferences'][$g]['workshopInstructors'][$f]['noPhotography']);
        
        }
        
        }
        
        }
        
        }
        

    }
}