<?php

namespace App\Controller;

use App\Repository\PlayersRepository;
use App\Repository\TeamRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/team', name: 'team')]
class TeamController extends AbstractController
{
    #[Route('', name: '')]
    public function index(TeamRepository $teamRepository): Response
    {
        $teams = $teamRepository->findAll();

        return $this->render(
            'team/index.html.twig',
            ['teams' => $teams,]
        );
    }
    #[Route('/show/{id<^[0-9]+$>}', name: '_show')]
    public function showPlayers(int $id, TeamRepository $teamRepository, PlayersRepository $playersRepository): Response
    {
        $team = $teamRepository->find($id);

        $players = $playersRepository->findBy(['team' => $team]);

        return $this->render(
            'team/show.html.twig',
            ['team' => $team, 'players' => $players]
        );
    }
}
