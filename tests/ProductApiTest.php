<?php

namespace App\Tests;

use ApiPlatform\Symfony\Bundle\Test\ApiTestCase;

class ProductApiTest extends ApiTestCase
{
    private $products;

    public function testGetAll(): void
    {
        $response = static::createClient()->request('GET', '/api/produits',['headers' => ['Accept' => 'application/json']]);

        $this->assertResponseIsSuccessful();
        $this->assertResponseHeaderSame('content-type', 'application/json; charset=utf-8');
        $this->assertJsonContains(['@id' => '/api/produits']);
        $this->assertCount(20, $response->toArray());
        $this->products = $response->toArray();
    }

    public function testGet(): void
    {
        // Exécuter la fonction testGetAll
        $this->testGetAll();
        // Récupérer le premier produit du tableau
        $first= array_shift($this->products);
        
        // Faire une requête pour récupérer avec l'identifiant de ce premier produit
        $response = static::createClient()->request('GET','/api/produits'.$first['id']);
        $this->assertResponseIsSuccessful();

        // Vérifier l'en-tête de la réponse
        $this->assertResponseHeaderSame('content-type', 'application/ld+json; charset=utf-8');

        // Regarder dans le json pour voir ce qu'il CONTIENT
        // le titre du produit numéro 1 correspond bien au titre récupérée dans le tableau
        $this->assertJsonContains([
            "title" => $first["title"],
            "price" => $first["price"]
        ]);
    }
}
