<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use App\Entity\Season;


class SeasonFixtures extends Fixture implements DependentFixtureInterface
{
    const SEASONS = [
        [
            'program' => 'program_The Uncanny Counter',
            'number' => 1
        ],
        [
            'program' => 'program_The Uncanny Counter',
            'number' => 2
        ],
        [
            'program' => 'program_Criminal Minds',
            'number' => 1
        ],
        [
            'program' => 'program_Criminal Minds',
            'number' => 2
        ],
        [
            'program' => 'program_Criminal Minds',
            'number' => 3
        ],
        [
            'program' => 'program_Strong Woman Bong Soon',
            'number' => 1
        ],
        [
            'program' => 'program_Kingdom',
            'number' => 1
        ],
        [
            'program' => 'program_Kingdom',
            'number' => 2
        ],
        [
            'program' => 'program_Descendants of the Sun',
            'number' => 1
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::SEASONS as $season) {
            $seriesSeason = new Season();
            $seriesSeason->setProgram($this->getReference($season['program']));
            $seriesSeason->setNumber($season['number']);
            $seriesSeason->setYear(2022);
            $seriesSeason->setDescription('');
            $manager->persist($seriesSeason);
            $this->addReference($season['program'] .'_season_' . $season['number'], $seriesSeason);
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
