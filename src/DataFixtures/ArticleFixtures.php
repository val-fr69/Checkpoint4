<?php

namespace App\DataFixtures;

use App\Entity\Article as ArticleEntity;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures extends Fixture
{
    public const ARTICLES = [
        [
            'title' => 'Co-streaming au stade du MSI 2023',
            'postdate' => '2023-05-12 00:00:00',
            'poster' => 'article1.jpg',
        ],

        [
            'title' => 'la RedBull SoloQ est de retour pour 2023',
            'postdate' => '2023-04-28 00:00:00',
            'poster' => 'article2.jpg',
        ],

        [
            'title' => 'League of Legends - Guerriers d\'encre MSI 2023',
            'postdate' => '2023-04-28 00:00:00',
            'poster' => 'article3.jpg',
        ],

        [
            'title' => 'Présentation du MSI 2023',
            'postdate' => '2023-04-24 00:00:00',
            'poster' => 'article4.png',
        ],

        [
            'title' => 'Annonce des lieux, dates et tickets du Mondial 2023',
            'postdate' => '2023-04-23 00:00:00',
            'poster' => 'article5.jpg',
        ],

        [
            'title' => 'La finale de la saison du LEC de 2023 aura lieu du 8 au 10 septembre !',
            'postdate' => '2023-04-21 00:00:00',
            'poster' => 'article6.jpg',
        ],

        [
            'title' => 'La Champions Queue revient pour le MSI 2023 !',
            'postdate' => '2023-04-20 00:00:00',
            'poster' => 'article7.jpg',
        ],

        [
            'title' => 'Les emotes du lancement de la saison 2023 sont là',
            'postdate' => '2023-03-16 00:00:00',
            'poster' => 'article8.png',
        ],

        [
            'title' => 'Format du Lancement de la saison 2023',
            'postdate' => '2023-01-05 00:00:00',
            'poster' => 'article9.jpg',
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::ARTICLES as $object) {
            $article = new ArticleEntity();
            $postDate = new DateTimeImmutable($object['postdate']);
            $article
                ->setTitle($object['title'])
                ->setPostdate($postDate)
                ->setPoster($object['poster']);
            $manager->persist($article);
        }

        $manager->flush();
    }
}
