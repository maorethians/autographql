<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q551fc82398c14e1781797a5db654c75eTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  conference(id: \"freezing-edge-2020\") {\n    id\n    name\n    schedules {\n      description\n    }\n    allSpeakers {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    speakers {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    keynoteSpeakers {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    fullTalkSpeakers {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    lightningTalkSpeakers {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    workshopInstructors {\n      aboutShort\n      company\n      tagline\n      noPhotography\n    }\n    \n  }\n}","variables":null,"created_at":"2023-05-05 18:37:03","updated_at":"2023-05-05 18:37:03","times_called":2}
JSON;

        
        $response = $client->request('POST', 'http://localhost:3000/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('conference', $responseContent);
        
        $this->assertNotNull($responseContent['conference']);
        
        $this->assertArrayHasKey('id', $responseContent['conference']);
        
        $this->assertNotNull($responseContent['conference']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['conference']);
        
        $this->assertNotNull($responseContent['conference']['name']);
        
        $this->assertIsString($responseContent['conference']['name']);
        
        $this->assertArrayHasKey('schedules', $responseContent['conference']);
        
        $this->assertNotNull($responseContent['conference']['schedules']);
        
        $this->assertIsArray($responseContent['conference']['schedules']);
        
        for($g = 0; $g < count($responseContent['conference']['schedules']); $g++) {
        
        $this->assertNotNull($responseContent['conference']['schedules'][$g]);
        
        $this->assertArrayHasKey('description', $responseContent['conference']['schedules'][$g]);
        
        if ($responseContent['conference']['schedules'][$g]['description']) {
        
        $this->assertIsString($responseContent['conference']['schedules'][$g]['description']);
        
        }
        
        }
        
        $this->assertArrayHasKey('allSpeakers', $responseContent['conference']);
        
        if ($responseContent['conference']['allSpeakers']) {
        
        $this->assertIsArray($responseContent['conference']['allSpeakers']);
        
        for($g = 0; $g < count($responseContent['conference']['allSpeakers']); $g++) {
        
        $this->assertNotNull($responseContent['conference']['allSpeakers'][$g]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conference']['allSpeakers'][$g]);
        
        if ($responseContent['conference']['allSpeakers'][$g]['aboutShort']) {
        
        $this->assertIsString($responseContent['conference']['allSpeakers'][$g]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conference']['allSpeakers'][$g]);
        
        if ($responseContent['conference']['allSpeakers'][$g]['company']) {
        
        $this->assertIsString($responseContent['conference']['allSpeakers'][$g]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conference']['allSpeakers'][$g]);
        
        if ($responseContent['conference']['allSpeakers'][$g]['tagline']) {
        
        $this->assertIsString($responseContent['conference']['allSpeakers'][$g]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conference']['allSpeakers'][$g]);
        
        if ($responseContent['conference']['allSpeakers'][$g]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conference']['allSpeakers'][$g]['noPhotography']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('speakers', $responseContent['conference']);
        
        if ($responseContent['conference']['speakers']) {
        
        $this->assertIsArray($responseContent['conference']['speakers']);
        
        for($g = 0; $g < count($responseContent['conference']['speakers']); $g++) {
        
        $this->assertNotNull($responseContent['conference']['speakers'][$g]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conference']['speakers'][$g]);
        
        if ($responseContent['conference']['speakers'][$g]['aboutShort']) {
        
        $this->assertIsString($responseContent['conference']['speakers'][$g]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conference']['speakers'][$g]);
        
        if ($responseContent['conference']['speakers'][$g]['company']) {
        
        $this->assertIsString($responseContent['conference']['speakers'][$g]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conference']['speakers'][$g]);
        
        if ($responseContent['conference']['speakers'][$g]['tagline']) {
        
        $this->assertIsString($responseContent['conference']['speakers'][$g]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conference']['speakers'][$g]);
        
        if ($responseContent['conference']['speakers'][$g]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conference']['speakers'][$g]['noPhotography']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('keynoteSpeakers', $responseContent['conference']);
        
        if ($responseContent['conference']['keynoteSpeakers']) {
        
        $this->assertIsArray($responseContent['conference']['keynoteSpeakers']);
        
        for($g = 0; $g < count($responseContent['conference']['keynoteSpeakers']); $g++) {
        
        $this->assertNotNull($responseContent['conference']['keynoteSpeakers'][$g]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conference']['keynoteSpeakers'][$g]);
        
        if ($responseContent['conference']['keynoteSpeakers'][$g]['aboutShort']) {
        
        $this->assertIsString($responseContent['conference']['keynoteSpeakers'][$g]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conference']['keynoteSpeakers'][$g]);
        
        if ($responseContent['conference']['keynoteSpeakers'][$g]['company']) {
        
        $this->assertIsString($responseContent['conference']['keynoteSpeakers'][$g]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conference']['keynoteSpeakers'][$g]);
        
        if ($responseContent['conference']['keynoteSpeakers'][$g]['tagline']) {
        
        $this->assertIsString($responseContent['conference']['keynoteSpeakers'][$g]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conference']['keynoteSpeakers'][$g]);
        
        if ($responseContent['conference']['keynoteSpeakers'][$g]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conference']['keynoteSpeakers'][$g]['noPhotography']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('fullTalkSpeakers', $responseContent['conference']);
        
        if ($responseContent['conference']['fullTalkSpeakers']) {
        
        $this->assertIsArray($responseContent['conference']['fullTalkSpeakers']);
        
        for($g = 0; $g < count($responseContent['conference']['fullTalkSpeakers']); $g++) {
        
        $this->assertNotNull($responseContent['conference']['fullTalkSpeakers'][$g]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conference']['fullTalkSpeakers'][$g]);
        
        if ($responseContent['conference']['fullTalkSpeakers'][$g]['aboutShort']) {
        
        $this->assertIsString($responseContent['conference']['fullTalkSpeakers'][$g]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conference']['fullTalkSpeakers'][$g]);
        
        if ($responseContent['conference']['fullTalkSpeakers'][$g]['company']) {
        
        $this->assertIsString($responseContent['conference']['fullTalkSpeakers'][$g]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conference']['fullTalkSpeakers'][$g]);
        
        if ($responseContent['conference']['fullTalkSpeakers'][$g]['tagline']) {
        
        $this->assertIsString($responseContent['conference']['fullTalkSpeakers'][$g]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conference']['fullTalkSpeakers'][$g]);
        
        if ($responseContent['conference']['fullTalkSpeakers'][$g]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conference']['fullTalkSpeakers'][$g]['noPhotography']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('lightningTalkSpeakers', $responseContent['conference']);
        
        if ($responseContent['conference']['lightningTalkSpeakers']) {
        
        $this->assertIsArray($responseContent['conference']['lightningTalkSpeakers']);
        
        for($g = 0; $g < count($responseContent['conference']['lightningTalkSpeakers']); $g++) {
        
        $this->assertNotNull($responseContent['conference']['lightningTalkSpeakers'][$g]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conference']['lightningTalkSpeakers'][$g]);
        
        if ($responseContent['conference']['lightningTalkSpeakers'][$g]['aboutShort']) {
        
        $this->assertIsString($responseContent['conference']['lightningTalkSpeakers'][$g]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conference']['lightningTalkSpeakers'][$g]);
        
        if ($responseContent['conference']['lightningTalkSpeakers'][$g]['company']) {
        
        $this->assertIsString($responseContent['conference']['lightningTalkSpeakers'][$g]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conference']['lightningTalkSpeakers'][$g]);
        
        if ($responseContent['conference']['lightningTalkSpeakers'][$g]['tagline']) {
        
        $this->assertIsString($responseContent['conference']['lightningTalkSpeakers'][$g]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conference']['lightningTalkSpeakers'][$g]);
        
        if ($responseContent['conference']['lightningTalkSpeakers'][$g]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conference']['lightningTalkSpeakers'][$g]['noPhotography']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('workshopInstructors', $responseContent['conference']);
        
        if ($responseContent['conference']['workshopInstructors']) {
        
        $this->assertIsArray($responseContent['conference']['workshopInstructors']);
        
        for($g = 0; $g < count($responseContent['conference']['workshopInstructors']); $g++) {
        
        $this->assertNotNull($responseContent['conference']['workshopInstructors'][$g]);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['conference']['workshopInstructors'][$g]);
        
        if ($responseContent['conference']['workshopInstructors'][$g]['aboutShort']) {
        
        $this->assertIsString($responseContent['conference']['workshopInstructors'][$g]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['conference']['workshopInstructors'][$g]);
        
        if ($responseContent['conference']['workshopInstructors'][$g]['company']) {
        
        $this->assertIsString($responseContent['conference']['workshopInstructors'][$g]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['conference']['workshopInstructors'][$g]);
        
        if ($responseContent['conference']['workshopInstructors'][$g]['tagline']) {
        
        $this->assertIsString($responseContent['conference']['workshopInstructors'][$g]['tagline']);
        
        }
        
        $this->assertArrayHasKey('noPhotography', $responseContent['conference']['workshopInstructors'][$g]);
        
        if ($responseContent['conference']['workshopInstructors'][$g]['noPhotography']) {
        
        $this->assertIsBool($responseContent['conference']['workshopInstructors'][$g]['noPhotography']);
        
        }
        
        }
        
        }
        

    }
}