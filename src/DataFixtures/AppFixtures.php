<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // create 20 products! Bam!
        for ($i = 0; $i < 20; $i++) {
            $product = new Produit();
            $product->setTitre('product '.$i);
            $product->setDescription('description '.$i);
            $product->setPrix(mt_rand(10, 100));
            $manager->persist($product);
        }
        $manager->flush();
    }
}
