<?php

namespace App\DataFixtures;

use App\Entity\Players as PlayersEntity;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PlayersFixtures extends Fixture
{
    public const PLAYERS = [
        ['name' => 'Zeus', 'role' => 'TOP',],
        ['name' => 'Oner', 'role' => 'JUNGLER',],
        ['name' => 'Faker', 'role' => 'MID',],
        ['name' => 'Gumayusi', 'role' => 'ADC',],
        ['name' => 'Keria', 'role' => 'SUPPORT',],

        ['name' => 'Oscarinin', 'role' => 'TOP',],
        ['name' => 'Razork', 'role' => 'JUNGLER',],
        ['name' => 'Humanoid', 'role' => 'MID',],
        ['name' => 'Noah', 'role' => 'ADC',],
        ['name' => 'Trymbi', 'role' => 'SUPPORT',],

        ['name' => 'Doran', 'role' => 'TOP',],
        ['name' => 'Peanut', 'role' => 'JUNGLER',],
        ['name' => 'Chovy', 'role' => 'MID',],
        ['name' => 'Peyz', 'role' => 'ADC',],
        ['name' => 'Delight', 'role' => 'SUPPORT',],

        ['name' => 'Cabochard', 'role' => 'TOP',],
        ['name' => 'Cinkrof', 'role' => 'JUNGLER',],
        ['name' => 'Saken', 'role' => 'MID',],
        ['name' => 'Caliste', 'role' => 'ADC',],
        ['name' => 'Targamas', 'role' => 'SUPPORT',],

        ['name' => '369', 'role' => 'TOP',],
        ['name' => 'Kanavi', 'role' => 'JUNGLER',],
        ['name' => 'Knight', 'role' => 'MID',],
        ['name' => 'Ruler', 'role' => 'ADC',],
        ['name' => 'Missing', 'role' => 'SUPPORT',],

        ['name' => 'BrokenBlade', 'role' => 'TOP',],
        ['name' => 'Yike', 'role' => 'JUNGLER',],
        ['name' => 'Caps', 'role' => 'MID',],
        ['name' => 'HansSama', 'role' => 'ADC',],
        ['name' => 'Mikyx', 'role' => 'SUPPORT',],

        ['name' => 'Fudge', 'role' => 'TOP',],
        ['name' => 'Blaber', 'role' => 'JUNGLER',],
        ['name' => 'Emenes', 'role' => 'MID',],
        ['name' => 'Berserker', 'role' => 'ADC',],
        ['name' => 'Zven', 'role' => 'SUPPORT',],

        ['name' => 'Photon', 'role' => 'TOP',],
        ['name' => 'Bo', 'role' => 'JUNGLER',],
        ['name' => 'Perkz', 'role' => 'MID',],
        ['name' => 'Upset', 'role' => 'ADC',],
        ['name' => 'Kaiser', 'role' => 'SUPPORT',],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::PLAYERS as $gamer) {
            $player = new PlayersEntity();
            $player
                ->setName($gamer['name'])
                ->setRole($gamer['role']);
            $manager->persist($player);
        }

        $manager->flush();
    }
}
