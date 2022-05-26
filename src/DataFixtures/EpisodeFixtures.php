<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use App\Entity\Episode;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    const EPISODES = [
        [
            'season' => 'program_The Uncanny Counter_season_1',
            'title' => 'bla bla bla',
            'number' => '1',
        ],
        [
            'season' => 'program_The Uncanny Counter_season_1',
            'title' => 'bla bla bla',
            'number' => '2',
        ],
        [
            'season' => 'program_The Uncanny Counter_season_1',
            'title' => 'bla bla bla',
            'number' => '3',
        ],
        [
            'season' => 'program_The Uncanny Counter_season_1',
            'title' => 'bla bla bla',
            'number' => '4',
        ],
        [
            'season' => 'program_The Uncanny Counter_season_2',
            'title' => 'bla bla bla',
            'number' => '1',
        ],
        [
            'season' => 'program_The Uncanny Counter_season_2',
            'title' => 'bla bla bla',
            'number' => '2',
        ],
        [
            'season' => 'program_The Uncanny Counter_season_2',
            'title' => 'bla bla bla',
            'number' => '3',
        ],
        [
            'season' => 'program_The Uncanny Counter_season_2',
            'title' => 'bla bla bla',
            'number' => '4',
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::EPISODES as $episode) {
            $seasonEpisode = new Episode();
            $seasonEpisode->setSeason($this->getReference($episode['season']));
            $seasonEpisode->setTitle($episode['title']);
            $seasonEpisode->setNumber($episode['number']);
            $seasonEpisode->setSynopsis('');
            $manager->persist($seasonEpisode);
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
