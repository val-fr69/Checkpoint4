<?php

namespace App\DataFixtures;

use App\Entity\Players as PlayersEntity;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use App\DataFixtures\TeamFixtures;

class PlayersFixtures extends Fixture implements DependentFixtureInterface
{
    public const PLAYERS = [
        ['name' => 'Zeus', 'role' => 'TOP', 'team' => 'SKT T1'],
        ['name' => 'Oner', 'role' => 'JUNGLER', 'team' => 'SKT T1'],
        ['name' => 'Faker', 'role' => 'MID', 'team' => 'SKT T1'],
        ['name' => 'Gumayusi', 'role' => 'ADC', 'team' => 'SKT T1'],
        ['name' => 'Keria', 'role' => 'SUPPORT', 'team' => 'SKT T1'],

        ['name' => 'Oscarinin', 'role' => 'TOP', 'team' => 'FNATIC'],
        ['name' => 'Razork', 'role' => 'JUNGLER', 'team' => 'FNATIC'],
        ['name' => 'Humanoid', 'role' => 'MID', 'team' => 'FNATIC'],
        ['name' => 'Noah', 'role' => 'ADC', 'team' => 'FNATIC'],
        ['name' => 'Trymbi', 'role' => 'SUPPORT', 'team' => 'FNATIC'],

        ['name' => 'Doran', 'role' => 'TOP', 'team' => 'GEN-G'],
        ['name' => 'Peanut', 'role' => 'JUNGLER', 'team' => 'GEN-G'],
        ['name' => 'Chovy', 'role' => 'MID', 'team' => 'GEN-G'],
        ['name' => 'Peyz', 'role' => 'ADC', 'team' => 'GEN-G'],
        ['name' => 'Delight', 'role' => 'SUPPORT', 'team' => 'GEN-G'],

        ['name' => 'Cabochard', 'role' => 'TOP', 'team' => 'KCORP'],
        ['name' => 'Cinkrof', 'role' => 'JUNGLER', 'team' => 'KCORP'],
        ['name' => 'Saken', 'role' => 'MID', 'team' => 'KCORP'],
        ['name' => 'Caliste', 'role' => 'ADC', 'team' => 'KCORP'],
        ['name' => 'Targamas', 'role' => 'SUPPORT', 'team' => 'KCORP'],

        ['name' => '369', 'role' => 'TOP', 'team' => 'JD GAMING'],
        ['name' => 'Kanavi', 'role' => 'JUNGLER', 'team' => 'JD GAMING'],
        ['name' => 'Knight', 'role' => 'MID', 'team' => 'JD GAMING'],
        ['name' => 'Ruler', 'role' => 'ADC', 'team' => 'JD GAMING'],
        ['name' => 'Missing', 'role' => 'SUPPORT', 'team' => 'JD GAMING'],

        ['name' => 'BrokenBlade', 'role' => 'TOP', 'team' => 'G2'],
        ['name' => 'Yike', 'role' => 'JUNGLER', 'team' => 'G2'],
        ['name' => 'Caps', 'role' => 'MID', 'team' => 'G2'],
        ['name' => 'HansSama', 'role' => 'ADC', 'team' => 'G2'],
        ['name' => 'Mikyx', 'role' => 'SUPPORT', 'team' => 'G2'],

        ['name' => 'Fudge', 'role' => 'TOP', 'team' => 'CLOUD9'],
        ['name' => 'Blaber', 'role' => 'JUNGLER', 'team' => 'CLOUD9'],
        ['name' => 'Emenes', 'role' => 'MID', 'team' => 'CLOUD9'],
        ['name' => 'Berserker', 'role' => 'ADC', 'team' => 'CLOUD9'],
        ['name' => 'Zven', 'role' => 'SUPPORT', 'team' => 'CLOUD9'],

        ['name' => 'Photon', 'role' => 'TOP', 'team' => 'VITALITY'],
        ['name' => 'Bo', 'role' => 'JUNGLER', 'team' => 'VITALITY'],
        ['name' => 'Perkz', 'role' => 'MID', 'team' => 'VITALITY'],
        ['name' => 'Upset', 'role' => 'ADC', 'team' => 'VITALITY'],
        ['name' => 'Kaiser', 'role' => 'SUPPORT', 'team' => 'VITALITY'],




    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::PLAYERS as $gamer) {
            $player = new PlayersEntity();
            $player
                ->setName($gamer['name'])
                ->setRole($gamer['role'])
                ->setTeam($this->getReference($gamer['team']));
            $manager->persist($player);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            TeamFixtures::class,
        ];
    }
}
