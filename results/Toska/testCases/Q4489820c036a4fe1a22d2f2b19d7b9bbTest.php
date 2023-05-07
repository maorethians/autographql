<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q4489820c036a4fe1a22d2f2b19d7b9bbTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  people {\n    firstName\n    name\n    lastName\n    aboutShort\n    company\n    tagline\n    image {\n      title\n    }\n    type\n    social {\n      homepage\n      mastodon\n      twitter\n      github\n      facebook\n      googleMaps\n      medium\n      instagram\n      linkedin\n      youtube\n      vk\n      pinterest\n      vimeo\n      dribble\n      devto\n      twitch\n    }\n  }\n}\n","variables":null,"created_at":"2023-05-05 18:42:13","updated_at":"2023-05-05 18:42:13","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:3000/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('people', $responseContent);
        
        $this->assertNotNull($responseContent['people']);
        
        $this->assertIsArray($responseContent['people']);
        
        for($g = 0; $g < count($responseContent['people']); $g++) {
        
        $this->assertNotNull($responseContent['people'][$g]);
        
        $this->assertArrayHasKey('firstName', $responseContent['people'][$g]);
        
        $this->assertNotNull($responseContent['people'][$g]['firstName']);
        
        $this->assertIsString($responseContent['people'][$g]['firstName']);
        
        $this->assertArrayHasKey('name', $responseContent['people'][$g]);
        
        $this->assertNotNull($responseContent['people'][$g]['name']);
        
        $this->assertIsString($responseContent['people'][$g]['name']);
        
        $this->assertArrayHasKey('lastName', $responseContent['people'][$g]);
        
        $this->assertNotNull($responseContent['people'][$g]['lastName']);
        
        $this->assertIsString($responseContent['people'][$g]['lastName']);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['people'][$g]);
        
        if ($responseContent['people'][$g]['aboutShort']) {
        
        $this->assertIsString($responseContent['people'][$g]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['people'][$g]);
        
        if ($responseContent['people'][$g]['company']) {
        
        $this->assertIsString($responseContent['people'][$g]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['people'][$g]);
        
        if ($responseContent['people'][$g]['tagline']) {
        
        $this->assertIsString($responseContent['people'][$g]['tagline']);
        
        }
        
        $this->assertArrayHasKey('image', $responseContent['people'][$g]);
        
        $this->assertNotNull($responseContent['people'][$g]['image']);
        
        $this->assertArrayHasKey('title', $responseContent['people'][$g]['image']);
        
        if ($responseContent['people'][$g]['image']['title']) {
        
        $this->assertIsString($responseContent['people'][$g]['image']['title']);
        
        }
        
        $this->assertArrayHasKey('type', $responseContent['people'][$g]);
        
        $this->assertNotNull($responseContent['people'][$g]['type']);
        
        $this->assertIsArray($responseContent['people'][$g]['type']);
        
        for($f = 0; $f < count($responseContent['people'][$g]['type']); $f++) {
        
        $this->assertNotNull($responseContent['people'][$g]['type'][$f]);
        
        $this->assertContains($responseContent['people'][$g]['type'][$f], ['PRESS', 'SPEAKER', 'TALK', 'LIGHTNING_TALK', 'KEYNOTE', 'WORKSHOP', 'WORKSHOP_HOST', 'ORGANIZER', 'SPONSOR', 'GOLD_SPONSOR', 'SILVER_SPONSOR', 'BRONZE_SPONSOR', 'PLATFORM_SPONSOR', 'PARTNER', 'ATTENDEE']);
        
        }
        
        $this->assertArrayHasKey('social', $responseContent['people'][$g]);
        
        $this->assertNotNull($responseContent['people'][$g]['social']);
        
        $this->assertArrayHasKey('homepage', $responseContent['people'][$g]['social']);
        
        if ($responseContent['people'][$g]['social']['homepage']) {
        
        $this->assertIsString($responseContent['people'][$g]['social']['homepage']);
        
        }
        
        $this->assertArrayHasKey('mastodon', $responseContent['people'][$g]['social']);
        
        if ($responseContent['people'][$g]['social']['mastodon']) {
        
        $this->assertIsString($responseContent['people'][$g]['social']['mastodon']);
        
        }
        
        $this->assertArrayHasKey('twitter', $responseContent['people'][$g]['social']);
        
        if ($responseContent['people'][$g]['social']['twitter']) {
        
        $this->assertIsString($responseContent['people'][$g]['social']['twitter']);
        
        }
        
        $this->assertArrayHasKey('github', $responseContent['people'][$g]['social']);
        
        if ($responseContent['people'][$g]['social']['github']) {
        
        $this->assertIsString($responseContent['people'][$g]['social']['github']);
        
        }
        
        $this->assertArrayHasKey('facebook', $responseContent['people'][$g]['social']);
        
        if ($responseContent['people'][$g]['social']['facebook']) {
        
        $this->assertIsString($responseContent['people'][$g]['social']['facebook']);
        
        }
        
        $this->assertArrayHasKey('googleMaps', $responseContent['people'][$g]['social']);
        
        if ($responseContent['people'][$g]['social']['googleMaps']) {
        
        $this->assertIsString($responseContent['people'][$g]['social']['googleMaps']);
        
        }
        
        $this->assertArrayHasKey('medium', $responseContent['people'][$g]['social']);
        
        if ($responseContent['people'][$g]['social']['medium']) {
        
        $this->assertIsString($responseContent['people'][$g]['social']['medium']);
        
        }
        
        $this->assertArrayHasKey('instagram', $responseContent['people'][$g]['social']);
        
        if ($responseContent['people'][$g]['social']['instagram']) {
        
        $this->assertIsString($responseContent['people'][$g]['social']['instagram']);
        
        }
        
        $this->assertArrayHasKey('linkedin', $responseContent['people'][$g]['social']);
        
        if ($responseContent['people'][$g]['social']['linkedin']) {
        
        $this->assertIsString($responseContent['people'][$g]['social']['linkedin']);
        
        }
        
        $this->assertArrayHasKey('youtube', $responseContent['people'][$g]['social']);
        
        if ($responseContent['people'][$g]['social']['youtube']) {
        
        $this->assertIsString($responseContent['people'][$g]['social']['youtube']);
        
        }
        
        $this->assertArrayHasKey('vk', $responseContent['people'][$g]['social']);
        
        if ($responseContent['people'][$g]['social']['vk']) {
        
        $this->assertIsString($responseContent['people'][$g]['social']['vk']);
        
        }
        
        $this->assertArrayHasKey('pinterest', $responseContent['people'][$g]['social']);
        
        if ($responseContent['people'][$g]['social']['pinterest']) {
        
        $this->assertIsString($responseContent['people'][$g]['social']['pinterest']);
        
        }
        
        $this->assertArrayHasKey('vimeo', $responseContent['people'][$g]['social']);
        
        if ($responseContent['people'][$g]['social']['vimeo']) {
        
        $this->assertIsString($responseContent['people'][$g]['social']['vimeo']);
        
        }
        
        $this->assertArrayHasKey('dribble', $responseContent['people'][$g]['social']);
        
        if ($responseContent['people'][$g]['social']['dribble']) {
        
        $this->assertIsString($responseContent['people'][$g]['social']['dribble']);
        
        }
        
        $this->assertArrayHasKey('devto', $responseContent['people'][$g]['social']);
        
        if ($responseContent['people'][$g]['social']['devto']) {
        
        $this->assertIsString($responseContent['people'][$g]['social']['devto']);
        
        }
        
        $this->assertArrayHasKey('twitch', $responseContent['people'][$g]['social']);
        
        if ($responseContent['people'][$g]['social']['twitch']) {
        
        $this->assertIsString($responseContent['people'][$g]['social']['twitch']);
        
        }
        
        }
        

    }
}