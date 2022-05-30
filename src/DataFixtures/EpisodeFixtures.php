<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use App\Entity\Episode;
use Faker\Factory;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_The Uncanny Counter_season_1'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_The Uncanny Counter_season_2'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_The Uncanny Counter_season_3'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_The Uncanny Counter_season_4'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_The Uncanny Counter_season_5'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Criminal Minds_season_1'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Criminal Minds_season_2'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Criminal Minds_season_3'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Criminal Minds_season_4'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Criminal Minds_season_5'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_LOVE DEATH + ROBOTS_season_1'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_LOVE DEATH + ROBOTS_season_2'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_LOVE DEATH + ROBOTS_season_3'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_LOVE DEATH + ROBOTS_season_4'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_LOVE DEATH + ROBOTS_season_5'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        } 
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Strong Woman Bong Soon_season_1'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Strong Woman Bong Soon_season_2'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Strong Woman Bong Soon_season_3'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Strong Woman Bong Soon_season_4'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Strong Woman Bong Soon_season_5'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Doom at your service_season_1'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Doom at your service_season_2'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Doom at your service_season_3'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Doom at your service_season_4'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Doom at your service_season_5'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Kingdom_season_1'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Kingdom_season_2'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Kingdom_season_3'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Kingdom_season_4'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Kingdom_season_5'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Descendants of the Sun_season_1'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Descendants of the Sun_season_2'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Descendants of the Sun_season_3'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Descendants of the Sun_season_4'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setSeason($this->getReference('program_Descendants of the Sun_season_5'));
            $episode->setTitle($faker->sentences(1, true));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(1, true));
            $manager->persist($episode);
        }

        $manager->flush();
    }
    
    public function getDependencies()
    {
        return [
          SeasonFixtures::class,
        ];
    }
}
