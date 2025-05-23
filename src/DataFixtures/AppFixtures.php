<?php
// src/DataFixtures/ProductFixtures.php

namespace App\DataFixtures;

use App\Entity\Product;
use App\Entity\Category; // Ensure Category is imported
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Create categories
        $category1 = new Category();
        $category1->setName('Category 1');
        $manager->persist($category1);

        $category2 = new Category();
        $category2->setName('Category 2');
        $manager->persist($category2);

        $products = [
            ['name' => 'Blackbelt', 'price' => 29.90, 'featured' => true, 'image' => 'images/Blackbelt.jpeg', 'category' => $category1],
            ['name' => 'BlueBelt', 'price' => 29.90, 'featured' => false, 'image' => 'images/BlueBelt.jpeg', 'category' => $category1],
            ['name' => 'Street', 'price' => 34.50, 'featured' => false, 'image' => 'images/Street.jpeg', 'category' => $category2],
            ['name' => 'Pokeball', 'price' => 45.00, 'featured' => true, 'image' => 'images/Pokeball.jpeg', 'category' => $category2],
            ['name' => 'PinkLady', 'price' => 29.90, 'featured' => false, 'image' => 'images/PinkLady.jpeg', 'category' => $category1],
            ['name' => 'Snow', 'price' => 32.00, 'featured' => false, 'image' => 'images/Snow.jpeg', 'category' => $category1],
            ['name' => 'Greyback', 'price' => 28.50, 'featured' => false, 'image' => 'images/Greyback.jpeg', 'category' => $category2],
            ['name' => 'BlueCloud', 'price' => 45.00, 'featured' => false, 'image' => 'images/BlueCould.jpeg', 'category' => $category2],
            ['name' => 'BornInUsa', 'price' => 59.90, 'featured' => true, 'image' => 'images/BornInUsa.jpeg', 'category' => $category1],
            ['name' => 'GreenSchool', 'price' => 42.20, 'featured' => false, 'image' => 'images/GreenSchool.jpeg', 'category' => $category2],
        ];

        foreach ($products as $data) {
            $product = new Product();
            $product->setName($data['name'])
             ->setSizes(['XS', 'S', 'M', 'L', 'XL']) // Set multiple sizes
             ->setStock(['XS' => 2, 'S' => 2, 'M' => 2, 'L' => 2, 'XL' => 2]) // Stock for each size

                    ->setPrice($data['price'])
                    ->setStock(['XS' => 2, 'S' => 2, 'M' => 2, 'L' => 2, 'XL' => 2]) // Stock for each size
                    ->setFeatured($data['featured'])
                    ->setImage($data['image'])
                    ->setCategory($data['category']); // Associate with category
            $manager->persist($product);
        }

        $manager->flush();
    }
}
