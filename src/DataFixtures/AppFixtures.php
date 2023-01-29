<?php

namespace App\DataFixtures;

use App\Entity\Tache;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=1; $i <=50 ; $i++) { 
            $tache = new Tache();
            $tache -> setName("truc")
            ->setDescription("un machin")
            ->setStatut("1")
            ->setDateDeFin("23/06/2023");
            
            $manager->persist($tache);
        }



        $manager->flush();
    }
}
