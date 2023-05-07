<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q2e2f93a1d2884cdba93617ab462c1197Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  locations {\n    firstName\n    lastName\n    name\n    about\n    aboutShort\n    company\n    tagline\n    image {\n      title\n    }\n    type\n    social {\n      homepage\n      mastodon\n      twitter\n      github\n      facebook\n      googleMaps\n      medium\n      instagram\n      linkedin\n      youtube\n      vk\n      pinterest\n      vimeo\n      dribble\n      devto\n      twitch\n    }\n    keywords\n    location {\n      name\n      about\n      city\n      address\n    }\n  }\n}\n","variables":null,"created_at":"2023-05-05 18:46:39","updated_at":"2023-05-05 18:46:39","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:3000/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('locations', $responseContent);
        
        $this->assertNotNull($responseContent['locations']);
        
        $this->assertIsArray($responseContent['locations']);
        
        for($g = 0; $g < count($responseContent['locations']); $g++) {
        
        $this->assertNotNull($responseContent['locations'][$g]);
        
        $this->assertArrayHasKey('firstName', $responseContent['locations'][$g]);
        
        $this->assertNotNull($responseContent['locations'][$g]['firstName']);
        
        $this->assertIsString($responseContent['locations'][$g]['firstName']);
        
        $this->assertArrayHasKey('lastName', $responseContent['locations'][$g]);
        
        $this->assertNotNull($responseContent['locations'][$g]['lastName']);
        
        $this->assertIsString($responseContent['locations'][$g]['lastName']);
        
        $this->assertArrayHasKey('name', $responseContent['locations'][$g]);
        
        $this->assertNotNull($responseContent['locations'][$g]['name']);
        
        $this->assertIsString($responseContent['locations'][$g]['name']);
        
        $this->assertArrayHasKey('about', $responseContent['locations'][$g]);
        
        $this->assertNotNull($responseContent['locations'][$g]['about']);
        
        $this->assertIsString($responseContent['locations'][$g]['about']);
        
        $this->assertArrayHasKey('aboutShort', $responseContent['locations'][$g]);
        
        if ($responseContent['locations'][$g]['aboutShort']) {
        
        $this->assertIsString($responseContent['locations'][$g]['aboutShort']);
        
        }
        
        $this->assertArrayHasKey('company', $responseContent['locations'][$g]);
        
        if ($responseContent['locations'][$g]['company']) {
        
        $this->assertIsString($responseContent['locations'][$g]['company']);
        
        }
        
        $this->assertArrayHasKey('tagline', $responseContent['locations'][$g]);
        
        if ($responseContent['locations'][$g]['tagline']) {
        
        $this->assertIsString($responseContent['locations'][$g]['tagline']);
        
        }
        
        $this->assertArrayHasKey('image', $responseContent['locations'][$g]);
        
        $this->assertNotNull($responseContent['locations'][$g]['image']);
        
        $this->assertArrayHasKey('title', $responseContent['locations'][$g]['image']);
        
        if ($responseContent['locations'][$g]['image']['title']) {
        
        $this->assertIsString($responseContent['locations'][$g]['image']['title']);
        
        }
        
        $this->assertArrayHasKey('type', $responseContent['locations'][$g]);
        
        $this->assertNotNull($responseContent['locations'][$g]['type']);
        
        $this->assertIsArray($responseContent['locations'][$g]['type']);
        
        for($f = 0; $f < count($responseContent['locations'][$g]['type']); $f++) {
        
        $this->assertNotNull($responseContent['locations'][$g]['type'][$f]);
        
        $this->assertContains($responseContent['locations'][$g]['type'][$f], ['PRESS', 'SPEAKER', 'TALK', 'LIGHTNING_TALK', 'KEYNOTE', 'WORKSHOP', 'WORKSHOP_HOST', 'ORGANIZER', 'SPONSOR', 'GOLD_SPONSOR', 'SILVER_SPONSOR', 'BRONZE_SPONSOR', 'PLATFORM_SPONSOR', 'PARTNER', 'ATTENDEE']);
        
        }
        
        $this->assertArrayHasKey('social', $responseContent['locations'][$g]);
        
        $this->assertNotNull($responseContent['locations'][$g]['social']);
        
        $this->assertArrayHasKey('homepage', $responseContent['locations'][$g]['social']);
        
        if ($responseContent['locations'][$g]['social']['homepage']) {
        
        $this->assertIsString($responseContent['locations'][$g]['social']['homepage']);
        
        }
        
        $this->assertArrayHasKey('mastodon', $responseContent['locations'][$g]['social']);
        
        if ($responseContent['locations'][$g]['social']['mastodon']) {
        
        $this->assertIsString($responseContent['locations'][$g]['social']['mastodon']);
        
        }
        
        $this->assertArrayHasKey('twitter', $responseContent['locations'][$g]['social']);
        
        if ($responseContent['locations'][$g]['social']['twitter']) {
        
        $this->assertIsString($responseContent['locations'][$g]['social']['twitter']);
        
        }
        
        $this->assertArrayHasKey('github', $responseContent['locations'][$g]['social']);
        
        if ($responseContent['locations'][$g]['social']['github']) {
        
        $this->assertIsString($responseContent['locations'][$g]['social']['github']);
        
        }
        
        $this->assertArrayHasKey('facebook', $responseContent['locations'][$g]['social']);
        
        if ($responseContent['locations'][$g]['social']['facebook']) {
        
        $this->assertIsString($responseContent['locations'][$g]['social']['facebook']);
        
        }
        
        $this->assertArrayHasKey('googleMaps', $responseContent['locations'][$g]['social']);
        
        if ($responseContent['locations'][$g]['social']['googleMaps']) {
        
        $this->assertIsString($responseContent['locations'][$g]['social']['googleMaps']);
        
        }
        
        $this->assertArrayHasKey('medium', $responseContent['locations'][$g]['social']);
        
        if ($responseContent['locations'][$g]['social']['medium']) {
        
        $this->assertIsString($responseContent['locations'][$g]['social']['medium']);
        
        }
        
        $this->assertArrayHasKey('instagram', $responseContent['locations'][$g]['social']);
        
        if ($responseContent['locations'][$g]['social']['instagram']) {
        
        $this->assertIsString($responseContent['locations'][$g]['social']['instagram']);
        
        }
        
        $this->assertArrayHasKey('linkedin', $responseContent['locations'][$g]['social']);
        
        if ($responseContent['locations'][$g]['social']['linkedin']) {
        
        $this->assertIsString($responseContent['locations'][$g]['social']['linkedin']);
        
        }
        
        $this->assertArrayHasKey('youtube', $responseContent['locations'][$g]['social']);
        
        if ($responseContent['locations'][$g]['social']['youtube']) {
        
        $this->assertIsString($responseContent['locations'][$g]['social']['youtube']);
        
        }
        
        $this->assertArrayHasKey('vk', $responseContent['locations'][$g]['social']);
        
        if ($responseContent['locations'][$g]['social']['vk']) {
        
        $this->assertIsString($responseContent['locations'][$g]['social']['vk']);
        
        }
        
        $this->assertArrayHasKey('pinterest', $responseContent['locations'][$g]['social']);
        
        if ($responseContent['locations'][$g]['social']['pinterest']) {
        
        $this->assertIsString($responseContent['locations'][$g]['social']['pinterest']);
        
        }
        
        $this->assertArrayHasKey('vimeo', $responseContent['locations'][$g]['social']);
        
        if ($responseContent['locations'][$g]['social']['vimeo']) {
        
        $this->assertIsString($responseContent['locations'][$g]['social']['vimeo']);
        
        }
        
        $this->assertArrayHasKey('dribble', $responseContent['locations'][$g]['social']);
        
        if ($responseContent['locations'][$g]['social']['dribble']) {
        
        $this->assertIsString($responseContent['locations'][$g]['social']['dribble']);
        
        }
        
        $this->assertArrayHasKey('devto', $responseContent['locations'][$g]['social']);
        
        if ($responseContent['locations'][$g]['social']['devto']) {
        
        $this->assertIsString($responseContent['locations'][$g]['social']['devto']);
        
        }
        
        $this->assertArrayHasKey('twitch', $responseContent['locations'][$g]['social']);
        
        if ($responseContent['locations'][$g]['social']['twitch']) {
        
        $this->assertIsString($responseContent['locations'][$g]['social']['twitch']);
        
        }
        
        $this->assertArrayHasKey('keywords', $responseContent['locations'][$g]);
        
        if ($responseContent['locations'][$g]['keywords']) {
        
        $this->assertIsArray($responseContent['locations'][$g]['keywords']);
        
        for($f = 0; $f < count($responseContent['locations'][$g]['keywords']); $f++) {
        
        $this->assertNotNull($responseContent['locations'][$g]['keywords'][$f]);
        
        $this->assertIsString($responseContent['locations'][$g]['keywords'][$f]);
        
        }
        
        }
        
        $this->assertArrayHasKey('location', $responseContent['locations'][$g]);
        
        $this->assertNotNull($responseContent['locations'][$g]['location']);
        
        $this->assertArrayHasKey('name', $responseContent['locations'][$g]['location']);
        
        if ($responseContent['locations'][$g]['location']['name']) {
        
        $this->assertIsString($responseContent['locations'][$g]['location']['name']);
        
        }
        
        $this->assertArrayHasKey('about', $responseContent['locations'][$g]['location']);
        
        if ($responseContent['locations'][$g]['location']['about']) {
        
        $this->assertIsString($responseContent['locations'][$g]['location']['about']);
        
        }
        
        $this->assertArrayHasKey('city', $responseContent['locations'][$g]['location']);
        
        if ($responseContent['locations'][$g]['location']['city']) {
        
        $this->assertIsString($responseContent['locations'][$g]['location']['city']);
        
        }
        
        $this->assertArrayHasKey('address', $responseContent['locations'][$g]['location']);
        
        if ($responseContent['locations'][$g]['location']['address']) {
        
        $this->assertIsString($responseContent['locations'][$g]['location']['address']);
        
        }
        
        }
        

    }
}