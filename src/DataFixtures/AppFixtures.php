<?php

namespace App\DataFixtures;

use App\Entity\Pilote;
use App\Entity\Qualification;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $qualification = new Qualification();
        $qualification->setCode('COPIL');
        $qualification->setLibelle('Copilote');
        $manager->persist($qualification);

        $pilote = new Pilote();
        $pilote->setNom('SARDOUX');
        $pilote->setPrenom('Michel');
        $pilote->setEmail('m.sardoux@gmail.com');
        $pilote->setQualification($qualification);
        $manager->persist($pilote);
        

        $manager->flush();
    }
}
