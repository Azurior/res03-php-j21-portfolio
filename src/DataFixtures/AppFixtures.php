<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactoryInterface;

class AppFixtures extends Fixture
{


    
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $project = new Project();
        $project->setName('test');
        $project->setPrimaryTechno('test');
        $project->setSecondTechno('test');
        $project->setDescription('test');

        $manager->persist($project);
        
    

        $manager->flush();
    }
}
