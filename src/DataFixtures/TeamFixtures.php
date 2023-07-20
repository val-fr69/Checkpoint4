<?php

namespace App\DataFixtures;

use App\Entity\Team as TeamEntity;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TeamFixtures extends Fixture
{
    public const TEAMS = [
        [
            'name' => 'SKT T1',
            'nationality' => 'Corée du Sud',
            'logo' => 'sktt1.png',
        ],

        [
            'name' => 'FNATIC',
            'nationality' => 'Royaume-Uni',
            'logo' => 'fnatic.png',
        ],

        [
            'name' => 'GEN-G',
            'nationality' => 'Corée du Sud',
            'logo' => 'geng.png',
        ],

        [
            'name' => 'KCORP',
            'nationality' => 'France',
            'logo' => 'karmine.png',
        ],

        [
            'name' => 'JD GAMING',
            'nationality' => 'Chine',
            'logo' => 'jdg.png',
        ],

        [
            'name' => 'G2',
            'nationality' => 'Allemagne',
            'logo' => 'g2.png',
        ],

        [
            'name' => 'CLOUD9',
            'nationality' => 'Etats-Unis',
            'logo' => 'cloud9.png',
        ],

        [
            'name' => 'VITALITY',
            'nationality' => 'France',
            'logo' => 'vitality.png',
        ],

    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::TEAMS as $comp) {
            $team = new TeamEntity();
            $team
                ->setName($comp['name'])
                ->setNationality($comp['nationality'])
                ->setLogo($comp['logo']);
            $manager->persist($team);
        }

        $manager->flush();
    }
}
