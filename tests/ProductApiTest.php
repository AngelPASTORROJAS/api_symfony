<?php

namespace App\Tests;

use ApiPlatform\Symfony\Bundle\Test\ApiTestCase;

class ProductApiTest extends ApiTestCase
{
    public function testSomething(): void
    {
        $response = static::createClient()->request('GET', '/api/produits');
        $response;

        $this->assertResponseIsSuccessful();
        $this->assertJsonContains(['@id' => '/api/produits']);
    }
}
