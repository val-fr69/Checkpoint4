<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Players;
use App\Form\PlayerType;
use App\Repository\PlayersRepository;
use Doctrine\ORM\EntityManagerInterface;

class PlayerController extends AbstractController
{
    #[Route('/player', name: 'list_player')]
    public function index(PlayersRepository $playersRepository): Response
    {
        $players = $playersRepository->findAll();

        return $this->render(
            'player/list.html.twig',
            ['players' => $players,]
        );
    }


    #[Route('/player/new', name: 'new_player', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $manager
    ): Response {
        $player = new Players();
        $form = $this->createForm(PlayerType::class, $player);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $player = $form->getData();

            $manager->persist($player);
            $manager->flush();

            $this->addFlash(
                'success',
                'Le joueur a bien été ajouté à une équipe'
            );
            return $this->redirectToRoute('list_player');
        }

        return $this->render('player/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/player/edit/{id}', name: 'edit_player', methods: ['GET', 'POST'])]
    public function edit(
        int $id,
        EntityManagerInterface $manager,
        PlayersRepository $playersRepository,
        Request $request
    ): Response {

        $player = $playersRepository->find($id);

        $form = $this->createForm(PlayerType::class, $player);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $player = $form->getData();

            $manager->persist($player);
            $manager->flush();

            $this->addFlash(
                'success',
                'Le joueur a bien été modifié'
            );
            return $this->redirectToRoute('list_player');
        }


        return $this->render('player/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/player/delete/{id}', name: 'delete_player', methods: ['GET'])]
    public function delete(
        int $id,
        EntityManagerInterface $manager,
        PlayersRepository $playersRepository
    ): Response {

        $player = $playersRepository->find($id);
        $manager->remove($player);
        $manager->flush();

        $this->addFlash(
            'success',
            'Le joueur a bien été supprimé'
        );

        return $this->redirectToRoute('list_player');
    }
}
