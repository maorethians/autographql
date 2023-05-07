<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q8a5bd721e1f048958dc911a4821cfd13Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  sponsors {\n    firstName\n    lastName\n    name\n    about\n    aboutShort\n    company\n    tagline\n    image {\n      title\n    }\n    type\n    social {\n      homepage\n      mastodon\n      twitter\n      github\n      facebook\n      googleMaps\n      medium\n      instagram\n      linkedin\n      youtube\n      vk\n      pinterest\n      vimeo\n      dribble\n      devto\n      twitch\n    }\n    keywords\n  }\n}\n","variables":null,"created_at":"2023-05-05 18:49:49","updated_at":"2023-05-05 18:49:49","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:3000/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('sponsors', $responseContent);
        
        $this->assertNotNull($responseContent['sponsors']);
        
        $this->assertIsArray($responseContent['sponsors']);
        
        for($g = 0; $g < count($responseContent['sponsors']); $g++) {
        
        $this->assertNotNull($responseContent['sponsors'][$g]);
        
        $this->assertArrayHasKey('firstName', $responseContent['sponsors'][$g]);
        
        $this->assertNotNull($responseContent['sponsors'][$g]['firstName']);
        
        $this->assertIsString($responseContent['sponsors'][$g]['firstName']);
        
        $this->assertArrayHasKey('lastName', $responseContent['sponsors'][$g]);
        
        $this->assertNotNull($responseContent['sponsors'][$g]['lastName']);
        
        $this->assertIsString($responseContent['sponsors'][$g]['lastName']);
        
        $this->assertArrayHasKey('name', $responseContent['sponsors'][$g]);
        
        $this->assertNotNull($responseContent['sponsors'][$g]['name']);
        
        $this->assertIsString($responseContent['sponsors'][$g]['name']);
        
        $this->assertArrayHasKey('about', $responseContent['sponsors'][$g]);
        
        $this->assertNotNull($responseContent['sponsors'][$g]['about']);
        
        $this->assertIsString($responseContent['sponsors'][$g]['about']);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['sponsors'][$g]);
        
        if ($responseContent['sponsors'][$g]['aboutShort']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['sponsors'][$g]);
        
        if ($responseContent['sponsors'][$g]['company']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['sponsors'][$g]);
        
        if ($responseContent['sponsors'][$g]['tagline']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['tagline']);
        
        }
        
        $this->assertArrayHasKey('image', $responseContent['sponsors'][$g]);
        
        $this->assertNotNull($responseContent['sponsors'][$g]['image']);
        
        $this->assertArrayHasKey('title', $responseContent['sponsors'][$g]['image']);
        
        if ($responseContent['sponsors'][$g]['image']['title']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['image']['title']);
        
        }
        
        $this->assertArrayHasKey('type', $responseContent['sponsors'][$g]);
        
        $this->assertNotNull($responseContent['sponsors'][$g]['type']);
        
        $this->assertIsArray($responseContent['sponsors'][$g]['type']);
        
        for($f = 0; $f < count($responseContent['sponsors'][$g]['type']); $f++) {
        
        $this->assertNotNull($responseContent['sponsors'][$g]['type'][$f]);
        
        $this->assertContains($responseContent['sponsors'][$g]['type'][$f], ['PRESS', 'SPEAKER', 'TALK', 'LIGHTNING_TALK', 'KEYNOTE', 'WORKSHOP', 'WORKSHOP_HOST', 'ORGANIZER', 'SPONSOR', 'GOLD_SPONSOR', 'SILVER_SPONSOR', 'BRONZE_SPONSOR', 'PLATFORM_SPONSOR', 'PARTNER', 'ATTENDEE']);
        
        }
        
        $this->assertArrayHasKey('social', $responseContent['sponsors'][$g]);
        
        $this->assertNotNull($responseContent['sponsors'][$g]['social']);
        
        $this->assertArrayHasKey('homepage', $responseContent['sponsors'][$g]['social']);
        
        if ($responseContent['sponsors'][$g]['social']['homepage']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['social']['homepage']);
        
        }
        
        $this->assertArrayHasKey('mastodon', $responseContent['sponsors'][$g]['social']);
        
        if ($responseContent['sponsors'][$g]['social']['mastodon']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['social']['mastodon']);
        
        }
        
        $this->assertArrayHasKey('twitter', $responseContent['sponsors'][$g]['social']);
        
        if ($responseContent['sponsors'][$g]['social']['twitter']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['social']['twitter']);
        
        }
        
        $this->assertArrayHasKey('github', $responseContent['sponsors'][$g]['social']);
        
        if ($responseContent['sponsors'][$g]['social']['github']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['social']['github']);
        
        }
        
        $this->assertArrayHasKey('facebook', $responseContent['sponsors'][$g]['social']);
        
        if ($responseContent['sponsors'][$g]['social']['facebook']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['social']['facebook']);
        
        }
        
        $this->assertArrayHasKey('googleMaps', $responseContent['sponsors'][$g]['social']);
        
        if ($responseContent['sponsors'][$g]['social']['googleMaps']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['social']['googleMaps']);
        
        }
        
        $this->assertArrayHasKey('medium', $responseContent['sponsors'][$g]['social']);
        
        if ($responseContent['sponsors'][$g]['social']['medium']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['social']['medium']);
        
        }
        
        $this->assertArrayHasKey('instagram', $responseContent['sponsors'][$g]['social']);
        
        if ($responseContent['sponsors'][$g]['social']['instagram']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['social']['instagram']);
        
        }
        
        $this->assertArrayHasKey('linkedin', $responseContent['sponsors'][$g]['social']);
        
        if ($responseContent['sponsors'][$g]['social']['linkedin']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['social']['linkedin']);
        
        }
        
        $this->assertArrayHasKey('youtube', $responseContent['sponsors'][$g]['social']);
        
        if ($responseContent['sponsors'][$g]['social']['youtube']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['social']['youtube']);
        
        }
        
        $this->assertArrayHasKey('vk', $responseContent['sponsors'][$g]['social']);
        
        if ($responseContent['sponsors'][$g]['social']['vk']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['social']['vk']);
        
        }
        
        $this->assertArrayHasKey('pinterest', $responseContent['sponsors'][$g]['social']);
        
        if ($responseContent['sponsors'][$g]['social']['pinterest']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['social']['pinterest']);
        
        }
        
        $this->assertArrayHasKey('vimeo', $responseContent['sponsors'][$g]['social']);
        
        if ($responseContent['sponsors'][$g]['social']['vimeo']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['social']['vimeo']);
        
        }
        
        $this->assertArrayHasKey('dribble', $responseContent['sponsors'][$g]['social']);
        
        if ($responseContent['sponsors'][$g]['social']['dribble']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['social']['dribble']);
        
        }
        
        $this->assertArrayHasKey('devto', $responseContent['sponsors'][$g]['social']);
        
        if ($responseContent['sponsors'][$g]['social']['devto']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['social']['devto']);
        
        }
        
        $this->assertArrayHasKey('twitch', $responseContent['sponsors'][$g]['social']);
        
        if ($responseContent['sponsors'][$g]['social']['twitch']) {
        
        $this->assertIsString($responseContent['sponsors'][$g]['social']['twitch']);
        
        }
        
        $this->assertArrayHasKey('keywords', $responseContent['sponsors'][$g]);
        
        if ($responseContent['sponsors'][$g]['keywords']) {
        
        $this->assertIsArray($responseContent['sponsors'][$g]['keywords']);
        
        for($f = 0; $f < count($responseContent['sponsors'][$g]['keywords']); $f++) {
        
        $this->assertNotNull($responseContent['sponsors'][$g]['keywords'][$f]);
        
        $this->assertIsString($responseContent['sponsors'][$g]['keywords'][$f]);
        
        }
        
        }
        
        }
        

    }
}