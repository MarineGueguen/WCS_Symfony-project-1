<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ActorFixtures extends Fixture implements DependentFixtureInterface
{
    const PROGRAMS = ['program_The Uncanny Counter', 'program_Criminal Minds', 'program_LOVE DEATH + ROBOTS', 'program_Strong Woman Bong Soon', 'program_Doom at your service', 'program_Kingdom', 'program_Descendants of the Sun'];
    
    public function load(ObjectManager $manager): void
    {      
        $faker = Factory::create();
        for($i = 0; $i < 10; $i++) {
            $actor = new Actor();
            $actor->setName($faker->words(2, true));
            $actor->addProgram($this->getReference(self::PROGRAMS[array_rand(self::PROGRAMS, 1)]));
            $actor->addProgram($this->getReference(self::PROGRAMS[array_rand(self::PROGRAMS, 1)]));
            $actor->addProgram($this->getReference(self::PROGRAMS[array_rand(self::PROGRAMS, 1)]));
            $manager->persist($actor);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
          ProgramFixtures::class,
        ];
    }
}
