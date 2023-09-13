<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PersonnagesControllerTest extends WebTestCase
{
    public function testPersonnagesResponse(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/personnages');

        $response = $client->getResponse();

        $this->assertSame(200, $response->getStatusCode());
        $this->assertJson($response->getContent());

        $data = json_decode($response->getContent(), true);
        $this->assertArrayHasKey('personnage', $data);

    }
}

