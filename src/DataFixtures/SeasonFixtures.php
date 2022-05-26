<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use App\Entity\Season;
use Faker\Factory;


class SeasonFixtures extends Fixture implements DependentFixtureInterface
{
    // const SEASONS = [
    //     [
    //         'program' => 'program_The Uncanny Counter',
    //         'number' => 1
    //     ],
    //     [
    //         'program' => 'program_The Uncanny Counter',
    //         'number' => 2
    //     ],
    //     [
    //         'program' => 'program_Criminal Minds',
    //         'number' => 1
    //     ],
    //     [
    //         'program' => 'program_Criminal Minds',
    //         'number' => 2
    //     ],
    //     [
    //         'program' => 'program_Criminal Minds',
    //         'number' => 3
    //     ],
    //     [
    //         'program' => 'program_Strong Woman Bong Soon',
    //         'number' => 1
    //     ],
    //     [
    //         'program' => 'program_Kingdom',
    //         'number' => 1
    //     ],
    //     [
    //         'program' => 'program_Kingdom',
    //         'number' => 2
    //     ],
    //     [
    //         'program' => 'program_Descendants of the Sun',
    //         'number' => 1
    //     ],
    // ];

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        $number = 1;
        for($i = 0; $i < 5; $i++) {
            $season = new Season();
            $season->setNumber($number++);
            $season->setYear($faker->year());
            $season->setDescription($faker->paragraphs(3, true));
            $season->setProgram($this->getReference('program_The Uncanny Counter'));
            $manager->persist($season);
            $this->addReference('program_The Uncanny Counter_season_' . $season->getNumber(), $season);
        }
        $number = 1;
        for($i = 0; $i < 5; $i++) {
            $season = new Season();
            $season->setNumber($number++);
            $season->setYear($faker->year());
            $season->setDescription($faker->paragraphs(3, true));
            $season->setProgram($this->getReference('program_Criminal Minds'));
            $manager->persist($season);
            $this->addReference('program_Criminal Minds_season_' . $season->getNumber(), $season);
        }
        $number = 1;
        for($i = 0; $i < 5; $i++) {
            $season = new Season();
            $season->setNumber($number++);            
            $season->setYear($faker->year());
            $season->setDescription($faker->paragraphs(3, true));
            $season->setProgram($this->getReference('program_LOVE DEATH + ROBOTS'));
            $manager->persist($season);
            $this->addReference('program_LOVE DEATH + ROBOTS_season_' . $season->getNumber(), $season);
        }
        $number = 1;
        for($i = 0; $i < 5; $i++) {
            $season = new Season();
            $season->setNumber($number++);            
            $season->setYear($faker->year());
            $season->setDescription($faker->paragraphs(3, true));
            $season->setProgram($this->getReference('program_Strong Woman Bong Soon'));
            $manager->persist($season);
            $this->addReference('program_Strong Woman Bong Soon_season_' . $season->getNumber(), $season);
        }
        $number = 1;
        for($i = 0; $i < 5; $i++) {
            $season = new Season();
            $season->setNumber($number++);            
            $season->setYear($faker->year());
            $season->setDescription($faker->paragraphs(3, true));
            $season->setProgram($this->getReference('program_Doom at your service'));
            $manager->persist($season);
            $this->addReference('program_Doom at your service_season_' . $season->getNumber(), $season);
        }
        $number = 1;
        for($i = 0; $i < 5; $i++) {
            $season = new Season();
            $season->setNumber($number++);            
            $season->setYear($faker->year());
            $season->setDescription($faker->paragraphs(3, true));
            $season->setProgram($this->getReference('program_Kingdom'));
            $manager->persist($season);
            $this->addReference('program_Kingdom_season_' . $season->getNumber(), $season);
        }
        $number = 1;
        for($i = 0; $i < 5; $i++) {
            $season = new Season();
            $season->setNumber($number++);
            $season->setYear($faker->year());
            $season->setDescription($faker->paragraphs(3, true));
            $season->setProgram($this->getReference('program_Descendants of the Sun'));
            $manager->persist($season);
            $this->addReference('program_Descendants of the Sun_season_' . $season->getNumber(), $season);
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
