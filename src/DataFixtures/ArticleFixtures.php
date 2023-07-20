<?php

namespace App\DataFixtures;

use App\Entity\Article as ArticleEntity;
use DateTimeImmutable;
use App\DataFixtures\TeamFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ArticleFixtures extends Fixture implements DependentFixtureInterface
{
    public const ARTICLES = [
        [
            'title' => 'Co-streaming au stade du MSI 2023',
            'postdate' => '2023-05-12 00:00:00',
            'poster' => 'article1.jpg',
            'description' => 'Le E-Sport, contraction de "Electronic Sport", est un phénomène en plein essor qui
            a conquis le monde du jeu vidéo, et parmi les titres les plus emblématiques figure League of Legends
            (LoL). Ce jeu en ligne multijoueur a su se tailler une place de choix dans l\'univers compétitif du
            sport électronique grâce à son gameplay stratégique et captivant.\n

            Le principe de League of Legends est simple : deux équipes de cinq joueurs s\'affrontent sur une carte
            virtuelle dans le but de détruire le Nexus ennemi. Chaque joueur incarne un champion avec des compétences
            uniques, ce qui rend le jeu à la fois complexe et dynamique. Cette diversité permet à chaque équipe de
            développer des stratégies distinctes et de s\'adapter aux situations changeantes en temps réel.\n

            Le succès de League of Legends en E-Sport est largement attribué à la communauté passionnée de joueurs
            et de fans qui se rassemble lors de tournois majeurs tels que les Championnats du Monde de League of
            Legends. Ces événements réunissent des milliers de spectateurs en ligne et dans des arènes du monde
            entier, créant une atmosphère électrisante digne des plus grands événements sportifs.\n

            Les joueurs professionnels de LoL sont de véritables athlètes virtuels. Ils s\'entraînent dur des heures
            chaque jour pour perfectionner leurs compétences individuelles et renforcer la coordination de leur équipe.
            Les équipes professionnelles sont soutenues par des organisations, des sponsors et des contrats lucratifs,
            faisant du E-Sport une carrière viable pour certains joueurs talentueux.\n

            Au-delà de la compétition, League of Legends a également contribué à la croissance de l\'industrie du 
            streaming. Des joueurs populaires diffusent leurs parties en direct sur des plateformes telles que Twitch,
            permettant auxfans du monde entier de les suivre, d\'apprendre de leurs techniques et de partager leur
            passion.\n

            Le succès du E-Sport de League of Legends a même conduit à la création de ligues professionnelles régionales
            dans de nombreux pays, attirant de plus en plus de joueurs aspirants à tenter leur chance dans le monde de
            l\'E-Sport.\n

            Cependant, comme toute compétition sportive, le E-Sport n\'est pas à l\'abri de controverses. Des problèmes
            tels que la pression psychologique sur les joueurs, les différends contractuels, le dopage virtuel et la
            toxicité en ligne ont été soulevés et nécessitent une gestion rigoureuse pour assurer l\'intégrité de la
            compétition.\n

            En conclusion, le E-Sport de League of Legends est un phénomène fascinant qui mêle passion, compétition et
            talent. Il a réussi à s\'imposer comme une discipline sportive à part entière, captivant des millions de
            spectateurs et permettant à des joueurs passionnés de vivre leur passion à un niveau professionnel. Avec
            l\'évolution constante du jeu et de l\'industrie, il est clair que le E-Sport continuera de grandir et
            de prospérer dans les années à venir.',
        ],

        [
            'title' => 'la RedBull SoloQ est de retour pour 2023',
            'postdate' => '2023-04-28 00:00:00',
            'poster' => 'article2.jpg',
            'description' => 'Le E-Sport, contraction de "Electronic Sport", est un phénomène en plein essor qui
            a conquis le monde du jeu vidéo, et parmi les titres les plus emblématiques figure League of Legends
            (LoL). Ce jeu en ligne multijoueur a su se tailler une place de choix dans l\'univers compétitif du
            sport électronique grâce à son gameplay stratégique et captivant.\n

            Le principe de League of Legends est simple : deux équipes de cinq joueurs s\'affrontent sur une carte
            virtuelle dans le but de détruire le Nexus ennemi. Chaque joueur incarne un champion avec des compétences
            uniques, ce qui rend le jeu à la fois complexe et dynamique. Cette diversité permet à chaque équipe de
            développer des stratégies distinctes et de s\'adapter aux situations changeantes en temps réel.\n
            
            Le succès de League of Legends en E-Sport est largement attribué à la communauté passionnée de joueurs
            et de fans qui se rassemble lors de tournois majeurs tels que les Championnats du Monde de League of
            Legends. Ces événements réunissent des milliers de spectateurs en ligne et dans des arènes du monde
            entier, créant une atmosphère électrisante digne des plus grands événements sportifs.\n
            
            Les joueurs professionnels de LoL sont de véritables athlètes virtuels. Ils s\'entraînent dur des heures
            chaque jour pour perfectionner leurs compétences individuelles et renforcer la coordination de leur équipe.
            Les équipes professionnelles sont soutenues par des organisations, des sponsors et des contrats lucratifs,
            faisant du E-Sport une carrière viable pour certains joueurs talentueux.\n
            
            Au-delà de la compétition, League of Legends a également contribué à la croissance de l\'industrie du 
            streaming. Des joueurs populaires diffusent leurs parties en direct sur des plateformes telles que Twitch,
            permettant auxfans du monde entier de les suivre, d\'apprendre de leurs techniques et de partager leur
            passion.\n
            
            Le succès du E-Sport de League of Legends a même conduit à la création de ligues professionnelles régionales
            dans de nombreux pays, attirant de plus en plus de joueurs aspirants à tenter leur chance dans le monde de
            l\'E-Sport.\n
            
            Cependant, comme toute compétition sportive, le E-Sport n\'est pas à l\'abri de controverses. Des problèmes
            tels que la pression psychologique sur les joueurs, les différends contractuels, le dopage virtuel et la
            toxicité en ligne ont été soulevés et nécessitent une gestion rigoureuse pour assurer l\'intégrité de la
            compétition.\n
            
            En conclusion, le E-Sport de League of Legends est un phénomène fascinant qui mêle passion, compétition et
            talent. Il a réussi à s\'imposer comme une discipline sportive à part entière, captivant des millions de
            spectateurs et permettant à des joueurs passionnés de vivre leur passion à un niveau professionnel. Avec
            l\'évolution constante du jeu et de l\'industrie, il est clair que le E-Sport continuera de grandir et
            de prospérer dans les années à venir.\n',
        ],

        [
            'title' => 'League of Legends - Guerriers d\'encre MSI 2023',
            'postdate' => '2023-04-28 00:00:00',
            'poster' => 'article3.jpg',
            'description' => 'Le E-Sport, contraction de "Electronic Sport", est un phénomène en plein essor qui
            a conquis le monde du jeu vidéo, et parmi les titres les plus emblématiques figure League of Legends
            (LoL). Ce jeu en ligne multijoueur a su se tailler une place de choix dans l\'univers compétitif du
            sport électronique grâce à son gameplay stratégique et captivant.\n

            Le principe de League of Legends est simple : deux équipes de cinq joueurs s\'affrontent sur une carte
            virtuelle dans le but de détruire le Nexus ennemi. Chaque joueur incarne un champion avec des compétences
            uniques, ce qui rend le jeu à la fois complexe et dynamique. Cette diversité permet à chaque équipe de
            développer des stratégies distinctes et de s\'adapter aux situations changeantes en temps réel.\n
            
            Le succès de League of Legends en E-Sport est largement attribué à la communauté passionnée de joueurs
            et de fans qui se rassemble lors de tournois majeurs tels que les Championnats du Monde de League of
            Legends. Ces événements réunissent des milliers de spectateurs en ligne et dans des arènes du monde
            entier, créant une atmosphère électrisante digne des plus grands événements sportifs.\n
            
            Les joueurs professionnels de LoL sont de véritables athlètes virtuels. Ils s\'entraînent dur des heures
            chaque jour pour perfectionner leurs compétences individuelles et renforcer la coordination de leur équipe.
            Les équipes professionnelles sont soutenues par des organisations, des sponsors et des contrats lucratifs,
            faisant du E-Sport une carrière viable pour certains joueurs talentueux.\n
            
            Au-delà de la compétition, League of Legends a également contribué à la croissance de l\'industrie du 
            streaming. Des joueurs populaires diffusent leurs parties en direct sur des plateformes telles que Twitch,
            permettant auxfans du monde entier de les suivre, d\'apprendre de leurs techniques et de partager leur
            passion.\n
            
            Le succès du E-Sport de League of Legends a même conduit à la création de ligues professionnelles régionales
            dans de nombreux pays, attirant de plus en plus de joueurs aspirants à tenter leur chance dans le monde de
            l\'E-Sport.\n
            
            Cependant, comme toute compétition sportive, le E-Sport n\'est pas à l\'abri de controverses. Des problèmes
            tels que la pression psychologique sur les joueurs, les différends contractuels, le dopage virtuel et la
            toxicité en ligne ont été soulevés et nécessitent une gestion rigoureuse pour assurer l\'intégrité de la
            compétition.\n
            
            En conclusion, le E-Sport de League of Legends est un phénomène fascinant qui mêle passion, compétition et
            talent. Il a réussi à s\'imposer comme une discipline sportive à part entière, captivant des millions de
            spectateurs et permettant à des joueurs passionnés de vivre leur passion à un niveau professionnel. Avec
            l\'évolution constante du jeu et de l\'industrie, il est clair que le E-Sport continuera de grandir et
            de prospérer dans les années à venir.\n',
        ],

        [
            'title' => 'Présentation du MSI 2023',
            'postdate' => '2023-04-24 00:00:00',
            'poster' => 'article4.png',
            'description' => 'Le E-Sport, contraction de "Electronic Sport", est un phénomène en plein essor qui
            a conquis le monde du jeu vidéo, et parmi les titres les plus emblématiques figure League of Legends
            (LoL). Ce jeu en ligne multijoueur a su se tailler une place de choix dans l\'univers compétitif du
            sport électronique grâce à son gameplay stratégique et captivant.\n

            Le principe de League of Legends est simple : deux équipes de cinq joueurs s\'affrontent sur une carte
            virtuelle dans le but de détruire le Nexus ennemi. Chaque joueur incarne un champion avec des compétences
            uniques, ce qui rend le jeu à la fois complexe et dynamique. Cette diversité permet à chaque équipe de
            développer des stratégies distinctes et de s\'adapter aux situations changeantes en temps réel.\n

            Le succès de League of Legends en E-Sport est largement attribué à la communauté passionnée de joueurs
            et de fans qui se rassemble lors de tournois majeurs tels que les Championnats du Monde de League of
            Legends. Ces événements réunissent des milliers de spectateurs en ligne et dans des arènes du monde
            entier, créant une atmosphère électrisante digne des plus grands événements sportifs.\n

            Les joueurs professionnels de LoL sont de véritables athlètes virtuels. Ils s\'entraînent dur des heures
            chaque jour pour perfectionner leurs compétences individuelles et renforcer la coordination de leur équipe.
            Les équipes professionnelles sont soutenues par des organisations, des sponsors et des contrats lucratifs,
            faisant du E-Sport une carrière viable pour certains joueurs talentueux.\n

            Au-delà de la compétition, League of Legends a également contribué à la croissance de l\'industrie du 
            streaming. Des joueurs populaires diffusent leurs parties en direct sur des plateformes telles que Twitch,
            permettant auxfans du monde entier de les suivre, d\'apprendre de leurs techniques et de partager leur
            passion.\n

            Le succès du E-Sport de League of Legends a même conduit à la création de ligues professionnelles régionales
            dans de nombreux pays, attirant de plus en plus de joueurs aspirants à tenter leur chance dans le monde de
            l\'E-Sport.\n

            Cependant, comme toute compétition sportive, le E-Sport n\'est pas à l\'abri de controverses. Des problèmes
            tels que la pression psychologique sur les joueurs, les différends contractuels, le dopage virtuel et la
            toxicité en ligne ont été soulevés et nécessitent une gestion rigoureuse pour assurer l\'intégrité de la
            compétition.\n

            En conclusion, le E-Sport de League of Legends est un phénomène fascinant qui mêle passion, compétition et
            talent. Il a réussi à s\'imposer comme une discipline sportive à part entière, captivant des millions de
            spectateurs et permettant à des joueurs passionnés de vivre leur passion à un niveau professionnel. Avec
            l\'évolution constante du jeu et de l\'industrie, il est clair que le E-Sport continuera de grandir et
            de prospérer dans les années à venir.\n',
        ],

        [
            'title' => 'Annonce des lieux, dates et tickets du Mondial 2023',
            'postdate' => '2023-04-23 00:00:00',
            'poster' => 'article5.jpg',
            'description' => 'Le E-Sport, contraction de "Electronic Sport", est un phénomène en plein essor qui
            a conquis le monde du jeu vidéo, et parmi les titres les plus emblématiques figure League of Legends
            (LoL). Ce jeu en ligne multijoueur a su se tailler une place de choix dans l\'univers compétitif du
            sport électronique grâce à son gameplay stratégique et captivant.\n

            Le principe de League of Legends est simple : deux équipes de cinq joueurs s\'affrontent sur une carte
            virtuelle dans le but de détruire le Nexus ennemi. Chaque joueur incarne un champion avec des compétences
            uniques, ce qui rend le jeu à la fois complexe et dynamique. Cette diversité permet à chaque équipe de
            développer des stratégies distinctes et de s\'adapter aux situations changeantes en temps réel.\n
            
            Le succès de League of Legends en E-Sport est largement attribué à la communauté passionnée de joueurs
            et de fans qui se rassemble lors de tournois majeurs tels que les Championnats du Monde de League of
            Legends. Ces événements réunissent des milliers de spectateurs en ligne et dans des arènes du monde
            entier, créant une atmosphère électrisante digne des plus grands événements sportifs.\n
            
            Les joueurs professionnels de LoL sont de véritables athlètes virtuels. Ils s\'entraînent dur des heures
            chaque jour pour perfectionner leurs compétences individuelles et renforcer la coordination de leur équipe.
            Les équipes professionnelles sont soutenues par des organisations, des sponsors et des contrats lucratifs,
            faisant du E-Sport une carrière viable pour certains joueurs talentueux.\n
            
            Au-delà de la compétition, League of Legends a également contribué à la croissance de l\'industrie du 
            streaming. Des joueurs populaires diffusent leurs parties en direct sur des plateformes telles que Twitch,
            permettant auxfans du monde entier de les suivre, d\'apprendre de leurs techniques et de partager leur
            passion.\n
            
            Le succès du E-Sport de League of Legends a même conduit à la création de ligues professionnelles régionales
            dans de nombreux pays, attirant de plus en plus de joueurs aspirants à tenter leur chance dans le monde de
            l\'E-Sport.\n
            
            Cependant, comme toute compétition sportive, le E-Sport n\'est pas à l\'abri de controverses. Des problèmes
            tels que la pression psychologique sur les joueurs, les différends contractuels, le dopage virtuel et la
            toxicité en ligne ont été soulevés et nécessitent une gestion rigoureuse pour assurer l\'intégrité de la
            compétition.\n
            
            En conclusion, le E-Sport de League of Legends est un phénomène fascinant qui mêle passion, compétition et
            talent. Il a réussi à s\'imposer comme une discipline sportive à part entière, captivant des millions de
            spectateurs et permettant à des joueurs passionnés de vivre leur passion à un niveau professionnel. Avec
            l\'évolution constante du jeu et de l\'industrie, il est clair que le E-Sport continuera de grandir et
            de prospérer dans les années à venir.\n',
        ],

        [
            'title' => 'La finale du LEC de 2023 en Septembre 2023 !',
            'postdate' => '2023-04-21 00:00:00',
            'poster' => 'article6.jpg',
            'description' => 'Le E-Sport, contraction de "Electronic Sport", est un phénomène en plein essor qui
            a conquis le monde du jeu vidéo, et parmi les titres les plus emblématiques figure League of Legends
            (LoL). Ce jeu en ligne multijoueur a su se tailler une place de choix dans l\'univers compétitif du
            sport électronique grâce à son gameplay stratégique et captivant.\n

            Le principe de League of Legends est simple : deux équipes de cinq joueurs s\'affrontent sur une carte
            virtuelle dans le but de détruire le Nexus ennemi. Chaque joueur incarne un champion avec des compétences
            uniques, ce qui rend le jeu à la fois complexe et dynamique. Cette diversité permet à chaque équipe de
            développer des stratégies distinctes et de s\'adapter aux situations changeantes en temps réel.\n
            
            Le succès de League of Legends en E-Sport est largement attribué à la communauté passionnée de joueurs
            et de fans qui se rassemble lors de tournois majeurs tels que les Championnats du Monde de League of
            Legends. Ces événements réunissent des milliers de spectateurs en ligne et dans des arènes du monde
            entier, créant une atmosphère électrisante digne des plus grands événements sportifs.\n
            
            Les joueurs professionnels de LoL sont de véritables athlètes virtuels. Ils s\'entraînent dur des heures
            chaque jour pour perfectionner leurs compétences individuelles et renforcer la coordination de leur équipe.
            Les équipes professionnelles sont soutenues par des organisations, des sponsors et des contrats lucratifs,
            faisant du E-Sport une carrière viable pour certains joueurs talentueux.\n
            
            Au-delà de la compétition, League of Legends a également contribué à la croissance de l\'industrie du 
            streaming. Des joueurs populaires diffusent leurs parties en direct sur des plateformes telles que Twitch,
            permettant auxfans du monde entier de les suivre, d\'apprendre de leurs techniques et de partager leur
            passion.\n
            
            Le succès du E-Sport de League of Legends a même conduit à la création de ligues professionnelles régionales
            dans de nombreux pays, attirant de plus en plus de joueurs aspirants à tenter leur chance dans le monde de
            l\'E-Sport.\n
            
            Cependant, comme toute compétition sportive, le E-Sport n\'est pas à l\'abri de controverses. Des problèmes
            tels que la pression psychologique sur les joueurs, les différends contractuels, le dopage virtuel et la
            toxicité en ligne ont été soulevés et nécessitent une gestion rigoureuse pour assurer l\'intégrité de la
            compétition.\n
            
            En conclusion, le E-Sport de League of Legends est un phénomène fascinant qui mêle passion, compétition et
            talent. Il a réussi à s\'imposer comme une discipline sportive à part entière, captivant des millions de
            spectateurs et permettant à des joueurs passionnés de vivre leur passion à un niveau professionnel. Avec
            l\'évolution constante du jeu et de l\'industrie, il est clair que le E-Sport continuera de grandir et
            de prospérer dans les années à venir.\n',
        ],

        [
            'title' => 'La Champions Queue revient pour le MSI 2023 !',
            'postdate' => '2023-04-20 00:00:00',
            'poster' => 'article7.jpg',
            'description' => 'Le E-Sport, contraction de "Electronic Sport", est un phénomène en plein essor qui
            a conquis le monde du jeu vidéo, et parmi les titres les plus emblématiques figure League of Legends
            (LoL). Ce jeu en ligne multijoueur a su se tailler une place de choix dans l\'univers compétitif du
            sport électronique grâce à son gameplay stratégique et captivant.\n

            Le principe de League of Legends est simple : deux équipes de cinq joueurs s\'affrontent sur une carte
            virtuelle dans le but de détruire le Nexus ennemi. Chaque joueur incarne un champion avec des compétences
            uniques, ce qui rend le jeu à la fois complexe et dynamique. Cette diversité permet à chaque équipe de
            développer des stratégies distinctes et de s\'adapter aux situations changeantes en temps réel.\n

            Le succès de League of Legends en E-Sport est largement attribué à la communauté passionnée de joueurs
            et de fans qui se rassemble lors de tournois majeurs tels que les Championnats du Monde de League of
            Legends. Ces événements réunissent des milliers de spectateurs en ligne et dans des arènes du monde
            entier, créant une atmosphère électrisante digne des plus grands événements sportifs.\n

            Les joueurs professionnels de LoL sont de véritables athlètes virtuels. Ils s\'entraînent dur des heures
            chaque jour pour perfectionner leurs compétences individuelles et renforcer la coordination de leur équipe.
            Les équipes professionnelles sont soutenues par des organisations, des sponsors et des contrats lucratifs,
            faisant du E-Sport une carrière viable pour certains joueurs talentueux.\n

            Au-delà de la compétition, League of Legends a également contribué à la croissance de l\'industrie du 
            streaming. Des joueurs populaires diffusent leurs parties en direct sur des plateformes telles que Twitch,
            permettant auxfans du monde entier de les suivre, d\'apprendre de leurs techniques et de partager leur
            passion.\n

            Le succès du E-Sport de League of Legends a même conduit à la création de ligues professionnelles régionales
            dans de nombreux pays, attirant de plus en plus de joueurs aspirants à tenter leur chance dans le monde de
            l\'E-Sport.\n

            Cependant, comme toute compétition sportive, le E-Sport n\'est pas à l\'abri de controverses. Des problèmes
            tels que la pression psychologique sur les joueurs, les différends contractuels, le dopage virtuel et la
            toxicité en ligne ont été soulevés et nécessitent une gestion rigoureuse pour assurer l\'intégrité de la
            compétition.\n

            En conclusion, le E-Sport de League of Legends est un phénomène fascinant qui mêle passion, compétition et
            talent. Il a réussi à s\'imposer comme une discipline sportive à part entière, captivant des millions de
            spectateurs et permettant à des joueurs passionnés de vivre leur passion à un niveau professionnel. Avec
            l\'évolution constante du jeu et de l\'industrie, il est clair que le E-Sport continuera de grandir et
            de prospérer dans les années à venir.\n',
        ],

        [
            'title' => 'Les emotes du lancement de la saison 2023 sont là',
            'postdate' => '2023-03-16 00:00:00',
            'poster' => 'article8.png',
            'description' => 'Le E-Sport, contraction de "Electronic Sport", est un phénomène en plein essor qui
            a conquis le monde du jeu vidéo, et parmi les titres les plus emblématiques figure League of Legends
            (LoL). Ce jeu en ligne multijoueur a su se tailler une place de choix dans l\'univers compétitif du
            sport électronique grâce à son gameplay stratégique et captivant.\n

            Le principe de League of Legends est simple : deux équipes de cinq joueurs s\'affrontent sur une carte
            virtuelle dans le but de détruire le Nexus ennemi. Chaque joueur incarne un champion avec des compétences
            uniques, ce qui rend le jeu à la fois complexe et dynamique. Cette diversité permet à chaque équipe de
            développer des stratégies distinctes et de s\'adapter aux situations changeantes en temps réel.\n
            
            Le succès de League of Legends en E-Sport est largement attribué à la communauté passionnée de joueurs
            et de fans qui se rassemble lors de tournois majeurs tels que les Championnats du Monde de League of
            Legends. Ces événements réunissent des milliers de spectateurs en ligne et dans des arènes du monde
            entier, créant une atmosphère électrisante digne des plus grands événements sportifs.\n
            
            Les joueurs professionnels de LoL sont de véritables athlètes virtuels. Ils s\'entraînent dur des heures
            chaque jour pour perfectionner leurs compétences individuelles et renforcer la coordination de leur équipe.
            Les équipes professionnelles sont soutenues par des organisations, des sponsors et des contrats lucratifs,
            faisant du E-Sport une carrière viable pour certains joueurs talentueux.\n
            
            Au-delà de la compétition, League of Legends a également contribué à la croissance de l\'industrie du 
            streaming. Des joueurs populaires diffusent leurs parties en direct sur des plateformes telles que Twitch,
            permettant auxfans du monde entier de les suivre, d\'apprendre de leurs techniques et de partager leur
            passion.\n
            
            Le succès du E-Sport de League of Legends a même conduit à la création de ligues professionnelles régionales
            dans de nombreux pays, attirant de plus en plus de joueurs aspirants à tenter leur chance dans le monde de
            l\'E-Sport.\n
            
            Cependant, comme toute compétition sportive, le E-Sport n\'est pas à l\'abri de controverses. Des problèmes
            tels que la pression psychologique sur les joueurs, les différends contractuels, le dopage virtuel et la
            toxicité en ligne ont été soulevés et nécessitent une gestion rigoureuse pour assurer l\'intégrité de la
            compétition.\n
            
            En conclusion, le E-Sport de League of Legends est un phénomène fascinant qui mêle passion, compétition et
            talent. Il a réussi à s\'imposer comme une discipline sportive à part entière, captivant des millions de
            spectateurs et permettant à des joueurs passionnés de vivre leur passion à un niveau professionnel. Avec
            l\'évolution constante du jeu et de l\'industrie, il est clair que le E-Sport continuera de grandir et
            de prospérer dans les années à venir.\n',
        ],

        [
            'title' => 'Format du Lancement de la saison 2023',
            'postdate' => '2023-01-05 00:00:00',
            'poster' => 'article9.jpg',
            'description' => 'Le E-Sport, contraction de "Electronic Sport", est un phénomène en plein essor qui
            a conquis le monde du jeu vidéo, et parmi les titres les plus emblématiques figure League of Legends
            (LoL). Ce jeu en ligne multijoueur a su se tailler une place de choix dans l\'univers compétitif du
            sport électronique grâce à son gameplay stratégique et captivant.\n

            Le principe de League of Legends est simple : deux équipes de cinq joueurs s\'affrontent sur une carte
            virtuelle dans le but de détruire le Nexus ennemi. Chaque joueur incarne un champion avec des compétences
            uniques, ce qui rend le jeu à la fois complexe et dynamique. Cette diversité permet à chaque équipe de
            développer des stratégies distinctes et de s\'adapter aux situations changeantes en temps réel.\n
            
            Le succès de League of Legends en E-Sport est largement attribué à la communauté passionnée de joueurs
            et de fans qui se rassemble lors de tournois majeurs tels que les Championnats du Monde de League of
            Legends. Ces événements réunissent des milliers de spectateurs en ligne et dans des arènes du monde
            entier, créant une atmosphère électrisante digne des plus grands événements sportifs.\n
            
            Les joueurs professionnels de LoL sont de véritables athlètes virtuels. Ils s\'entraînent dur des heures
            chaque jour pour perfectionner leurs compétences individuelles et renforcer la coordination de leur équipe.
            Les équipes professionnelles sont soutenues par des organisations, des sponsors et des contrats lucratifs,
            faisant du E-Sport une carrière viable pour certains joueurs talentueux.\n
            
            Au-delà de la compétition, League of Legends a également contribué à la croissance de l\'industrie du 
            streaming. Des joueurs populaires diffusent leurs parties en direct sur des plateformes telles que Twitch,
            permettant auxfans du monde entier de les suivre, d\'apprendre de leurs techniques et de partager leur
            passion.\n
            
            Le succès du E-Sport de League of Legends a même conduit à la création de ligues professionnelles régionales
            dans de nombreux pays, attirant de plus en plus de joueurs aspirants à tenter leur chance dans le monde de
            l\'E-Sport.\n
            
            Cependant, comme toute compétition sportive, le E-Sport n\'est pas à l\'abri de controverses. Des problèmes
            tels que la pression psychologique sur les joueurs, les différends contractuels, le dopage virtuel et la
            toxicité en ligne ont été soulevés et nécessitent une gestion rigoureuse pour assurer l\'intégrité de la
            compétition.\n
            
            En conclusion, le E-Sport de League of Legends est un phénomène fascinant qui mêle passion, compétition et
            talent. Il a réussi à s\'imposer comme une discipline sportive à part entière, captivant des millions de
            spectateurs et permettant à des joueurs passionnés de vivre leur passion à un niveau professionnel. Avec
            l\'évolution constante du jeu et de l\'industrie, il est clair que le E-Sport continuera de grandir et
            de prospérer dans les années à venir.\n',
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
                ->setPoster($object['poster'])
                ->setDescription($object['description']);
            $manager->persist($article);
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
