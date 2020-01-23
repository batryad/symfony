<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 50; $i++) {
            $category = new Category();
            $category->setName('Catégorie n°' . $i);
            $manager->persist($category);
            $this->addReference('categorie_' . $i, $category);
        }
        $manager->flush();
    }
}
