<?php

namespace App\DataFixtures;

use App\Entity\Tournament;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class TournamentFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $tournament = new Tournament();
        $tournament->setName('Worlds 2023');
        $manager->persist($tournament);
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            TeamFixtures::class,
        ];
    }
}
